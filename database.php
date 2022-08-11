<?php
$con= mysqli_connect('localhost','root','') 
     or die("mysql not connected ".mysqli_error($con));
	  
mysqli_select_db($con,'yogdan') 
or die("database not connected ".mysqli_error($con));

?>
