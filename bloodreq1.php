<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'my_project');
$name=$_POST["name"];
$gen=$_POST["gender"];
$age=$_POST["age"];
$email=$_POST["email"];
$bgroup=$_POST["bgroup"];
$ub=$_POST["ub"];
$date=$_POST["date"];
$hos=$_POST["hos"];
$doc=$_POST["doc"];
$country=$_POST["country"];
$state=$_POST["state"];
$address=$_POST["detail"];
$reason=$_POST["reason"];
$contact=$_POST["contact"];

if($conn)
{
$sql1="insert into blood(name,gender,age,email,bgroup,bunit,req,hos,doc,count,state,addr,reason,contact)values('{$name}','{$gen}','{$age}','{$email}','{$bgroup}','{$ub}','{$date}','{$hos}','{$doc}','{$country}','{$state}','{$address}','{$reason}','{$contact}')";
if(mysqli_query($conn,$sql1)==True)
{
header('Location:index.html');
}
else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
}
$conn->close();
?>