<html>
<body>
<link rel="stylesheet"href="searchstocks.css" type="text/css"/>
<div id="A">
<center>
<font color="green";>
<h1><img src="i1.png"width="34px" height="34px"/>MedatHome.com</h1>
</center>
</div>
<div id="signup">
<center>
<br>
<img src="i2.jpeg"width="100px" height="100px"/><br><br>
<font color="blue"; >
<h1> SEARCH MEDICINES IN STOCK </h1>
<form action="#" method="POST">
Enter name:<input type="textbox" name="t1"/><br><br><br>
<input type="Submit" name="print" value="SEARCH"/>
</form>
</body>
</html>
<?php
if(isset($_POST['print']))
{
$r=@$_POST['t1'];
include"conn.php";
$stmt="select * from medicines where name='$r'";
$tmp=$con->query($stmt);
echo'<table>
<tr>
<th> Name </th>
<th> Id </th>
<th> Type </th>
<th> Price_per_strip </th>
<th> Tablets_per_strip </th>
</tr>';
while($row=mysqli_fetch_array($tmp))
{
echo "<tr>
<td>$row[Name]</td>
<td>$row[Id]</td>
<td>$row[Type]</td>
<td>$row[Price_per_strip]</td>
<td>$row[Tablets_per_strip]</td>
</tr>";
}
echo'</table>';
}
?>
