<?php
                    
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];

$signup="INSERT INTO signup (Email,Fullname,Username,Password) Values ('{$email}','{$fullname}','{$username}','{$password}')";
mysqli_query($connection,$signup);
?>