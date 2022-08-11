
<?php
include"database.php";
$sq="select custid,name,mobile,email,ad_line1,ad_line2,pincode,
landmark,city,password FROM customer";
$rs=mysqli_query($con,$sq)
 or die ("data not retrive".mysqli_error($con));
echo"<center><h1>customer information</h1>";
echo"<table border=1>
<tr><th>first</th>
<th>last</th>
<th>dob</th>
<th>address1</th>
<th>address2</th>
<th>city</th>
<th>pincode</th>
<th>mobile</th>
<th>uid</th>
<th>password</th></tr>"; 
while($row=mysqli_fetch_array($rs))
{  echo"<tr>";
echo"<td>{$row['first']}</td>
<td>{$row['last']}</td>
<td>{$row['dob']}</td>
<td>{$row['address1']}</td>
<td>{$row['address2']}</td>
<td>{$row['city']}</td>
<td>{$row['pincode']}</td>
<td>{$row['mobile']}</td>
<td>{$row['uid']}</td>
<td>{$row['password']}</td></tr>";
}
echo"</table></center>";
mysqli_close($con);
?>