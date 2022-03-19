<html>
<body>
<link rel="stylesheet"href="signupviewstyle.css" type="text/css"/>
<div id="A">
<center>
<font color="green";>
<h1><img src="i1.png"width="34px" height="34px"/>MedatHome.com</h1>
<table border="8">
<tr>
<th><i><font color="brown";><font size="4px";> Image </i></th>
<th><i><font color="brown";><font size="4px";> Name </i></th>
<th><i><font color="brown";><font size="4px";> Id </i></th>
<th><i><font color="brown";><font size="4px";>  Type </i></th>
<th><i><font color="brown";><font size="4px";> Price_per_strip </i></th>
<th><i><font color="brown";><font size="4px";>  Tablets_per_strip </i></th>
</tr>
<?php
include"conn.php";
$stmt="select * from medicines";
$tmp=$con->query($stmt);
while($row=mysqli_fetch_array($tmp))
{
	//$image=$row['Image'];
	?>
	<tr><td><img src="<?php echo"$row[Image]" ?>"height="100px"width="100px"/></td>
	<?php
echo "
 
<td>$row[Name]</td>
<td>$row[Id]</td>
<td>$row[Type]</td>
<td>$row[Price_per_strip]</td>
<td>$row[Tablets_per_strip]</td>
</tr>";
}
?>
</table>
<a href="medicinemenu.php"><button> Back </button></a>
</center>
</div>
</body>
</html>