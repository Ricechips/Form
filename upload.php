<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Image</title>
</head>
<body>

<?php

$file = $_FILES['files'];
$fileName = $file['name'];
move_uploaded_file($file['tmp_name'],$fileNamme);

echo "<img src='$fileName'>";
?>
</body>
</html>
