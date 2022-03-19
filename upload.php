<html>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
upload photo:-<input type="file" name="_img" accept="image/*"/><br>
<input type="submit" name="sbt" value="upload"/>
</form>
</body>
</html>
<?php
if(isset($_POST['sbt']))
{
$target_folder="image/";
$file_name=$_FILES['_img']['name'];
$file_tmp=$_FILES['_img']['tmp_name'];
move_uploaded_file($file_tmp,$target_folder.$file_name);
}
?>
