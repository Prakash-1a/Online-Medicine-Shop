<html>
<body>
<link rel="stylesheet"href="creditcard.css" type="text/css"/>
<div id="signup">
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
<p id="W"><b>VIEW ORDER</b></p>
<table border="5" bordercolor=green>
<tr>
<th><i><font color="brown";><font size="4px";>Order Id</i></th>
<th><i><font color="brown";><font size="4px";>UserName </i></th>
<th><i><font color="brown";><font size="4px";>Medicine ID </i></th>
<th><i><font color="brown";><font size="4px";>Medicine Name </i></th>
<th><i><font color="brown";><font size="4px";>Quantity </i></th>
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
$stm="select * from order1 where username='$u' ";
$tempt=$con->query($stm);

while($row=mysqli_fetch_array($tempt))
{
echo "<tr>
<td>$row[0]</td>;
<td>$row[1]</td>;
<td>$row[2]</td>;
<td>$row[3]</td>;
<td>$row[4]</td></tr>";
}
?>
</body>
</html>

