<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['images'])) {
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

    foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
        if ($_FILES['images']['error'][$index] === UPLOAD_ERR_OK) {
            $imageData = file_get_contents($tmpName);
            $imageName = $_FILES['images']['name'][$index];
            $mimeType = $_FILES['images']['type'][$index];

            $sql = "INSERT INTO ImageTable (ImageData, ImageName, MimeType) VALUES (?, ?, ?)";
            $params = [
                [$imageData, SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_BINARY)],
                [$imageName, SQLSRV_PARAM_IN],
                [$mimeType, SQLSRV_PARAM_IN]
            ];

            $stmt = sqlsrv_query($conn, $sql, $params);
            if ($stmt === false) {
                echo "Failed to upload: $imageName<br>";
                print_r(sqlsrv_errors());
            } else {
                echo "Uploaded: $imageName<br>";
            }
        }
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
    <form action="upload_image.php" method="post" enctype="multipart/form-data">
        <label>Select Images:</label>
        <input type="file" name="images[]" accept="image/*" multiple required>
        <br><br>
        <input type="submit" value="Upload">
    </form>
</body>

</html>

CREATE TABLE ImageTable (
    Id INT IDENTITY PRIMARY KEY,
    ImageData VARBINARY(MAX),
    ImageName NVARCHAR(255),
    MimeType NVARCHAR(100)
);

// upload one image only
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {
    $serverName = "localhost"; // or your SQL Server name
    $connectionOptions = [
        "Database" => "YourDatabase",
        "Uid" => "YourUsername",
        "PWD" => "YourPassword"
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

