<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './BS-CSS.php'?>
    <?php include './config.php'?>
    <title>Document</title>
</head>
<body>
   
        <?php
        session_start();
        if(isset($_SESSION['name']))
        {
            echo "<h1 class='text-center'> {$_SESSION['name']}</h1>";
           echo "<a href='./logout-data.php' class='btn btn-success'>Logout</a>";
        }
        else{
            header("Location: $base_url/signup-form.php");
        }
        ?>

    
</body>
</html>