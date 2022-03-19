<html>
<body>

<link rel="stylesheet"href="med.css" type="text/css"/>
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
<a href="addtocart.php"><img src="sc.gif"width="40px" height="30px"/></a>
</div>
</ul>
<table border="8">
<tr>
<th><i><font color="brown";><font size="4px";> Image </i></th>
<th><i><font color="brown";><font size="4px";> Name </i></th>
<th><i><font color="brown";><font size="4px";>  Type </i></th>
<th><i><font color="brown";><font size="4px";> Price_per_strip </i></th>
<th><i><font color="brown";><font size="4px";>  Tablets_per_strip </i></th>
<th><i><font color="brown";><font size="4px";>  Enter Quantity </i></th>
<th><i><font color="brown";><font size="4px";>  Add to Cart </i></th>
</tr>

<?php
session_start();
include"conn.php";
$stmt="select * from medicines";
$tmp=$con->query($stmt);
while($row=mysqli_fetch_array($tmp))
{
	?>
<tr><td><img src="<?php echo"$row[Image]" ?>"height="100px"width="100px"/></td>
<?php
echo "
<td>$row[Name]</td>
<td>$row[Type]</td>
<td>$row[Price_per_strip]</td>
<td>$row[Tablets_per_strip]</td>";
?>
<form action="#" method="POST">
<input type="hidden" name="image" value="<?php echo"$row[Image]";?>">
<input type="hidden" name="id" value="<?php echo "$row[Id]";?>">
<input type="hidden" name="name" value="<?php echo "$row[Name]";?>"/>
<input type="hidden" name="type" value="<?php echo "$row[Type]";?>"/>
<input type="hidden" name="pstrip" value="<?php echo "$row[Price_per_strip]";?>"/>
<input type="hidden" name="tstrip" value="<?php echo "$row[Tablets_per_strip]";?>"/>
<td><input type="number" name="q"/></td>
<td><input type="submit" name="sbt" value="Add to Cart"/></td></tr>
</form>
<?php
}
if(isset($_POST['sbt']))
{

$usr=$_SESSION['login'];
if(!isset($usr))
{
	
	echo '<script> alert("Please Login First."); </script>';
	echo '<script> window.location.href="medathome.php";   </script>';
}	
$n1=@$_POST['id'];
$n2=@$_POST['q'];
$n3=@$_POST['name'];
$n4=@$_POST['type'];
$n5=@$_POST['pstrip'];
$n6=@$_POST['tstrip'];
$n7=@$_POST['image'];
//$aa=$_SESSION["user"];
//echo "$aa";
include"conn.php";
$stmt="insert into cart(Id,username,Name,Type,Pstrip,Tstrip,quantity,Image) values('$n1','$usr','$n3','$n4','$n5','$n6','$n2','$n7')";
$tmp=$con->query($stmt);
if($tmp)
{
	echo '<script> alert("Added to cart successfully."); </script>';
}
else
{
	echo '<script> alert("Operation failed."); </script>';
	echo 'error:'.mysqli_error($con);
}

}








?>
</table>
<a href="medathome.php"><button> Back </button></a>
</center>
</div>
</body>
</html>