<html>
<body>
<form action="#" method="POST">
Enter password:<input type="textbox" name="t1"/><br>
<input type="Submit" name="print" value="delete"/>
</form>
</body>
</html>
<?php
if(isset($_POST['print']))
{
$r=@$_POST['t1'];
include"conn.php";
$stmt="delete from user where password='$r'";
$tmp=$con->query($stmt);
if(mysqli_affected_rows($con))
{
echo"data deleted successfully";
}
else
{
echo"id not found";
}
}
?>