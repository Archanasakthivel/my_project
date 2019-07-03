<?php
$conn=mysqli_connect("localhost","root","",'my_project');
    if(isset($_POST['submit']))
    {
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
           $subject = "'$name' has been sent a mail"; 
         $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Gender </strong></td>
                            <td style='width:400px'>$gen</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Age </strong></td>
                            <td style='width:400px'>$age</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>Needed Blood Group</strong></td>
                            <td style='width:400px'>$bgroup</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>Unit of Blood Needed</strong></td>
                            <td style='width:400px'>$ub</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>Date</strong></td>
                            <td style='width:400px'>$date</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>Hospital name:</strong></td>
                            <td style='width:400px'>$hos</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>Doctor Name:</strong></td>
                            <td style='width:400px'>$doc</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>Country</strong></td>
                            <td style='width:400px'>$country</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>State </strong></td>
                            <td style='width:400px'>$state</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>Address </strong></td>
                            <td style='width:400px'>$address</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>Reason: </strong></td>
                            <td style='width:400px'>$reason</td>
                        </tr>
 <tr>
                            <td style='width:150px'><strong>Contact no: </strong></td>
                            <td style='width:400px'>$contact</td>
                        </tr>
                                    </tbody>
                </table>
            </body>
        </html>
        ";
         $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= 'From: Your name <info@address.com>' . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $query="select email from donor where bgroup='$bgroup'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

 foreach ($row as  $key => $value)
{
$to=$value;
        mail($to,$subject,$message,$headers);
                 }    
        }

      else
{
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    
?>








