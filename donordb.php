<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'my_project');
$name=$_POST["name"];
$email=$_POST["email"];
$gen=$_POST["gender"];
$bgroup=$_POST["group"];
$dob=$_POST["date"];
$country=$_POST["country"];
$state=$_POST["state"];
$address=$_POST["detail"];
$contact=$_POST["contact"];

if($conn)
{
$sql1="insert into donor(name,email,gender,bgroup,dob,country,state,address,contact)values('{$name}','{$email}','{$gen}','{$bgroup}','{$dob}','{$country}','{$state}','{$address}','{$contact}')";
if(mysqli_query($conn,$sql1)==True)
{
header('Location:request.html');
}
else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
}
$conn->close();
?>