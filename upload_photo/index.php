<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {
    $serverName = "DESKTOP-5OL6G85\SQLEXPRESS";
    $connectionOptions = [
        "Database" => "MasterDB",
        "Uid" => "",
        "PWD" => ""
    ];

    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageName = $_FILES['image']['name'];
    $mimeType = $_FILES['image']['type'];

    $sql = "INSERT INTO ImageTable (ImageData, ImageName, MimeType) VALUES (?, ?, ?)";
    $params = [
        [$imageData, SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_BINARY)],
        [$imageName, SQLSRV_PARAM_IN],
        [$mimeType, SQLSRV_PARAM_IN]
    ];

    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        echo "Upload failed.<br>";
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo "Image uploaded successfully!";
    }

    sqlsrv_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Upload Image to SQL Server</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label>Select Images:</label>
        <input type="file" name="image" accept="image/*" required>
        <br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>