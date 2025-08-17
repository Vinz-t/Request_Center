<?php
header('Content-Type: application/json');

$serverName = "DESKTOP-5OL6G85\\SQLEXPRESS"; 
$connectionOptions = [
    "Database" => "MasterDB",
    "Uid" => "",
    "PWD" => ""
];

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    echo json_encode(["error" => sqlsrv_errors()]);
    exit;
}

$id = $_POST['secret_code'] ?? ''; // hardcoded ID

$sql = "SELECT ImageName, ImageData, MimeType FROM ImageTable WHERE Id = ?";
$params = [$id];
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    echo json_encode(["error" => sqlsrv_errors()]);
    exit;
}

if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo json_encode([
        "name" => $row["ImageName"],
        "mime" => $row["MimeType"],
        "data" => base64_encode($row["ImageData"])
    ]);
} else {
    echo json_encode(["error" => "Image not found"]);
}

sqlsrv_close($conn);
