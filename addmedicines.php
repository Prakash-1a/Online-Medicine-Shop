<html>
<body>
<link rel="stylesheet"href="signupviewstyle.css" type="text/css"/>
<div id="A">
<center>
<font color="green";>
<h1><img src="i1.png"width="34px" height="34px"/>MedatHome.com</h1>
</div>
<div id="signup">
<center>
<img src="i2.jpeg"width="100px" height="100px"/><br><br>
<font color="blue"; >
<h1>ADD MEDICINES</h1>
<form action="#" method="POST" enctype="multipart/form-data">
<center>
<pre>
<font color="green";>
<b>Upload image:</b><input type="file" name="p"/>
<font color="purple";>
<font size="4px";>
<input type="textbox" name="t1"placeholder="name"/><br>
<input type="textbox" name="t2"placeholder="id"/><br>
<input type="textbox" name="t3"placeholder="type"/><br>
<input type="textbox" name="t4"placeholder="price per strip"/><br>
<input type="textbox" name="t5"placeholder="tablets per strip"/><br><br>
<input type="Submit" name="print" value="Save"/>
</pre>
</center>
</div>
</form>
<?php
if(isset($_POST['print']))
{
$target_folder=" ";
$file_name=$_FILES['p']['name'];
$tmp=$_FILES['p']['tmp_name'];
move_uploaded_file($tmp,$target_folder.$file_name);
$img_address=$target_folder.$file_name;
$n1=@$_POST['t1'];
$n2=@$_POST['t2'];
$n3=@$_POST['t3'];
$n4=@$_POST['t4'];
$n5=@$_POST['t5'];
include "conn.php";
$stmt="insert into medicines(Image,Name,Id,Type,Price_per_strip,Tablets_per_strip)
values('$img_address','$n1','$n2','$n3','$n4','$n5')";
$stmt1="insert into stocks(Id,Quantity)values('$n2','0')";
$tmp=$con->query($stmt);
$tmp1=$con->query($stmt1);
if($tmp&&$tmp1)
{
echo'<script>alert("medicines added");</script>';
}
else
{
echo'<script>alert("unable to add");</script>';
}
}
?>
