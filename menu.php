<?php
session_start();
if(!isset($_SESSION['user']))
{
	die("please login first");
}
?>
<html>
<body>
<center>
<h1><b><font color="maroon";><font size="50px";> USER MENU </b></h1>
<h2><font color="red";><font size="6px";> This is user menu </h2>
</center>
</body>
</html>
