<?php
session_start();
include "./config.php";
$current_url = $_SERVER['HTTP_REFERER'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];

$signup = "INSERT INTO signup (Email,Fullname,Username,Password) Values ('{$email}','{$fullname}','{$username}','{$password}')";
$result = mysqli_query($connection, $signup);
if ($email == '' || $username == '' || $password == '' || $signup == '') {
  $_SESSION['error-email'] = "Please above Your Email";
  header("Location: $current_url");
} else {
  $_SESSION['fname'] = $fullname;
  $_SESSION['welcome'] = "Welcome " . $username;
  header("Location: $base_url/user-data.php");
}
