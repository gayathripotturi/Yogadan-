<?php
session_start();
include("database.php");
$sq="update women set address1='$_POST[address1]',address2='$_POST[address2]',city='$_POST[city]',pincode='$_POST[pincode]',password='$_POST[password]' where mobile='$_SESSION[mobile]' ";
mysqli_query($con,$sq) or die("data updation fail".mysqli_error($con));
mysqli_close($con);
echo"Data Update successfully";
?>