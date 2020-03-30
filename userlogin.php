<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url('img/we.jpg') no-repeat;
            background-size: cover;
        }

        .login-box {
            position: absolute;
            top: 20%;
            left: 40%;
            padding: 40px;
            border-radius: 10px;
            border: none;
            height: 400px;
            background: rgb(12, 12, 12, 0.3);
        }

        .textbox {
            padding: 5px;
            border-radius: 10px;
        }

        img {
            width: 190px;
            position: absolute;
            left: 18%;
            bottom: 85%;
            -webkit-filter: grayscale(30%);
            filter: grayscale(30%);
        }
    </style>



</head>

<body>

    <div class="container">
        <div class="login-box text-white">
            <img src="img/transpalogo.png">
            <form action="loginstudent.php" method="POST">
                <h4 class="text-center pt-4 mt-4 mb-3">STUDENT LOGIN</h4>
                <h6>Username : </h6>
                <input type="text" name="student_no" class="textbox mb-3" placeholder="Enter student number">
                <h6>Password :</h6>
                <input type="password" name="password" class="textbox" placeholder="Enter password"> <br>
                <input type="submit" value="LOGIN" class="btn btn-dark mt-4" style="margin-left: 60px;">
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>