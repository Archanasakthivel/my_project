<!DOCTYPE html >
<html>
<head>
<style>
table,th,td{padding:20px;
border:2px solid black;
border-collapse:collapse;}
</style>
</head>
<body>
<h1 style="text-align:center">REQUESTER-DETAILS</h1>
<?php
$mysql_host="localhost";
$mysql_username="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_username,$mysql_password,'my_project');
$bgroup=$_POST["bgroup"];
if($conn->connect_error)
echo"connection error";
else
{
$query = "select * from  blood where bgroup='$bgroup'";
$member = mysqli_query($conn,$query);
if (!$member) {
die($query);
}
echo "<center><table></center>";
echo "<tr>
        <th>Patient Name</th>
        <th>Gender</th>
        
        <th>Age</th>
<th>Email</th>
        <th>Needed Blood group</th>
        <th>Unit blood needed</th>
        <th>Required date</th>
<th>Hospital name</th>
<th>Doctor name</th>
<th>country</th>
 <th>state</th>
 <th>address</th>
<th>Reason</th>
 <th>contact no</th>
        </tr>";
  while($row = mysqli_fetch_array($member)){
$name     = $row['name'];
$gen = $row['gender'];
$age= $row['age'];
$email=$row['email'];
$bgroup= $row['bgroup'];
$bunit= $row['bunit'];
$req= $row['req'];
$hos= $row['hos'];
$doc= $row['doc'];
$count=$row['count'];
$state=$row['state'];
$addr=$row['addr'];
$reason= $row['reason'];
$cont=$row['contact'];

echo "<tr>
      <td >".$name."</td>
<td >".$gen."</td>
<td >".$age."</td>
<td >".$email."</td>
      <td>" . $bgroup . "</td>
     
      <td>".$bunit."</td>
      <td>".$req."</td>
      <td>".$hos."</td>
<td >".$doc."</td>
      <td>".$count."</td>
<td>".$state."</td>
<td>".$addr."</td>
<td >".$reason."</td>
<td>".$cont."</td>
</tr>";

}
echo "</table>";
}

$conn->close();
?>
</body>
</html>