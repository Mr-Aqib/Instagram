<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include './BS-CSS.php'?>
    <?php include './config.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            overflow-x:hidden ;
        }
    </style>
</head>
<body>
<?php 
   


session_start();

   if(!isset($_SESSION['fname']) && !isset($_SESSION['welcome']))
   {
    header("Location: $base_url/signup-form.php");
   }
   else
   {
    if(isset($_SESSION['welcome']))
    {
        ?>
    <h3  class="flash text-center  text-white w-25 " style="position:fixed; top:0; right:0; background:linear-gradient(to right, red,orange,purple);margin-left:auto; transition:all .3s">
            <?php echo $_SESSION['welcome']?>
        </h3>
        <?php
        unset($_SESSION['welcome']);
    }
   }
   ?>


   <?php include './mainscreen.php';
   ?>

  


    <a href="./logout-data.php" class="btn btn-danger m-3">Logout</a>
</body>
<script>
let flash=document.querySelector('.flash')
setTimeout(() => {
    flash.style.transform='translateX(100%)'
}, 2000);
</script>
</html>