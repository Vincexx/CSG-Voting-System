<?php

session_start();
$username = $_SESSION['surname'];


if ($_SESSION['status'] != "Active") {
    header("location:userlogin.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ready to Vote</title>
    </title>

    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, lightgreen, white);
        }

        .containers {
            width: 60%;
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

        .highlight {
            color: yellow;
            font-weight: bold;
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

    <div class="container">
        <p class="pt-2">Welcome, <?php echo $username; ?>!</p>
    </div>


    <div class="containers">

        <?php

        $con = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($con, 'voting');

        $qry = "SELECT * FROM tblcandidate";
        $query_run = mysqli_query($con, $qry);
        ?>

        <form action="submit-form.php" method="POST">
            <p>Choose candidate that you want. Please vote wisely! Goodluck.</p>
            <table class="table table-hover">

                <th>President : </th>

                <?php
                $x = 0;
                if ($query_run) {

                    foreach ($query_run as $row) {
                ?>
                        <td>
                            <input type="radio" id="<?php echo $row['id']; ?>" name="president" value="<?php echo $row['president']; ?>">
                            <label for="<?php echo $row['id']; ?>"><?php echo $row['president']; ?></label>
                        </td>
                <?php

                    }
                } else {
                    echo "No Record Found!";
                }

                ?>
                <tr></tr>

                <th> Vice President : </th>

                <?php
                if ($query_run) {

                    foreach ($query_run as $row) {
                ?>
                        <td>
                            <input type="radio" id="<?php echo $row['id']; ?>" name="vpresident" value="<?php echo $row['vpresident']; ?>">
                            <label for="<?php echo $row['id']; ?>"><?php echo $row['vpresident']; ?></label>
                        </td>
                <?php
                    }
                } else {
                    echo "No Record Found!";
                }

                ?>
                <tr></tr>

                <th> Secretary : </th>

                <?php
                if ($query_run) {

                    foreach ($query_run as $row) {
                ?>
                        <td>
                            <input type="radio" id="<?php echo $row['id']; ?>" name="secretary" value="<?php echo $row['secretary']; ?>">
                            <label for="<?php echo $row['id']; ?>"><?php echo $row['secretary']; ?></label>
                        </td>
                <?php
                    }
                } else {
                    echo "No Record Found!";
                }

                ?>
                <tr></tr>

                <th> Treasurer : </th>

                <?php
                if ($query_run) {

                    foreach ($query_run as $row) {
                ?>
                        <td>
                            <input type="radio" id="<?php echo $row['id']; ?>" name="treasurer" value="<?php echo $row['treasurer']; ?>">
                            <label for="<?php echo $row['id']; ?>"><?php echo $row['treasurer']; ?></label>
                        </td>
                <?php
                    }
                } else {
                    echo "No Record Found!";
                }

                ?>
                <tr></tr>

                <th> P.R.O : </th>

                <?php
                if ($query_run) {

                    foreach ($query_run as $row) {
                ?>
                        <td>
                            <input type="radio" id="<?php echo $row['id']; ?>" name="pro" value="<?php echo $row['pro']; ?>">
                            <label for="<?php echo $row['id']; ?>"><?php echo $row['pro']; ?></label>
                        </td>
                <?php
                    }
                } else {
                    echo "No Record Found!";
                }

                ?>
                <tr></tr>

                <th> Business Manager : </th>

                <?php
                if ($query_run) {

                    foreach ($query_run as $row) {
                ?>
                        <td>
                            <input type="radio" id="<?php echo $row['id']; ?>" name="bmanager" value="<?php echo $row['bmanager']; ?>">
                            <label for="<?php echo $row['id']; ?>"><?php echo $row['bmanager']; ?></label>
                        </td>
                <?php
                    }
                } else {
                    echo "No Record Found!";
                }

                ?>
                <tr></tr>

                <th> Senators : </th>

                <?php
                foreach ($query_run as $row) {
                ?>
                    <td>
                        <input type="checkbox" class="checkbox" name="sen-one[]" id="<?php echo $row['id']; ?>" value="<?php echo $row['sen-one']; ?>">
                        <label><?php echo $row['sen-one']; ?></label>
                    </td>
                <?php
                }
                ?>

                <tr>
                    <td></td>
                    <?php
                    foreach ($query_run as $row) {
                    ?>
                        <td>
                            <input type="checkbox" class="checkbox" name="sen-two[]" id="<?php echo $row['id']; ?>" value="<?php echo $row['sen-two']; ?>">
                            <label><?php echo $row['sen-two']; ?></label>
                        </td>
                    <?php
                    }
                    ?>
                </tr>

                <tr>
                    <td></td>
                    <?php
                    foreach ($query_run as $row) {
                    ?>
                        <td>
                            <input type="checkbox" class="checkbox" name="sen-three[]" id="<?php echo $row['id']; ?>" value="<?php echo $row['sen-three']; ?>">
                            <label><?php echo $row['sen-three']; ?></label>
                        </td>
                    <?php
                    }
                    ?>
                </tr>

                <tr>
                    <td></td>
                    <?php
                    foreach ($query_run as $row) {
                    ?>
                        <td>
                            <input type="checkbox" class="checkbox" name="sen-four[]" id="<?php echo $row['id']; ?>" value="<?php echo $row['sen-four']; ?>">
                            <label><?php echo $row['sen-four']; ?></label>
                        </td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" name="btn-submit" class="btn btn-success"></td>
                </tr>
            </table>

        </form>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(".checkbox").change(function() {
            var count = $(".checkbox:checked").length; //get count of checked checkboxes

            if (count > 4) {
                alert("Only 4 options allowed..!");
                $(this).prop('checked', false); // turn this one off
            }
        });
    </script>
</body>

</html>