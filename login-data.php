<?php
include("./config.php");
session_start();
$lgname = $_POST['loginname'];
$lgpass = $_POST['loginpass'];

$read = "SELECT * FROM signup WHERE Fullname='{$lgname}'  AND Password='{$lgpass}'";
$data = mysqli_query($connection, $read);

if (mysqli_num_rows($data) > 0) {
    while ($row = mysqli_fetch_assoc($data)) {
        $_SESSION['welcome'] = 'welcome' . $row['Fullname'];
        $_SESSION['fname'] = '' . $row['Fullname'];
    }
    header("Location: $base_url/user-data.php");
} else {
    $_SESSION["lg-error"] = "Invalid Credentials";
    header("Location: $base_url/home.php");
}
