<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

$db = mysqli_select_db($con, 'voting');

if (isset($_POST['submit'])) {
    if ($_FILES['file']['name']) {
        $filename = explode('.', $_FILES['file']['name']);
        if ($filename[1] == 'csv') {
            $handle = fopen($_FILES['file']['tmp_name'], 'r');
            while ($data = fgetcsv($handle)) {
                $item1 = mysqli_real_escape_string($con, $data[0]);
                $item2 = mysqli_real_escape_string($con, $data[1]);
                $item3 = mysqli_real_escape_string($con, $data[2]);

                $qry = "INSERT INTO `tbl_excel`(`student_no`, `surname`, `firstname`) VALUES ('$item1', '$item2', '$item3')";
                $query_run = mysqli_query($con, $qry);
                ini_set('memory_limit', '-1');
            }
            fclose($handle);
            print "Import Done";
        } else {
            print "Data not Found!";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSG Voting System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>

<body>

    <nav class="navbar navbar-light" style="background-color: #e3f2fd; justify-content-between">
        <a class="navbar-brand">CSG VOTING SYSTEM</a>
        <form class="form-inline">
            <a href="adminlogin.php" type="button" class="btn btn-outline-dark">LOGOUT</a>
        </form>
    </nav>

    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <a href="home.php" class="btn btn-outline-success" type="button"> CANDIDATES </a>
            <a href="student.php" class="btn btn-outline-success" type="button"> STUDENTS/VOTERS </a>
        </form>
    </nav>

    <div class="card">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <p> Upload file : <input type="file" name="file" class="btn btn-default"> </p>
                <p><input type="submit" name="submit" value="Upload" class="btn btn-primary"></p>

            </form>
        </div>
    </div>
    <div class="container">
        <?php

        $con = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($con, 'voting');

        $qry = "SELECT * FROM tbl_excel";
        $query_run = mysqli_query($con, $qry);
        ?>
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student #</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Firstname</th>
                </tr>
            </thead>
            <?php
            if ($query_run) {

                foreach ($query_run as $row) {
            ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['student_no']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                        </tr>

                    </tbody>
            <?php
                }
            } else {
                echo "No Record Found!";
            }

            ?>
        </table>

    </div>
    <div class="row justify-content-center">
        <div class="col-auto">
            <table class="table table-responsive">
                ....table stuff....
            </table>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>