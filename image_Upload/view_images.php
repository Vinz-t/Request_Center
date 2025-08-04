<?php
$serverName = "DESKTOP-5OL6G85\SQLEXPRESS"; // Change to your server
$connectionOptions = [
    "Database" => "MasterDB",
    "Uid" => "",
    "PWD" => ""
];

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT Id, ImageName FROM ImageTable ORDER BY Id DESC";
$stmt = sqlsrv_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Images</title>
    <style>
        img {
            height: 150px;
            border: 1px solid #ccc;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h2>Uploaded Images</h2>
    <?php
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $id = $row['Id'];
        $name = htmlspecialchars($row['ImageName']);
        echo "<div>";
        echo "<p>$name</p>";
        echo "<a href='display_image.php?id=$id' target='_blank'>";
        echo "<img src='display_image.php?id=$id' alt='$name'>";
        echo "</a>";
        echo "</div>";
    }
    sqlsrv_close($conn);
    ?>
</body>
</html>
