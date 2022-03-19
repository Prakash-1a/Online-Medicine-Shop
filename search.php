<html>
<link rel="stylesheet"href="search.css" type="text/css"/>
<body>
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
<a href="addtocart.php"><img src="sc.gif"width="40px" height="30px"/></a>
</div>
</ul>
</div>
<div id="signup">
<center>
<br>
<img src="i2.jpeg"width="100px" height="100px"/><br><br>
<font color="blue"; >
<h1> SEARCH MEDICINE </h1>
<form action="#" method="POST" enctype="multipart/form-data">
Enter name:<input type="textbox" name="t1"/><br><br><br>
<input type="submit" id="s1" name="print" value="SEARCH"/>
</form>
</body>
</html>
<?php
if(isset($_POST['print']))
{
	?> <table border="2">
<?php
$r=@$_POST['t1'];
include"conn.php";
$stmt="select * from medicines where name='$r'";
$tmp=$con->query($stmt);
echo'
<tr>
<th> Image </th>
<th> Name </th>
<th> Id </th>
<th> Type </th>
<th> Price_per_strip </th>
<th> Tablets_per_strip </th>
<th> Enter quantity </th>
<th> Add to cart </th>
</tr>';
while($row=mysqli_fetch_array($tmp))
{
	?>
	<tr><td><img src="<?php echo"$row[Image]" ?>"height="100px"width="100px"/></td>
	<?php
echo "
<td>$row[Name]</td>
<td>$row[Id]</td>
<td>$row[Type]</td>
<td>$row[Price_per_strip]</td>
<td>$row[Tablets_per_strip]</td>";
?>
<form action="addtocart.php" method="POST">
<input type="hidden" name="id" value="<?php echo "$row[Id]";?>"/>
<td><input type="number" name="q"/></td>
<td><input type="submit" id="s2" name="sbt" value="Add to Cart"/></td></tr>
</form>
<?php
echo "</tr>";
}
?>
<?php
{
echo'</table>';
}
}
?>
</table>