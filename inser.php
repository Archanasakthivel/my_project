<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'my_project');
$name=$_POST["name"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$phone=$_POST["phone"];

if($conn->connect_error)
echo"connection error";
else
{
$sql1="insert into registers(name,password,email,phone)values('{$name}','{$pass}','{$email}','{$phone}')";
if(mysqli_query($conn,$sql1)==True)
{
header('Location:home.html');

}
else
{
echo"Insert Error in sql1";
}
}
$conn->close();
?>