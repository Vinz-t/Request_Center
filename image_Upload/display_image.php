<?php
$serverName = "DESKTOP-5OL6G85\SQLEXPRESS"; // or your actual server name
$connectionOptions = [
    "Database" => "MasterDB",
    "Uid" => "",
    "PWD" => ""
];

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$sql = "SELECT ImageData, MimeType FROM ImageTable WHERE Id = ?";
$params = [$id];

$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    header("Content-Type: " . $row['MimeType']);
    echo $row['ImageData'];
} else {
    header("HTTP/1.0 404 Not Found");
    echo "Image not found.";
}

sqlsrv_close($conn);
?>
