<html>
<body>
<link rel="stylesheet"href="signupviewstyle.css" type="text/css"/>
<div id="A">
<center>
<font color="green";>
<h1><img src="i1.png"width="34px" height="34px"/>MedatHome.com</h1>
<table border="8">
<tr>
<th><i><font color="brown";><font size="4px";> Id </i></th>
<th><i><font color="brown";><font size="4px";> Quantity </i></th>
</tr>
<?php
include"conn.php";
$stmt="select * from stocks";
$tmp=$con->query($stmt);
while($row=mysqli_fetch_array($tmp))
{
echo "<tr>
<td>$row[Id]</td>
<td>$row[Quantity]</td>
</tr>";
}
?>
</table>
<a href="stocks.php"><button> Back </button></a>
</center>
</div>
</body>
</html>