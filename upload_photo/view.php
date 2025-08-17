<?php
$serverName = "DESKTOP-5OL6G85\\SQLEXPRESS"; 
$connectionOptions = [
    "Database" => "MasterDB",
    "Uid" => "",
    "PWD" => ""
];

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$id = 5; // hardcoded ID

$sql = "SELECT Id, ImageName, ImageData, MimeType FROM ImageTable WHERE Id = ?";
$params = [$id];
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Image</title>
    <style>
        img {
            height: 150px;
            border: 1px solid #ccc;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h2>Uploaded Image (ID = 1)</h2>
    <?php if ($row): ?>
        <div>
            <p><?= htmlspecialchars($row['ImageName']) ?></p>
            <img src="data:<?= $row['MimeType'] ?>;base64,<?= base64_encode($row['ImageData']) ?>" 
                 alt="<?= htmlspecialchars($row['ImageName']) ?>">
        </div>
    <?php else: ?>
        <p>No image found with ID = 1</p>
    <?php endif; ?>
</body>
</html>
<?php sqlsrv_close($conn); ?>

