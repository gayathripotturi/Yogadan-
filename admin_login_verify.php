<?php
session_start();
include 'database.php';

$result=mysqli_query($con,"SELECT user,password from admin 
        WHERE user='$_POST[user]' AND password='$_POST[password]' ");

$row=mysqli_fetch_array($result);
if(!empty($row['user']) AND !empty($row['password']))
{
$_SESSION['user']= $row['user'];
header ("Refresh: 2; URL=admin_page.html");
echo "You are going to redirect user page" ;
}
else
{
header("Refresh:2; url=admin_login.html");
echo "Invalid User or password";
echo "<br>You are going to redirect login page....";
}
mysqli_close($con);
?>
