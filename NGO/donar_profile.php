<html>
<head>

	<link rels="preconnect" href="http://fonts.gstatic.com">
	<link href="http://fonts.googleapis.com/css2?family=comfortaa:wght@300;700&display=swap" rel="stylesheet">
	<style type="text/css">
		body
		{
			background-repeat: no-repeat;
			background-size: cover;
			height:100vh;
			background-position:center;
		}
		a
		{
			font-family: comfortaa;
			font-weight: 700;
			width: 200px;
			height: 50px;
			color: white;
			font-size: 20px;
			background-color: #9400D3;
			padding:30px 65px;
			text-align: center;
			text-decoration: none;
			opacity: 0.5;
		}
		a:hover
		{
			background-color: #FF00FF;
			box-shadow: 10px 5px 5px red;
		}
		h2
		{
			border:3px solid yellow;
			color:White;
			border-radius:     10px;
			padding:10px 10px;
			position:absolute;
			top:10%;
			left:40%;
		}
		h2:hover
		{
			border:3px solid red;
			color:cyan;
			border-radius: 25px;
		}
		.xyz
		{
			position:absolute;
			top:5%;
			left:20%;
		}
		.dd
		{
			position:relative;
			top:0%;
			left:200%;
			max-width:1000px;
			height:200px;
		}
	</style>
</head>
<marquee direction="left" bgcolor="white" style="color:cyan">Joy Of Giving Week!</marquee>
<marquee direction="right">Joy Of Giving Week!</marquee>
<?php
session_start();
include "database.php";
$sq="select first,last,city,mobile,pan,password from donar where pan='$_SESSION[pan]'";
$result=mysqli_query($con,$sq) or die("data cannot retrive ".mysqli_error($con));

$row=mysqli_fetch_array($result);
?>	
<body background="images/ss.jpg">


<center>
	<h2>
		<font size="50px" face="gabriola">
		
		Your Profile
		</font>
	</h2>
	<table>
	
	<form action="donar_profile_update.php" method="post" enctype="multipart/form-data">
	<center>
	<div class="dd">
	
	
	
		<font size="25px" color="#182b56">

<tr><td>First name</td><td><input type="text"  name="first" disabled value=<?php echo $row['first']; ?> ></td></tr>
<tr><td>Last name</td><td><input type="text"  name="last" disabled value=<?php echo $row['last']; ?>></td></tr>
<tr><td>City</td><td><input type="text" name="city" value=<?php echo $row['city']; ?>></td></tr>
<tr><td>Mobile</td><td><input type="text" name="mobile" disabled maxlength=10 value=<?php echo $row['mobile']; ?>></td></tr>
<tr><td>Pan</td><td><input type="text" name="pan" disabled value=<?php echo $row['pan']; ?>></td></tr>
<tr><td>Password</td><td><input type="password"  name="password" value=<?php echo $row['password']; ?>></td></tr>
<tr><th colspan=2><input type="submit" value="update"></th></tr>
		</font>
	
    </div>
	</center>
	
	</form>
	</table>
	
</body>
</html>
		
	
   
	