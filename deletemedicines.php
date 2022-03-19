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
<img src="i2.jpeg"width="100px" height="100px"/><br><br><br><br>
<font color="blue"; >
<h1> DELETE MEDICINES </h1><br><br>
<form action="#" method="POST">
Enter id:<input type="textbox" name="t1"/><br><br><br>
<input type="Submit" name="print" value="delete"/>
</form>
</body>
</html>
<?php
if(isset($_POST['print']))
{
$r=@$_POST['t1'];
include"conn.php";
$stmt="delete from medicines where id='$r'";
$tmp=$con->query($stmt);
if(mysqli_affected_rows($con))
{
echo"medicine deleted successfully";
}
else
{
echo"medicine not found";
}
}
?>