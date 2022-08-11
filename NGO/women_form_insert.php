<?php
if($_FILES['image']['name']!="")
{
	$target_path="upload/women/";
	$target_path=$target_path.basename($_FILES ['image']['name']);
	COPY($_FILES['image']['tmp_name'],$target_path)or die("could not copy image");
}
else
{
	die("no file specified");
}
$tmp=$_FILES['image']['tmp_name'];
$fp=fopen($tmp,'r');
$img=fread($fp,filesize($tmp))or die("can not read properly");
$img=addslashes($img);
fclose($fp);
include "database.php";

$query="insert into women(first,last,dob,address1,address2,city,pincode,mobile,uid,password,image,path)
        values('$_POST[first]','$_POST[last]','$_POST[dob]','$_POST[address1]','$_POST[address2]','$_POST[city]','$_POST[pincode]','$_POST[mobile]',
		'$_POST[uid]','$_POST[password]','$img','$target_path')";


mysqli_query($con,$query)
or die("data not inserted in user table".mysqli_error($con));

mysqli_close($con);
header("refresh:1;url=women_login.html");
?>