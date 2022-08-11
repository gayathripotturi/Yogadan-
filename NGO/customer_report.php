
<?php
include"database.php";
$sq="select custid,name,mobile,email,ad_line1,ad_line2,pincode,
landmark,city,password FROM customer";
$rs=mysqli_query($con,$sq)
 or die ("data not retrive".mysqli_error($con));
echo"<center><h1>customer information</h1>";
echo"<table border=1>
<tr><th>custid</th>
<th>name</th>
<th>mobile</th>
<th>email</th>
<th>ad_line1</th>
<th>ad_line2</th>
<th>pincode</th>
<th>landmark</th>
<th>city</th>
<th>password</th></tr>"; 
while($row=mysqli_fetch_array($rs))
{  echo"<tr>";
echo"<td>{$row['custid']}</td>
<td>{$row['name']}</td>
<td>{$row['mobile']}</td>
<td>{$row['email']}</td>
<td>{$row['ad_line1']}</td>
<td>{$row['ad_line2']}</td>
<td>{$row['pincode']}</td>
<td>{$row['landmark']}</td>
<td>{$row['city']}</td>
<td>{$row['password']}</td></tr>";
}
echo"</table></center>";
mysqli_close($con);
?>