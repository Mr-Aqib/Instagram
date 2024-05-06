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
     if(isset($_SESSION['name']))
     {
        ?>
        <div class="flash text-center text-white w-25 fw-bold p-3 " style="margin-left: auto; background:linear-gradient(to right, red,orange,purple); transition: all 0.5s">
            <?php echo $_SESSION['welcome']?>
        </div>
        <?php
     }

     else{
        header("Location: $base_url/signup-form.php");
     }
     ?>
    
</body>
<script>
let flash=document.querySelector('.flash')
setTimeout(() => {
    flash.style.transform='translateX(100%)'
}, 2000);
</script>
</html>