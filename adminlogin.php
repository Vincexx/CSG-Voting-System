<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSG Voting System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand">CSG VOTING SYSTEM</a>
        <form class="form-inline">
            <a href="userlogin.php" type="button" class="btn btn-outline-dark">USER</a>
            <a href="result.php" type="button" class="btn btn-outline-dark">Result</a>
        </form>
    </nav>


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <center>
                <h1 class="display-4">Admin Login</h1>
            </center>
        </div>
    </div>


    <section id="cover" class="min-vh-100">
        <div id="cover-caption">
            <div class="container">
                <div class="row text-white">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                        <div class="px-2">
                            <form action="loginadmin.php" class="justify-content-center" method="POST">

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="Password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <button type="submit" class="btn btn-dark btn-lg" name="btn-login">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>