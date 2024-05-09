<?php
include './config.php';
$caption=$_POST['caption'];
$imagename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
move_uploaded_file($tempname,'./backendimage/' . $imagename);
$insert ="INSERT into story (Caption ,Image ) VALUES ('{$caption}','{$imagename}')";
mysqli_query($connection, $insert);

header("Location: $base_url/mainscreen.php");




?>