<?php
session_start();
include "database.php";
$date = date("Y/m/d");
$query="insert into complaint(women_mobile,complaint_date,complaint_msg)
        values('$_SESSION[mobile]','$date','$_POST[complaint_msg]')";


mysqli_query($con,$query)
or die("data not inserted in user table".mysqli_error($con));

mysqli_close($con);
echo '<script>alert("Complaint register successfully!!")</script>';

?>