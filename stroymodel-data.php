<?php
include './config.php';
session_start();
$caption = $_POST['caption'];
$imagename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];
move_uploaded_file($tempname, './backendimage/' . $imagename);
$insert = "INSERT into story (Caption ,Image ) VALUES ('{$caption}','{$imagename}')";
$result = mysqli_query($connection, $insert);


if ($result) {
    $_SESSION['story-uploaded'] = 'You Story has Been Uploaded';
    header("Location: $base_url/user-data.php");
}


?>;