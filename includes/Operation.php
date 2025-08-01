
<?php
    session_start();

    require_once 'Config.php';

    $conn = (new Connection())->getConnection();
    (new Connection())->openConnection();

    $e_id = $_POST['employee_id'];
    $pswd = $_POST['pass_word'];

    $sql = "SELECT * FROM accounts_tbl WHERE e_id = ? AND password = ?";
    $params = array($e_id, $pswd);
    $result = sqlsrv_query($conn, $sql, $params);

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    if (sqlsrv_has_rows($result)) 
    {
        if(sqlsrv_fetch($result) === false) {
            die( print_r( sqlsrv_errors(), true));
        }

        $res = sqlsrv_get_field($result, 4);

        switch ($res) {
            case 'admin':
                echo json_encode(array("statusCode"=>206));
                break;
            case 'dept_Mngr':
                echo json_encode(array("statusCode"=>205)); 
                break;
            case 'fac_sv':
                echo json_encode(array("statusCode"=>204));
                break;
            case 'fac_mngr':
                echo json_encode(array("statusCode"=>203));
                break;
            case 'fac_tchn':
                echo json_encode(array("statusCode"=>202));
                break;
            
            default:
                echo json_encode(array("statusCode"=>201)); // code for user type
                break;
        }
       
    }
    else
    {
        echo json_encode(array("statusCode"=>200));
    }

    // This will not show an alert in the browser when called via AJAX
    // Instead, return a plain string and handle alert in JavaScript
    //echo $e_id . " " . $pswd;

    // session_start();

    // include_once 'Config.php';

    // $conn = (new Connection())->getConnection();
    // (new Connection())->openConnection();

    // if (isset($_POST['submit'])) 
    // {
    //     if ($_POST['submit'] == 'login') {
    //         logUser();
    //     }   
    // }

    // function logUser() 
    // {
    //     global $conn;

    //     $user = $_POST['username'];
    //     $password = $_POST['password'];

    //     $sql = "SELECT * FROM accounts_tbl WHERE acct_username = ? AND password = ?";
    //     $params = array($user, $password);
    //     $result = sqlsrv_query($conn, $sql, $params);

    //     if ($result === false) {
    //         die(print_r(sqlsrv_errors(), true));
    //     }


    //     if (sqlsrv_has_rows($result)) {
    //         // User found, proceed with login
    //         $_SESSION['logged_in'] = true;
    //         header("Location: /JobOrderRequestSystem/dashboard.php");
    //         exit();
    //         // echo "<script>location.href = '/JobOrderRequestSystem/dashboard.php';</script>";
    //     } else {
    //         // User not found
    //         $_SESSION['logged_in'] = false;
    //         if (!empty($_POST['Eid']) || !empty($_POST['password'])) {
    //             header("Location: /JobOrderRequestSystem/index.php?invalid=1");
    //             exit();
    //             //echo "<script>location.href = '/JobOrderRequestSystem/index.php?invalid=1';</script>";
    //         }
    //     }

    //     sqlsrv_free_stmt($result);
    // }
    
    (new Connection())->closeConnection();

?>