<?php
session_start();
if(isset($_SESSION['login']))
{
echo '<script> window.location.href="medathome.php";   </script>';
}
else
{
	
?>




<html>
<head>
	<title>login screen</title>
	<link rel="stylesheet" type="text/css" href="medlogin.css">
</head>
<body>

<center>
<div id="A">
<font color="green";>
<h1><img src="i1.png"width="34px" height="34px"/>MedatHome.com</h1>

<ul>
<li><a href="medathome.php"><img src="i4.jpg"width="40px" height="30px"/>  Home  </a></li>
<li><a href="order.php"><img src="i7.jpg"width="40px" height="30px"/>  Order  </a></li>
<li><a href="med.php"><img src="i2.jpeg"width="40px" height="30px"/>  Medicines  </a></li>
<li><a href="medlogin.php"><img src="i6.jpeg"width="40px" height="30px"/>  Account  </a></li>
<li><a href="wallet.php"><img src="i5.png"width="40px" height="30px"/>  Wallet   </a></li>
<li><a href="trackorder.php"><img src="12.jpg"width="40px" height="30px"/>  TrackOrder  </a></li>
</ul>
</div>
<div id="loginscr">
<center>
<img src="i3.jpeg"width="100px" height="100px"/>
<br><br><br>
<font color="blue"; ><h1><i>Customer Login</i></h1></font>
<form action="#" method="POST">
username:<br><br>
<input type="textbox" name="t1"required/>	<br><br><br>
password:<br><br>
<input type="password" name="t2"required/>	<br><br><br>   
<input type="submit" name="print"value="login"><br><br></form>
              ---------OR---------<br><br>
<a href="medsignup.php"><button>Sign up</button></a>	  
</center>

</div>
</body>
</html>
<?php
if(isset($_POST['print']))
{
include "conn.php";
$n1=@$_POST['t1'];
$pwd=@$_POST['t2'];
$stm="select * from signup where Username='$n1'";
$abc=$con->query($stm);
if(mysqli_num_rows($abc)>0)
{
	$abc=mysqli_fetch_array($abc);
if($abc[9]==$pwd)
{
	session_start();
	$_SESSION['login']=$n1;
	echo '<script> window.location.href="medathome.php";   </script>';

}
else
{
echo '<script>alert("log in failed");</script>';
}
}
else
{
echo '<script>alert("log in failed");</script>';
}



}

}
?>





