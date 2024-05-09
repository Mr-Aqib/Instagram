<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>

</style>
<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2 py-3 d-flex flex-column justify-content-between  col-5 p-0 shadow" style="height: 100vh;">
                <div class="upper-div">
                    <img class=" d-block mx-auto" width="120px" src="./images/insta-logo.png" alt="">
                    <ul class="mx-4 my-3 d-flex gap-4 fs-5 flex-column fw-medium list-unstyled">
                        <li class="d-flex flex-row gap-2"> <i class="bi bi-house-door "></i>
                            Home</li>
                        <li class="d-flex flex-row gap-2"><i class="bi bi-search"></i>Explore</li>
                        <li class="d-flex flex-row gap-2"><i class="bi bi-messenger"></i>Message</li>
                        <li class="d-flex flex-row gap-2"><i class="bi bi-heart"></i>Notification</li>
                        <li class="d-flex flex-row gap-2"><i class="bi bi-plus-square"></i>Create</li>
                    </ul>
                </div>
                <div class="lower-div d-flex flex-row align-items-center justtiyf-content-center">
                    <img class="mx-3 rounded-circle" width="45px" height="45px" src="./images/profileimg.jpeg" alt="">
                    <a href="" class="text-dark fw-medium" style="text-decoration:none">Profile</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="container col-lg-9" >
                <?php include './story.php'?>
                    <?php include './post.php'?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>