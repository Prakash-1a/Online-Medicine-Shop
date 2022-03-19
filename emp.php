<html>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
id:<input type="textbox" name="i"/><br>
Name:<input type="textbox"name="n"/><br>
upload pic:<input type="file"name="p"/><br>
<input type="submit"name="sbt"value="Save"/>
</form>
</body>
</html>
<?php
if(isset($_POST['sbt']))
{
$target_folder="image/";
$file_name=$_FILES['p']['name'];
$tmp=$_FILES['p']['tmp_name'];
move_uploaded_file($tmp,$target_folder.$file_name);
$id=@$_POST['i'];
$name=@$_POST['n'];
$img_address=$target_folder.$file_name;
include"conn.php";
$stmt="insert into employee_info(Id,Name,Img_address)
values('$id','$name','$img_address')";
$tmp=$con->query($stmt);
if($tmp)
{
echo "data saved";
}
else
{
echo "failed";
}
}
?>