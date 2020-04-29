<?php

session_start();

$is_show = $_SESSION['is_show'];

if ($_SESSION['is_active'] != true) {
    header("location:adminlogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="3" > -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom, lightgreen, white);
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="login_show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="login_show_result.php" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="btn-login-data" class="btn btn-primary">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <nav class="bg-success text-white p-1" style="border-bottom: 2px black solid;">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="text-center pt-2">Cavite State University - Tanza Campus</h3>
                    <p class="text-center">CSG Election 2020</p>
            </div>

            <div class="col-1 pt-4 d-flex">
                <form action="" method="POST">
                    <button type="submit" class="btn btn-dark mr-3" name="btn_hide" style="height:40px;">
                        HIDE
                    </button>
                </form>
                <button type="button" class="btn btn-dark" style="height: 40px;" data-toggle="modal" data-target="#login_show">
                    SHOW
                </button>
            </div>
        </div>
    </nav>
    <?php
    if (isset($_POST['btn_hide'])) {
        header("refresh:0.5;url=result.php");
        $_SESSION['is_show'] = false;
    }
    ?>




    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-6" style="margin-left: 60px;">
                <?php

                include 'config.php';

                $qry = "SELECT * FROM tbl_excel";
                $query_run = mysqli_query($con, $qry);
                $total_student = mysqli_num_rows($query_run);

                $qry = "SELECT * FROM tblcandidate";
                $query_run = mysqli_query($con, $qry);
                ?>
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <th colspan="5" class="text-center bg-success text-white">Result</th>
                    </tr>
                    <th rowspan="2">President : </th>
                    </tr>
                    <?php
                    if ($query_run) {
                        $total_pres = 0;
                        $total_vpres = 0;
                        $total_sec = 0;
                        $total_treas = 0;
                        $total_pro = 0;
                        $total_bm = 0;
                        $total_sen = 0;
                        $total_num = 0;
                        $total_no_vote = 0;
                        foreach ($query_run as $row) {
                            $total_pres += $row['number_vote_pres'];
                            $total_vpres += $row['number_vote_vpres'];
                            $total_sec += $row['number_vote_sec'];
                            $total_treas += $row['number_vote_treas'];
                            $total_pro += $row['number_vote_pro'];
                            $total_bm += $row['number_vote_bm'];
                            $total_sen += $row['number_vote_1'] +
                                $row['number_vote_2'] +
                                $row['number_vote_3'] +
                                $row['number_vote_4'];

                    ?>
                            <td>
                                <?php
                                if ($is_show == true) {
                                    echo $row['president'];
                                } else {
                                    echo "?";
                                }
                                ?>
                            </td>
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
                            <td>
                                <?php
                                if ($is_show == true) {
                                    echo $row['vpresident'];
                                } else {
                                    echo "?";
                                }
                                ?>
                            </td>
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
                            <td>
                                <?php
                                if ($is_show == true) {
                                    echo $row['secretary'];
                                } else {
                                    echo "?";
                                }
                                ?>
                            </td>
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
                            <td>
                                <?php
                                if ($is_show == true) {
                                    echo $row['treasurer'];
                                } else {
                                    echo "?";
                                }
                                ?>
                            </td>
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
                            <td>
                                <?php
                                if ($is_show == true) {
                                    echo $row['pro'];
                                } else {
                                    echo "?";
                                }
                                ?>
                            </td>
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
                            <td>
                                <?php
                                if ($is_show == true) {
                                    echo $row['bmanager'];
                                } else {
                                    echo "?";
                                }
                                ?>
                            </td>
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
                    foreach ($query_run as $row) {
                    ?>
                        <td>
                            <?php
                            if ($is_show == true) {
                                echo $row['sen-one'];
                            } else {
                                echo "?";
                            }
                            ?>
                        </td>
                        <td><?php echo $row['number_vote_1']; ?></td>
                    <?php
                    }
                    ?>
                    <tr>
                        <td></td>
                        <?php
                        foreach ($query_run as $row) {
                        ?>
                            <td>
                                <?php
                                if ($is_show == true) {
                                    echo $row['sen-two'];
                                } else {
                                    echo "?";
                                }
                                ?>
                            </td>
                            <td><?php echo $row['number_vote_2']; ?></td>
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
                                <?php
                                if ($is_show == true) {
                                    echo $row['sen-three'];
                                } else {
                                    echo "?";
                                }
                                ?>
                            </td>
                            <td><?php echo $row['number_vote_3']; ?></td>
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
                                <?php
                                if ($is_show == true) {
                                    echo $row['sen-four'];
                                } else {
                                    echo "?";
                                }
                                ?>
                            </td>
                            <td><?php echo $row['number_vote_4']; ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                </table>
            </div>
            <?php
            $qry = "SELECT * FROM tbl_no_vote";
            $query_run = mysqli_query($con, $qry);
            ?>

            <div class="col-2.4">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <th class="text-white bg-success">Total Votes</th>
                        <th class="text-white bg-success">No Votes</th>
                    </tr>

                    <?php
                    $total_num = $total_pres +
                        $total_vpres + $total_sec +
                        $total_treas + $total_pro +
                        $total_bm + $total_sen;
                    if ($query_run) {

                        foreach ($query_run as $row) {
                            $not_yet_vote = $row['not_yet_vote'];
                            $already_voted = $row['already_voted'];

                    ?>
                            <tr>
                                <td><?php echo $total_pres; ?></td>
                                <td><?php echo $row['no_vote_pres'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $total_vpres; ?></td>
                                <td><?php echo $row['no_vote_vpres'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $total_sec; ?></td>
                                <td><?php echo $row['no_vote_sec'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $total_treas; ?></td>
                                <td><?php echo $row['no_vote_treas'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $total_pro; ?></td>
                                <td><?php echo $row['no_vote_pro'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $total_bm; ?></td>
                                <td><?php echo $row['no_vote_bm'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $total_sen; ?></td>
                                <td><?php echo $row['no_vote_1'] ?></td>
                            </tr>

                        <?php
                        }
                        $total_no_vote = $row['no_vote_pres'] +
                            $row['no_vote_vpres'] + $row['no_vote_sec'] +
                            $row['no_vote_treas'] + $row['no_vote_pro'] +
                            $row['no_vote_bm'] + $row['no_vote_1'];
                        ?>

                        <tr>
                            <th><?php echo  "$total_num"; ?></th>
                            <th><?php echo  "$total_no_vote"; ?></th>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="col-3">
                <table class="table table-bordered table-striped  text-center">
                    <tr>
                        <th colspan="2" class="text-white bg-success">Total Number of Students</th>

                    </tr>
                    <tr>
                        <td colspan="2"><?php if (!empty($total_student)) echo $total_student; ?></td>
                    </tr>
                    <tr>
                        <th class="text-white bg-success">Not Yet Vote</th>
                        <th class="text-white bg-success">Already Voted</th>
                    </tr>
                    <tr>
                        <td><?php echo $not_yet_vote; ?></td>
                        <td><?php echo $already_voted; ?></td>
                    </tr>

                </table>

            </div>
        </div>
        
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>