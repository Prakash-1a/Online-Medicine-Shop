


<html>
<body>
<link rel="stylesheet"href="search.css" type="text/css"/>
<style>
input[type=submit]
{
	width:80px;
	height:25px;
	font-size: 13px;
	border-radius: 20px;
	background-image:url(B.gif);
	background-size:100%;
	padding-left:5px;
}

input[type=submit]
{
	color: white;
}

</style>
<div id="A">
<center>
<font color="green";>
<h1><img src="i1.png"width="34px" height="34px"/>MedatHome.com</h1>
<ul>
<li><a href="medathome.php"><img src="i4.jpg"width="40px" height="30px"/>  Home  </a></li>
<li><a href="order.php"><img src="i7.jpg"width="40px" height="30px"/>  Order  </a></li>
<li><a href="med.php"><img src="i2.jpeg"width="40px" height="30px"/>  Medicines  </a></li>
<li><a href="medlogin.php"><img src="i6.jpeg"width="40px" height="30px"/>  Account  </a></li>
<li><a href="wallet.php"><img src="i5.png"width="40px" height="30px"/>  Wallet   </a></li>
<li><a href="trackorder.php"><img src="12.jpg"width="40px" height="30px"/>  TrackOrder  </a></li>
<div id="d1">
<a href="search.php"><img src="seach.gif"width="40px" height="30px"/></a>
<a href="cart.php"><img src="sc.gif"width="40px" height="30px"/></a>
</div>
</ul>

<table border="8">
<tr>
<th><i><font color="brown";><font size="4px";>Id</i></th>
<th><i><font color="brown";><font size="4px";> Name </i></th>
<th><i><font color="brown";><font size="4px";>  Type </i></th>
<th><i><font color="brown";><font size="4px";> Price_per_strip </i></th>
<th><i><font color="brown";><font size="4px";>  Tablets_per_strip </i></th>
<th><i><font color="brown";><font size="4px";>Quantity </i></th>
<th><i><font color="brown";><font size="4px";>Image </i></th>
<th><i><font color="brown";><font size="4px";>Total Price </i></th>
<th><i><font color="brown";><font size="4px";> Remove</i></th>
	

</tr>
<?php
session_start();
if(!isset($_SESSION['login']))
{
echo '<script>alert("Please Login First");</script>';
echo '<script> window.location.href="medlogin.php";   </script>';
}

include "conn.php";

$u=$_SESSION['login'];
$stm="select * from cart where username='$u' ";
$tempt=$con->query($stm);
$total=0;
while($row=mysqli_fetch_array($tempt))
{
$a="$row[4]";
$b="$row[6]";
$c=$a*$b;

echo "<tr>
<td>$row[Id]</td>;
<td>$row[Name]</td>;
<td>$row[Type]</td>;
<td>$row[Pstrip]</td>;
<td>$row[Tstrip]</td>;
<td>$row[quantity]</td>;
<td><img src=$row[Image] height=100px width=100px/></td>";
$total=$total+$c;

?>
<form action="#" method="POST">
<input type="hidden" name="id" value="<?php echo "$row[id]";?>">
<td><?php echo "$c";?></td>;
<td><input type="submit" name="del" value="Remove"/></td>

</form>
<?php

}
?>
</table>
<form action="payment.php" method="POST">
<font size=5>Total:</font>&nbsp<input type="number" name="ttal" value="<?php echo "$total";?>"/><br><br>
<form action="#" method="POST">
<input type="submit" name="proceed" style="width:140px;height:35px;" value="Proceed to Payment"/><br><br>
</form>
<a href="med.php"><button> Back </button></a>
</center>
</div>
</body>
</html>
</center>
</div>
</body>
</html>
<?php
if(isset($_POST['del']))
{
$a1=@$_POST['Id'];

	
$u=$_SESSION['login'];
include "conn.php";
$stmt="delete from cart where Id='$a1' AND username='$u'";
$tmp=$con->query($stmt);

}
?>

