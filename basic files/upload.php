<?php 

echo "<pre>";

print_r($_FILES['file_upload']);

echo "<pre>";






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" enctype = "multipart/form-data" method = "post">
    <input type="file" name="file_upload"><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>