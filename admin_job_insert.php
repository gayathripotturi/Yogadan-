<?php
session_start();
include "database.php";
$date = date("Y/m/d");
$query="insert into job(type,contact, salary, description,job_date)
        values('$_POST[type]','$_POST[contact]','$_POST[salary]','$_POST[description]','$date')";


mysqli_query($con,$query)
or die("data not inserted in user table".mysqli_error($con));

mysqli_close($con);
echo '<script>alert("New Job Post successfully!!")</script>';

?>