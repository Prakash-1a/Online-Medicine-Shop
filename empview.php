<html>
<body>

<link rel="stylesheet"href="emp.css" type="text/css"/>
<center>
<font color="white";><font size="3px";>
<h1><b> EMPLOYEE TABLE :: </b></h1>
<table border="4">
<tr>
<th> Id </th>
<th> Name </th>
<th> Photo </th>
</tr>
<?php
include"conn.php";
$stmt="select * from employee_info";
$tmp=$con->query($stmt);
while($row=mysqli_fetch_array($tmp))
{
echo "<tr>
<td>$row[Id]</td>
<td>$row[Name]</td>";
?>
<td><img src="<?php echo"$row[Img_address]" ?>"height="100px"width="100px"/>
</td></tr>
<?php
}
?>
</table>
</center>
</body>
</html>
