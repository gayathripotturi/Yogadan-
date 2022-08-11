<?php
session_start();
include("database.php");
$sq="update donar set password='$_POST[password]',city='$_POST[city]' where pan='$_SESSION[pan]' ";
mysqli_query($con,$sq) or die("data updation fail".mysqli_error($con));
mysqli_close($con);
echo '<script>alert("your profile  is updated  successfully!!")</script>';
?>



