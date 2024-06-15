<!DOCTYPE html>
<html lang="en">
<head>
<title>file upload</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="#">
<input type="file" name="image" id="image">
<br>
<input type="submit" name="uploadbtm" id="upload">
</form>
<?php
if(isset($_POST["uploadbtm"])) {
if($_FILES['image']['name'] != ""){
mkdir("uploads");
}
$newFileName = time() . '_' . $_FILES['image']['name'];
$newFilePath = "uploads/" . $newFileName;
move_uploaded_file($_FILES['image']['tmp_name'], $newFilePath);
die;
}
?>
</body>
</html>