<html>
<body>
<link rel="stylesheet"href="signupviewstyle.css" type="text/css"/>
<div id="A">
<center>
<font color="green";>
<h1><img src="i1.png"width="34px" height="34px"/>MedatHome.com</h1>
<table border="8">
<tr>
<th><i><font color="brown";><font size="4px";> Username </i></th>
<th><i><font color="brown";><font size="4px";> Mobile </i></th>
<th><i><font color="brown";><font size="4px";>  Email </i></th>
<th><i><font color="brown";><font size="4px";> Address_line_1 </i></th>
<th><i><font color="brown";><font size="4px";>  Address_line_2 </i></th>
<th><i><font color="brown";><font size="4px";>  Landmark </i></th>
<th><i><font color="brown";><font size="4px";>  City </i></th>
<th><i><font color="brown";><font size="4px";>  State </i></th>
<th><i><font color="brown";><font size="4px";>  Pincode </i></th>
<th><i><b><font color="brown";><font size="4px";>  Password </i></b></th>
</tr>
<?php
include"conn.php";
$stmt="select * from signup";
$tmp=$con->query($stmt);
while($row=mysqli_fetch_array($tmp))
{
echo "<tr>
<td>$row[Username]</td>
<td>$row[Mobile]</td>
<td>$row[Email]</td>
<td>$row[Address_line_1]</td>
<td>$row[Address_line_2]</td>
<td>$row[Landmark]</td>
<td>$row[City]</td>
<td>$row[State]</td>
<td>$row[Pincode]</td>
<td>$row[Password]</td>
</tr>";
}
?>
</table>
<a href="adminmenu.php"><button> Back </button></a>
</center>
</div>
</body>
</html>