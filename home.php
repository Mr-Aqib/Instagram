<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Instagram</title>
    <style>
        input {
            background-color: #FAFAFA !important;
        }

        input::placeholder {
            color: black;
            font-size: 0.8rem;
        }

        .sign-in-btn {
            background-color: #4CB5F9;
            outline: none;
            border: none;
            font-size: 15px;
            font-weight: bold;
        }
        .or-p{
            font-size: 14px;
            font-weight: bold;
            color: #737373 !important;
        }
        .loginfb-a
        {
            color: #385185;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }
        .forgert-a
        {
            text-decoration: none;
            color: #00376B !important;
            font-size: 13px;
        
        }
        .upper-div
        {
            padding:35px ;
        }
        .middle-a
        {
            font-size: 14px;
        }
        .middle-p
        {
            font-size: 15px;
        }
        .last-a
        {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container row mx-auto  my-5  col-lg-8">
        <div class="col-lg-5 ">
            <img width="100%" src="./images/home-phones.png" alt="">
        </div>
        <div class="col-lg-5 col-9 px-4 mx-auto d-flex flex-column gap-3 ">
            <div class="upper-div border">
            <img class=" d-block mx-auto" width="60%" src="./images/insta-logo.png" alt="">
            <div class="input-div d-flex flex-column gap-2 my-2">
                <input type="text" class="rounded-0 form-control" placeholder="Phone number, usernname or email address" name="username" id="">
                <input type="password" class="rounded-0 form-control" placeholder="Password" name="username" id="">
                <button class="text-white  sign-in-btn w-100 my-2 py-1 rounded-2">Log in</button>
            </div>
            <div class="hr d-flex align-items-center justify-content-center gap-3 my-2 ">
                <hr style="width:40%">
                <p class="or-p m-0" >OR</p>
                <hr style="width:40%">
            </div>
            <div class="login-fb-div">
                <div class="my-4 d-flex flex-row align-items-center justify-content-center gap-2">
                   <img width="6%" src="./images/FB-f-Logo.png" alt="">
                   <a href="" class="d-block loginfb-a m-0">Log in with facebook</a>
                </div>
            </div>
            <a href="" class="my-3 d-flex align-items-center justify-content-center forgert-a ">Forget Your Password?</a>
        </div>
        <div class="middle-div border d-flex align-items-center justify-content-center py-3 ">
            <p class="middle-p align-items-center m-0 d-flex gap-1">Don't have an account? <a href="" class="text-decoration-none fw-bold middle-a">Sign up</a></p>
        </div>
        <div class="lastdiv  d-flex flex-column align-items-center justify-content-center">
            <p class="last-a d-flex align-items-center">Get the App ?</p>
            <div class="d-flex gap-2 justify-content-center">
                <img width="35%"  src="./images/playstore-logo.png" alt="">
                <img width="30%" src="./images/microsoft-logo.png" alt="">
            </div>
        </div>
        </div>
    </div>
</body>

</html>