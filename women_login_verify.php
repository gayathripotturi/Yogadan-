<?php
session_start();
include 'database.php';

$result=mysqli_query($con,"SELECT mobile,password from women 
        WHERE mobile='$_POST[mobile]' AND password='$_POST[password]' ");

$row=mysqli_fetch_array($result);
if(!empty($row['mobile']) AND !empty($row['password']))
{
$_SESSION['mobile']= $row['mobile'];
header ("Refresh: 2; URL=women_page.html");
echo "You are going to redirect user page" ;
}
else
{
header("Refresh:2; url=women_login.html");
echo "Invalid User or password";
echo "<br>You are going to redirect login page....";
}
mysqli_close($con);
?>
