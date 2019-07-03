<!DOCTYPE html >
<html>
<head>
<style>
table,th,td{padding:20px;
border:2px solid black;
border-collapse:collapse;
}
th {
  background-color: #4CAF50;
  color: white;
}
tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<h1 style="text-align:center">DONOR-DETAILS</h1>
<?php
$mysql_host="localhost";
$mysql_username="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_username,$mysql_password,'my_project');
$bgroup=$_POST["name"];
if($conn->connect_error)
echo"connection error";
else
{
$query = "select * from  donor where bgroup='$bgroup'";
$member = mysqli_query($conn,$query);
if (!$member) {
die($query);
}
echo "<center><table></center>";
echo "<tr>
        <th>Name</th>
        <th>Email</th>
        <th>gender</th>
        <th>Blood group</th>
        <th>DOB</th>
        <th>country</th>
 <th>state</th>
 <th>address</th>
 <th>contact no</th>
        </tr>";
  while($row = mysqli_fetch_array($member)){
$name     = $row['name'];
$email = $row['email'];
$gen = $row['gender'];
$bgroup=$row['bgroup'];
$dob= $row['dob'];
$count=$row['country'];
$state=$row['state'];
$addr=$row['address'];
$cont=$row['contact'];

echo "<tr>
      <td >".$name."</td>
      <td><a href='accept.html'  >" . $email . "</a></td>
     
      <td>".$gen."</td>
      <td>".$bgroup."</td>
      <td>".$dob."</td>
      <td>".$count."</td>
<td>".$state."</td>
<td>".$addr."</td>
<td>".$cont."</td>
</tr>";

}
echo "</table>";
}

$conn->close();
?>
</body>
</html>