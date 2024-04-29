<?php
session_start();
  include "./config.php";               
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];

$signup="INSERT INTO signup (Email,Fullname,Username,Password) Values ('{$email}','{$fullname}','{$username}','{$password}')";
$userdata=mysqli_query($connection,$signup);
if($userdata)
{
    $_SESSION['name']=$username;
    
   
}
header("Location: $base_url/user_data.php");
?>