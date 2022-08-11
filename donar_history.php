<html>
<head>
<title> Donation List </title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Texturina&display=swap" rel="stylesheet">
<style type="text/css">
	body{
background-image: url("images/photo17.jpg");
background-repeat:no-repeat;
background-size:cover;
}
a{
box-shadow:1px 8px 8px white;
font-family:'Texturina', serif;
font-weight:700;
float:left;
width:200px;
height:47px;
color:white;
font-size:20px;
background-color:#00008B;
padding-top:13px;
text-align:center;
text-decoration:none;
opacity:0.95;
transition:0.5s;
margin-right:2px;
}
a:hover{
background-color: #191970;
box-shadow: 13px 7px 7px #00FFFF;
}
.head{
margin-top:8px;
margin-left:20%;
}
table{ width:100%;
       background-color:white;
	   margin-top:10px;
}
th{ height:35px;
    background-color:black;
	color:white;
	text-transform:uppercase;
}
td{ height:35px;
    background-color:white;
	border-bottom:1px solid blue;
	text-align:center;
}
h1{
	background-color:black;
	border-radius:30px;
	color:white;
	text-transform:capitalize;
	margin-top:50px;
	
}
	</style>
</head>
<body>

<?php
session_start();
include"database.php";
$sq="select donation_id,amount,donation_date from donation where donar_pan='$_SESSION[pan]'";
$rs=mysqli_query($con,$sq)
 or die ("data not retrive".mysqli_error($con));
echo"<center><br><h1>Donation History</h1>";
echo"<table>
<tr><th>Donation ID</th>
<th>Amount</th>
<th>Donation Date</th>
</tr>"; 
while($row=mysqli_fetch_array($rs,MYSQLI_BOTH))
{  echo"<tr>";
echo"<td>{$row[0]}</td>
<td>{$row[1]}</td>
<td>{$row[2]}</td>
</tr>";
}
echo"</table></center>";
mysqli_close($con);
?>
</body>
</html>