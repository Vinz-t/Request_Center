<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Image</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <div id="imageContainer">Loading...</div>

    <script>
    $(document).ready(function () {
        $.ajax({
            url: "image_api.php",
            type: "POST",
            data: { secret_code: 5 },
            dataType: "json",
            success: function (response) {
                if (response.error) {
                    $("#imageContainer").html("<p>Error: " + response.error + "</p>");
                } else {
                    let img = `<div>
                        <p>${response.name}</p>
                        <img src="data:${response.mime};base64,${response.data}" alt="${response.name}">
                    </div>`;
                    $("#imageContainer").html(img);
                }
            },
            error: function () {
                $("#imageContainer").html("<p>Failed to load image.</p>");
            }
        });
    });
    </script>
</body>
</html>
