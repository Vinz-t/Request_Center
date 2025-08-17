<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Multiple Image</title>
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
        url: "multiple_image_api.php",
        type: "POST",
        data: { ids: [1, 3, 5] },   // ✅ send an array
        dataType: "json",
        success: function (response) {
            if (response.error) {
                $("#imageContainer").html("<p>Error: " + response.error + "</p>");
            } else {
                let html = "";
                response.forEach(img => {
                    html += `<div>
                        <p>${img.name}</p>
                        <img src="data:${img.mime};base64,${img.data}" alt="${img.name}">
                    </div>`;
                });
                $("#imageContainer").html(html);
            }
        },
        error: function () {
            $("#imageContainer").html("<p>Failed to load images.</p>");
        }
    });
    });
    </script>
</body>
</html>
