<?php 
    session_start();
    if(isset($_SESSION['welcome']) && isset($_SESSION['fname']))
    {
        ?>
        <h3 class="flash text-center  text-white w-25 " style="background:linear-gradient(to right, red,orange,purple);margin-left:auto">
            <?php echo $_SESSION['welcome']?>
        </h3>
        <?php 
        
    }
    else 
    {
        header("Location: $base_url/signup-form.php");
    }
    unset($_SESSION["welcome"]);
    ?>