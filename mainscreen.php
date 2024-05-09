<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php include './BS-CSS.php'?>
<?php include './boot-js.php'?>
</head>
<style>
::-webkit-scrollbar
{
    width: 4px;
    height: 10px;
}
::-webkit-scrollbar-thumb
{

    background: linear-gradient(to right , red ,purple, orange);
}
</style>
<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2 py-3 d-flex flex-column justify-content-between  col-5 p-0 shadow" style="height: 100vh;">
                <?php include './sdiebar.php'?>
            </div>
            <div class="col-lg-7">
                <div class="container col-lg-9" style="height:100vh; overflow-y:auto" >
                <?php include './story.php'?>
                    <?php include './post.php'?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>