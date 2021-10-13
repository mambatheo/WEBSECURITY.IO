<?php
session_start();
include "connection.php";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pwd=sha1($_POST["pwd"]);
$otp=mt_rand(100000,999999);
$_SESSION['em']=$email;
$_SESSION['code']=$otp;
$status="Not verified";
$sql="insert into users (fname,lname,email,uname,pwd,code,status) values(?,?,?,?,?,?,?)";
$to=$email;
    $from="From: mutheogene61@gmail.com";
    $subject="Verification Code ";
    $message =$otp;
  
    $mailing = mail($to,$subject,$message,$from);
$st=mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($st,$sql))
{
header("location:status.php");

          
mysqli_stmt_bind_param($st,"sssssss",$fname,$lname,$email,$uname,$pwd,$otp,$status);
mysqli_stmt_execute($st);
}
else{

echo "error:".$sql."<br>".$conn->error;

}

$conn->close();
?>