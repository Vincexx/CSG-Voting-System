<?php

session_start();
$president = $_SESSION['president'];
$vpresident = $_SESSION['vpresident'];
$secretary = $_SESSION['secretary'];
$treasurer = $_SESSION['treasurer'];
$pro = $_SESSION['pro'];
$bmanager = $_SESSION['bmanager'];
$sen_one = $_SESSION['sen-one'];
$sen_two = $_SESSION['sen-two'];
$sen_three = $_SESSION['sen-three'];
$sen_four = $_SESSION['sen-four'];



?>

<!-- if ($_SESSION['status'] != "Submitted") {

header("location:userlogin.php");
} -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>


    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand">CSG Voting System</a>
        <form class="form-inline">
            <a href="userlogin.php" type="button" class="btn btn-outline-dark">STUDENT LOGIN</a>
        </form>
    </nav>


    <h2 class="text-center">List of Candidates you've Voted</h2>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>President : </th>
                    <td><?php echo $president; ?></td>

                </tr>
                <tr>
                    <th>Vice President : </th>
                    <td><?php echo $vpresident; ?></td>
                </tr>
                <tr>
                    <th>Secretary : </th>
                    <td><?php echo $secretary; ?></td>
                </tr>
                <tr>
                    <th>Treasurer : </th>
                    <td><?php echo $treasurer; ?></td>
                </tr>
                <tr>
                    <th>P.R.O : </th>
                    <td><?php echo $pro; ?></td>
                </tr>
                <tr>
                    <th>Business Manager : </th>
                    <td><?php echo $bmanager; ?></td>
                </tr>
                <tr>
                    <th>Senators : </th>
                    <td><?php echo $sen_one; ?></td>

                <tr>
                    <td></td>
                    <td><?php echo $sen_two; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><?php echo $sen_three; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><?php echo $sen_four; ?></td>
                </tr>
                </tr>
            </thead>
        </table>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>