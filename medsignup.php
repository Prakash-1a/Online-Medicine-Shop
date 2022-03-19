<html>
<link rel="stylesheet"href="medsignup.css" type="text/css"/>
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
<a href="search.php"><img src="seach.gif"width="40px" height="30px"/></a>
<a href="cart.php"><img src="sc.gif"width="40px" height="30px"/></a>
</div>
</ul>
</div>
<div id="signup">
<center>
<img src="M.gif"width="160px" height="120px"/>
<font color="blue"; >
<h1>
<i>SIGN UP</i>
 </h1>
 <form action="#" method="POST">
<input type="textbox"name="t1"placeholder="username"required/><br><br>
<input type="textbox"name="t2"placeholder="mobile"required/><br><br>
<input type="email"name="t3"placeholder="email"required/><br><br>
<input type="textbox"name="t4"placeholder="address line1"required/><br><br>
<input type="textbox"name="t5"placeholder="address line2"required/><br><br>
<input type="textbox"name="t6"placeholder="landmark"required/><br><br>
<input type="textbox"name="t7"placeholder="city"required/><br><br>
<input type="textbox"name="t8"placeholder="state"required/><br><br>
<input type="textbox"name="t9"placeholder="pincode"required/><br><br>
<input type="password"name="pwd"placeholder="password"required/><br><br>
<input type="password"name="confirmpwd"placeholder="confirm password"required/><br><br><br>
<input type="submit"name="print"value="Sign up"/><br>
</center>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['print']))
{
$n1=@$_POST['t1'];
$n2=@$_POST['t2'];
$n3=@$_POST['t3'];
$n4=@$_POST['t4'];
$n5=@$_POST['t5'];
$n6=@$_POST['t6'];
$n7=@$_POST['t7'];
$n8=@$_POST['t8'];
$n9=@$_POST['t9'];
$n10=@$_POST['pwd'];
$n11=@$_POST['confirmpwd'];
include "conn.php";
$stmt="insert into signup(Username,Mobile,Email,Address_line_1,Address_line_2,Landmark,City,State,Pincode,Password)
values('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10')";
$tmp=$con->query($stmt);
if($tmp&&$n10==$n11)
{
echo'<script>alert("you have signed up successfully");</script>';
}
else
{
echo'<script>alert("sign up failed");</script>';
}
}
?>
