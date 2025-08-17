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

// ✅ Get array of IDs from POST
$ids = $_POST['ids'] ?? [];

if (empty($ids) || !is_array($ids)) {
    echo json_encode(["error" => "No IDs provided"]);
    exit;
}

// ✅ Build dynamic placeholders (?, ?, ?)
$placeholders = implode(',', array_fill(0, count($ids), '?'));
$sql = "SELECT Id, ImageName, ImageData, MimeType FROM ImageTable WHERE Id IN ($placeholders)";
$stmt = sqlsrv_query($conn, $sql, $ids);

if ($stmt === false) {
    echo json_encode(["error" => sqlsrv_errors()]);
    exit;
}

$images = [];
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $images[] = [
        "id"   => $row["Id"],
        "name" => $row["ImageName"],
        "mime" => $row["MimeType"],
        "data" => base64_encode($row["ImageData"])
    ];
}

echo json_encode($images);

sqlsrv_close($conn);
