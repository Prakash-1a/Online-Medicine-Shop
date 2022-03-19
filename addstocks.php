<html>
<body>
<link rel="stylesheet"href="signupviewstyle.css" type="text/css"/>
<div id="A">
<center>
<font color="green";>
<h1><img src="i1.png"width="34px" height="34px"/>MedatHome.com</h1>
</div>
<div id="signup">
<center>
<img src="i2.jpeg"width="100px" height="100px"/><br><br>
<font color="blue"; >
<h1>ADD STOCKS</h1>
<form action="#" method="POST">
<center>
<pre>
<font color="purple";>
<font size="4px";>
<input type="textbox" name="t1"placeholder="id"/><br>
<input type="textbox" name="t2"placeholder="quantity"/><br>
<input type="Submit" name="print" value="ADD"/>
<?php
if(isset($_POST['print']))
{
$n=@$_POST['t1'];
$n1=@$_POST['t2'];
include "conn.php";
$stmt="select * from stocks where Id='$n'";
$tmp=$con->query($stmt);
if(mysqli_num_rows($tmp)>0)
{
$tmp=mysqli_fetch_array($tmp);
$oldstock=$tmp[1];
$newstock=$oldstock+$n1;
$stmt2="update stocks set Quantity='$newstock' where Id='$n'";
$tmp2=$con->query($stmt2);
if(mysqli_affected_rows($con)>0)
{
	echo '<script>alert("Stock Updated successfully."); </script>';
}
else
{
echo '<script>alert("Error in updating stock"); </script>';		
}
}
else
{
	echo '<script>alert("Product Id not Found."); </script>';		
}
}
?>
</pre>
</center>
</div>
</body>
</html>

