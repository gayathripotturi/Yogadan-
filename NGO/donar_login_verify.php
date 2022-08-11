<?php
session_start();
include 'database.php';

$result=mysqli_query($con,"SELECT pan,password from donar 
        WHERE pan='$_POST[pan]' AND password='$_POST[password]' ");

$row=mysqli_fetch_array($result);
if(!empty($row['pan']) AND !empty($row['password']))
{
$_SESSION['pan']= $row['pan'];
header ("Refresh: 2; URL=donar_page.html");
echo "You are going to redirect user page" ;
}
else
{
header("Refresh:2; url=donar_login.html");
echo "Invalid User or password";
echo "<br>You are going to redirect login page....";
}
mysqli_close($con);
?>
