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
    if(!isset($_SESSION['name']))
    {
        ?>
    <?php header("Location: $base_url/signup-form.php")?>
        <?php
    } 
    else if(isset($_SESSION["welcome"]))
    {
        echo "<h1 class='flash w-25 fw-bold text-center' style='background:linear-gradient(to right, red,orange,purple); transition: all.8s;margin-left:auto'>
        {$_SESSION['welcome']}</h1>";
    }
    unset($_SESSION["welcome"]);
    ?>

</body>
<script>
let flash=document.querySelector('.flash')
setTimeout(() => {
    flash.style.transform='translateX(100%)'
}, 2000);
</script>
</html>