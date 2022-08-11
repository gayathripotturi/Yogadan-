<?php

//-----------------------------------------------------
include "database.php";

$query="insert into donar(first,last,mobile,city,password,pan)
        values('$_POST[first]','$_POST[last]','$_POST[mobile]','$_POST[city]','$_POST[password]','$_POST[pan]')";


mysqli_query($con,$query) 
or die("data not inserted in user table".mysqli_error($con));

mysqli_close($con);
header("refresh:1;url=donar_login.html");
?>