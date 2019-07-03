<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'my_project');
$email=$_POST["email"];

$pass=$_POST["password"];

if($conn)
{
$sql1="select * from registers where email='$email' and password='$pass'";
$res=mysqli_query($conn,$sql1);
$row = mysqli_num_rows($res);
if($row==1)
{
header('Location:home1.html');

}
else
{
echo"Incorrect password or username";
}
}
$conn->close();
?>