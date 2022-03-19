<html>
<link rel="stylesheet"href="flogin.css" type="text/css"/>
<body>
<div id="A">
<center>
<font color="white";>
<h1><b><font size="12px";>Login</b></h1>
</center>
</div>
<div id="signup">
<center>
<br>
<form action="#" method="POST">
<input type="textbox"name="t1"placeholder="username"required/><br><br>
<input type="password"name="t2"placeholder="password"required/><br><br>
<input type="submit"name="print"value="Login"/>
</center>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['print']))
{
$n1=@$_POST['t1'];
$n2=@$_POST['t2'];
include"conn.php";
$stmt="select * from user where username='$n1'";
$tmp=$con->query($stmt);
if(mysqli_num_rows($tmp)>0)
{
	$tmp=mysqli_fetch_array($tmp);
	if($n2==$tmp[1])
	{
		session_start();
		$_SESSION['user']=$n1;
		header("location:menu.php");
	}
	else
	{
		echo" password incorrect";
	}
}
else
{
	echo" password incorrect";
}
}
?>