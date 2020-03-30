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
$count = $_SESSION['count'];

if ($_SESSION['status'] != "Submitted") {

    header("location:userlogin.php");
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, lightgreen, white);
        }

        .containers {
            width: 30%;
            margin: auto;
            overflow: hidden;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .branding img {
            width: 100px;

        }

        input[type="submit"] {
            margin-bottom: 50px;
            position: absolute;
            left: 45%;
            width: 20%;
            margin-top: 20px;
        }
    </style>

</head>

<body>


    <nav class="navbar bg-success" style="border-bottom: black 2px solid">
        <div class="container">
            <div class="branding d-flex">
                <img src="img/transpalogo.png" alt="">
                <h2 class="text-white pt-4 pl-3">Cavite State University - Tanza Campus</h3>
            </div>
            <div class="logout">
                <a href="logout.php" type="button" class="btn btn-outline-light">LOGOUT</a>
            </div>
        </div>
    </nav>


    <h2 class="text-center mt-3 mb-3">Voted Officers</h2>
    <p class="text-center">Thank you for your cooperation.</p>

    <div class="containers">
        <table class="table">
            <thead>
                <tr>
                    <th>President : </th>
                    <td>
                        <?php
                        if (!empty($president)) {
                            echo $president;
                        } else {
                            echo "N/A";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Vice President : </th>
                    <td>
                        <?php
                        if (!empty($vpresident)) {
                            echo $vpresident;
                        } else {
                            echo "N/A";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Secretary : </th>
                    <td>
                        <?php
                        if (!empty($secretary)) {
                            echo $secretary;
                        } else {
                            echo "N/A";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Treasurer : </th>
                    <td>
                        <?php
                        if (!empty($treasurer)) {
                            echo $treasurer;
                        } else {
                            echo "N/A";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>P.R.O : </th>
                    <td>
                        <?php
                        if (!empty($pro)) {
                            echo $pro;
                        } else {
                            echo "N/A";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Business Manager : </th>
                    <td>
                        <?php
                        if (!empty($bmanager)) {
                            echo $bmanager;
                        } else {
                            echo "N/A";
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <th>Senators : </th>
                    <?php
                    $counts = 0;
                    for ($x = 0; $x <= $count; $x++) {
                    ?>
                        <?php
                        if (!empty($sen_one[$x])) {
                            $counts++;
                            if ($counts != 1) {
                        ?>
                <tr>
                    <td></td>
                    <td><?php print $sen_one[$x]; ?></td>
                </tr>

            <?php
                            } else {
            ?>
                <td><?php print $sen_one[$x]; ?></td>
        <?php
                            }
                        }
        ?>

        <?php
                        if (!empty($sen_two[$x])) {
                            $counts++;
                            if ($counts != 1) {
        ?>
                <tr>
                    <td></td>
                    <td><?php print $sen_two[$x]; ?></td>
                </tr>

            <?php
                            } else {
            ?>
                <td><?php print $sen_two[$x]; ?></td>
        <?php
                            }
                        }

        ?>

        <?php
                        if (!empty($sen_three[$x])) {
                            $counts++;
                            if ($counts != 1) {
        ?>
                <tr>
                    <td></td>
                    <td><?php print $sen_three[$x]; ?></td>
                </tr>

            <?php
                            } else {
            ?>
                <td><?php print $sen_three[$x]; ?></td>
        <?php
                            }
                        }

        ?>

        <?php
                        if (!empty($sen_four[$x])) {
                            $counts++;
                            if ($counts != 1) {
        ?>
                <tr>
                    <td></td>
                    <td><?php print $sen_four[$x]; ?></td>
                </tr>

            <?php
                            } else {
            ?>
                <td><?php print $sen_four[$x]; ?></td>
        <?php
                            }
                        }

        ?>



    <?php
                    }

    ?>
    </tr>




            </thead>
        </table>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>