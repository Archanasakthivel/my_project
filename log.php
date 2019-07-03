<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'ssq');
$name=$_POST["email"];

$pass=$_POST["password"];

if($conn)
{
$sql1="select * from register where email='$name'and pass='$pass'";
$res=mysqli_query($conn,$sql1);
$row = mysqli_num_rows($res);
if($row==1)
{
header('Location:index.html');

}
else
{
echo"Incorrect password or username";
}
}
$conn->close();
?>