<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <?php include './BS-CSS.php'?>
    <?php include './signup-data.php' ?> -->
    <title>Document</title>
</head>
<body>
    <h1 class="container">Helo</h1>
    <?php
    session_start();
   if(isset($_SESSION['name'])){
    echo 'Welcome'.$_SESSION['name'].'';
   }
    
    ?>
</body>
</html>