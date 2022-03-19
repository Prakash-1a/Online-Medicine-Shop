<html>
<body>
<link rel="stylesheet"href="signupviewstyle.css" type="text/css"/>
<div id="A">
<center>
<font color="green";>
<h1><img src="i1.png"width="34px" height="34px"/>MedatHome.com</h1>
</center>
</div>
<div id="signup">
<center>
<img src="i2.jpeg"width="100px" height="100px"/><br><br>
<font color="blue"; >
<h1>MODIFY MEDICINES</h1>
<form action="#" method="POST"><font color="green";><br><br>
	Enter id: <input type="textbox" name="t1"><br><br><br>
	<input type="submit" name="sbt" value="Proceed"><br>
</form>
<?php
if(isset($_POST['sbt']))
{
	$r=@$_POST['t1'];
	include "conn.php";
	$stm="select * from medicines where id='$r'";
	$tmp=$con->query($stm);
	$row=mysqli_fetch_array($tmp);
?>
<form action="#" method="POST" enctype="multipart/form-data">
<font color="magenta";><br>
<b>Upload image:</b><input type="file" name="p"value="<?php echo "$row[0]" ?>"/><br>
Name:<input type="textbox" name="_n" value="<?php echo "$row[1]" ?>"/><br>
Id:<input type="textbox" name="_r" value="<?php echo "$row[2]" ?>" readonly/><br>
Types:<input type="textbox" name="_y" value="<?php echo "$row[3]" ?>"/><br>
Price per strip:<input type="textbox" name="_p" value="<?php echo "$row[4]" ?>"/><br>
Tablets per strip:<input type="textbox" name="_t" value="<?php echo "$row[5]" ?>"/><br><br><br>
<input type="submit" name="sbt1" value="Update"/>
</form>
<?php
}
if(isset($_POST['sbt1']))
{
	$target_folder="image/";
$file_name=$_FILES['p']['name'];
$tmp=$_FILES['p']['tmp_name'];
move_uploaded_file($tmp,$target_folder.$file_name);
$img_address=$target_folder.$file_name;
$n=@$_POST['_n'];
$r=@$_POST['_r'];
$y=@$_POST['_y'];
$p=@$_POST['_p'];
$t=@$_POST['_t'];
include "conn.php";
$stmt="update medicines set Image='$img_address',Name='$n',Type='$y'
,Price_per_strip='$p',Tablets_per_strip='$t' where Id='$r'";
$tmp=$con->query($stmt);
if(mysqli_affected_rows($con)>0)
{
	echo '<script>alert("Data updated Successfully."); </script>';
}
else
{
echo "Data updation failed".mysqli_error($con);	
}
}
?>
</center>
</div>
</body>
</html>