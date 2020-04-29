<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
    <!-- Modal -->
    <div class="modal fade" id="update_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Admin Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update_admin_acc.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter new username">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Enter old password">
                        </div>

                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="text" class="form-control" id="confirm_pass" name="confirm_pass" placeholder="Enter new password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="btn-update-data" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container">
        <!-- <div class="m-3 pull-right">
            <a href="" class="btn btn-outline-info">STUDENT</a>
        </div> -->
        <div class="login-box text-white">
            <img src="img/transpalogo.png">
            <form action="loginadmin.php" method="POST">
                <h4 class="text-center pt-4 mt-4 mb-3">ADMIN LOGIN</h4>
                <h6>Username : </h6>
                <input type="text" class="textbox mb-3" name="username" placeholder="Enter username">
                <h6>Password :</h6>
                <input type="password" class="textbox" name="password" placeholder="Enter password"> <br>
                <input type="submit" value="LOGIN" class="btn btn-dark mt-4" style="margin-left: 60px;"> <br>
                <button type="button" class="btn btn-link ml-4" data-toggle="modal" data-target="#update_admin">
                    Forgot Password?
                </button>

            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>