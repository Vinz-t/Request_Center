<?php
session_start();
require_once 'Config.php';

$connObj = new Connection();
$conn = $connObj->getConnection();
$connObj->openConnection();

$action = $_POST['action'] ?? '';

switch ($action) {
    case 'login':
        login($conn);
        break;

    case 'add_user':
        addUser($conn);
        break;

    case 'update_user':
        updateUser($conn);
        break;

    case 'fetch_users':
        fetchUsers($conn);
        break;  

    case 'delete_user':
        deleteUser($conn);
        break;


    default:
        echo json_encode(['statusCode' => 400, 'message' => 'Invalid action']);
        break;
}

$connObj->closeConnection();


// LOGIN FUNCTION
function login($conn) {
    $e_id = $_POST['employee_id'] ?? '';
    $pswd = $_POST['pass_word'] ?? '';

    $sql = "SELECT * FROM accounts_tbl WHERE e_id = ? AND password = ?";
    $params = array($e_id, $pswd);
    $result = sqlsrv_query($conn, $sql, $params);

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    if (sqlsrv_has_rows($result)) {
        if (sqlsrv_fetch($result) === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        $res = sqlsrv_get_field($result, 4); // assuming 5th column is role/type

        $roles = [
            'admin' => 206,
            'dept_Mngr' => 205,
            'fac_sv' => 204,
            'fac_mngr' => 203,
            'fac_tchn' => 202
        ];

        $statusCode = $roles[$res] ?? 201;
        echo json_encode(['statusCode' => $statusCode]);
    } else {
        echo json_encode(['statusCode' => 200]); // invalid login
    }
}


// ADD USER FUNCTION EXAMPLE
function addUser($conn) {
    $e_id = $_POST['e_id'] ?? '';
    $name = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    $sql = "INSERT INTO accounts_tbl (e_id, name, password, role) VALUES (?, ?, ?, ?)";
    $params = array($e_id, $name, $password, $role);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        echo json_encode(['statusCode' => 500, 'message' => 'Insert failed']);
    } else {
        echo json_encode(['statusCode' => 201, 'message' => 'User added']);
    }
}


// UPDATE USER FUNCTION EXAMPLE
function updateUser($conn) {
    $e_id = $_POST['e_id'] ?? '';
    $name = $_POST['name'] ?? '';
    $role = $_POST['role'] ?? '';

    $sql = "UPDATE accounts_tbl SET name = ?, role = ? WHERE e_id = ?";
    $params = array($name, $role, $e_id);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        echo json_encode(['statusCode' => 500, 'message' => 'Update failed']);
    } else {
        echo json_encode(['statusCode' => 200, 'message' => 'User updated']);
    }
}

// Fetch dat from my table
function fetchUsers($conn) {
    $sql = "SELECT e_id, name, role FROM accounts_tbl"; // adjust columns as needed
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt === false) {
        echo json_encode(['statusCode' => 500, 'message' => 'Query failed']);
        return;
    }

    $users = [];
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $users[] = $row;
    }

    echo json_encode(['statusCode' => 200, 'data' => $users]);
}

// to delete user function
function deleteUser($conn) {
    $e_id = $_POST['e_id'] ?? '';

    if (empty($e_id)) {
        echo json_encode(['statusCode' => 400, 'message' => 'Missing Employee ID']);
        return;
    }

    $sql = "DELETE FROM accounts_tbl WHERE e_id = ?";
    $params = [$e_id];
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        echo json_encode(['statusCode' => 500, 'message' => 'Delete failed']);
    } else {
        echo json_encode(['statusCode' => 200, 'message' => 'User deleted successfully']);
    }
}


?>

<!-- $.post('includes/Operation.php', {
  action: 'login',
  employee_id: eid,
  pass_word: pwd
}, function(response) {
  var data = JSON.parse(response);
  // handle login response
}); -->




<!-- $.post('includes/Operation.php', {
  action: 'add_user',
  e_id: 'EMP123',
  name: 'John Doe',
  password: 'abc123',
  role: 'fac_tchn'
}, function(response) {
  var data = JSON.parse(response);
  // handle response
}); -->





<!-- $.post('includes/Operation.php', {
  action: 'fetch_users'
}, function(response) {
  var data = JSON.parse(response);

  if (data.statusCode == 200) {
    var users = data.data;

    // Example: populate a table
    let html = '';
    users.forEach(function(user) {
      html += `<tr>
        <td>${user.e_id}</td>
        <td>${user.name}</td>
        <td>${user.role}</td>
      </tr>`;
    });

    $('#usersTable tbody').html(html);
  } else {
    toastr.error(data.message || 'Failed to fetch users.');
  }
});

<table id="usersTable" class="table table-bordered">
  <thead>
    <tr>
      <th>Employee ID</th>
      <th>Name</th>
      <th>Role</th>
    </tr>
  </thead>
  <tbody>
    data will be injected here
  </tbody>
</table>
-->



<!-- function deleteUser(e_id) {
  if (!confirm('Are you sure you want to delete this user?')) return;

  $.post('includes/Operation.php', {
    action: 'delete_user',
    e_id: e_id
  }, function(response) {
    var data = JSON.parse(response);
    
    if (data.statusCode == 200) {
      toastr.success(data.message);
      // optionally reload table
      fetchUsers(); // if you have a function to reload data
    } else {
      toastr.error(data.message || 'Delete failed');
    }
  });
} 

<tr>
  <td>EMP123</td>
  <td>John Doe</td>
  <td>admin</td>
  <td>
    <button onclick="deleteUser('EMP123')" class="btn btn-danger btn-sm">
      Delete
    </button>
  </td>
</tr>

-->

