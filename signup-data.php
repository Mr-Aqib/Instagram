<?php
session_start();
$current_url=$_SERVER['HTTP_REFERER'];
  include "./config.php";               
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];

$signup="INSERT INTO signup (Email,Fullname,Username,Password) Values ('{$email}','{$fullname}','{$username}','{$password}')";
$result=mysqli_query($connection,$signup);
if($result)
{
  $_SESSION['name']=$fullname;
  $_SESSION['welcome']='Welcome '. $fullname;
  header("Location: $base_url/user_data.php");
}
else{
  $_SESSION["error"]= "Error Occured";
  header("Location: $base_url/home.php");
}
?>