<?php

session_start();
$president = $_SESSION['president'];
$vpresident = $_SESSION['vpresident'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>


    <nav class="navbar navbar-light" style="background-color: #e3f2fd; justify-content-between">
        <a class="navbar-brand">CSG Voting System</a>
        <form class="form-inline">
            <a href="logout.php" type="button" class="btn btn-outline-dark">LOGOUT</a>
        </form>
    </nav>

    <center>
        <h2>Result</h2>
    </center>

    <div class="container">
        <?php

        $con = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($con, 'voting');

        $qry = "SELECT * FROM tblcandidate";
        $query_run = mysqli_query($con, $qry);
        ?>
        <table class="table table-striped table-bordered table-hover">

            <tr>

                <th rowspan="2">President : </th>
            </tr>
            <?php
            if ($query_run) {

                foreach ($query_run as $row) {

            ?>
                    <td><?php echo $row['president']; ?></td>
                    <td><?php echo $row['number_vote_pres']; ?></td>

            <?php

                }
            } else {
                echo "No Record Found!";
            }

            ?>
            <tr>

                <th rowspan="2">Vice President : </th>
            </tr>
            <?php
            if ($query_run) {

                foreach ($query_run as $row) {

            ?>
                    <td><?php echo $row['vpresident']; ?></td>
                    <td><?php echo $row['number_vote_vpres']; ?></td>

            <?php

                }
            } else {
                echo "No Record Found!";
            }

            ?>

            <tr>

                <th rowspan="2">Secretary : </th>
            </tr>
            <?php
            if ($query_run) {

                foreach ($query_run as $row) {

            ?>
                    <td><?php echo $row['secretary']; ?></td>
                    <td><?php echo $row['number_vote_sec']; ?></td>

            <?php

                }
            } else {
                echo "No Record Found!";
            }

            ?>

            <tr>

                <th rowspan="2">Treasurer : </th>
            </tr>
            <?php
            if ($query_run) {

                foreach ($query_run as $row) {

            ?>
                    <td><?php echo $row['treasurer']; ?></td>
                    <td><?php echo $row['number_vote_treas']; ?></td>

            <?php

                }
            } else {
                echo "No Record Found!";
            }

            ?>
            <tr>

                <th rowspan="2">P.R.O : </th>
            </tr>
            <?php
            if ($query_run) {

                foreach ($query_run as $row) {

            ?>
                    <td><?php echo $row['pro']; ?></td>
                    <td><?php echo $row['number_vote_pro']; ?></td>

            <?php

                }
            } else {
                echo "No Record Found!";
            }

            ?>
            <tr>

                <th rowspan="2">Business Manager : </th>
            </tr>
            <?php
            if ($query_run) {

                foreach ($query_run as $row) {

            ?>
                    <td><?php echo $row['bmanager']; ?></td>
                    <td><?php echo $row['number_vote_bm']; ?></td>

            <?php

                }
            } else {
                echo "No Record Found!";
            }

            ?>
            <tr>

                <th rowspan="2">Senators : </th>
            </tr>
            <?php
            if ($query_run) {

                foreach ($query_run as $row) {

            ?>
                    <td><?php echo $row['sen-one']; ?></td>
                    <td><?php echo $row['number_vote_1']; ?></td>
                    <td><?php echo $row['sen-two']; ?></td>
                    <td><?php echo $row['number_vote_2']; ?></td>
                    <tr></tr>
                    <td></td>

                    <td><?php echo $row['sen-three']; ?></td>
                    <td><?php echo $row['number_vote_3']; ?></td>
                    <td><?php echo $row['sen-four']; ?></td>
                    <td><?php echo $row['number_vote_4']; ?></td>
                    <tr></tr>
                    <td></td>








            <?php
                }
            } else {
                echo "No Record Found!";
            }

            ?>
        </table>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>