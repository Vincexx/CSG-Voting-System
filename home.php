<?php

session_start();

if ($_SESSION['is_active'] != "true") {
    header("location:adminlogin.php");
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


    <!-- Modal -->
    <div class="modal fade" id="candidate-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Candidate for Officers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcandidate.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>President</label>
                            <input type="text" class="form-control" name="president" placeholder="Enter name for President">
                        </div>

                        <div class="form-group">
                            <label>Vice President</label>
                            <input type="text" class="form-control" name="vpresident" placeholder="Enter name for Vice President">
                        </div>

                        <div class="form-group">
                            <label>Secretary</label>
                            <input type="text" class="form-control" name="secretary" placeholder="Enter name for Secretary">
                        </div>

                        <div class="form-group">
                            <label>Treasurer</label>
                            <input type="text" class="form-control" name="treasurer" placeholder="Enter name for Treasurer">
                        </div>
                        <div class="form-group">
                            <label>P.R.O</label>
                            <input type="text" class="form-control" name="pro" placeholder="Enter name for PRO">
                        </div>
                        <div class="form-group">
                            <label>Business Manager</label>
                            <input type="text" class="form-control" name="bmanager" placeholder="Enter name for Business Manager">
                        </div>
                        <div class="form-group">
                            <label>Senators</label>
                            <input type="text" class="form-control" name="sen-one" placeholder="Enter name for Senator 1">
                            <input type="text" class="form-control" name="sen-two" placeholder="Enter name for Senator 2">
                            <input type="text" class="form-control" name="sen-three" placeholder="Enter name for Senator 3">
                            <input type="text" class="form-control" name="sen-four" placeholder="Enter name for Senator 4">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="btn-save-data" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- EDIT Modal //------------------------------------------------ -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update.php" method="POST">
                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label>President</label>
                            <input type="text" class="form-control" id="pres" name="president" placeholder="Enter name of President">
                        </div>

                        <div class="form-group">
                            <label>Vice President</label>
                            <input type="text" class="form-control" id="vpres" name="vpresident" placeholder="Enter name of Vice President">
                        </div>

                        <div class="form-group">
                            <label>Secretary</label>
                            <input type="text" class="form-control" id="sec" name="secretary" placeholder="Enter name of Secretary">
                        </div>

                        <div class="form-group">
                            <label>Treasurer</label>
                            <input type="text" class="form-control" id="treas" name="treasurer" placeholder="Enter name of Treasurer">
                        </div>
                        <div class="form-group">
                            <label>P.R.O</label>
                            <input type="text" class="form-control" name="pro" id="pro" placeholder="Enter name for PRO">
                        </div>
                        <div class="form-group">
                            <label>Business Manager</label>
                            <input type="text" class="form-control" name="bmanager" id="bmanager" placeholder="Enter name for Business Manager">
                        </div>
                        <div class="form-group">
                            <label>Senators</label>
                            <input type="text" class="form-control" name="sen-one" id="sen-one" placeholder="Enter name for Senator 1">
                            <input type="text" class="form-control" name="sen-two" id="sen-two" placeholder="Enter name for Senator 2">
                            <input type="text" class="form-control" name="sen-three" id="sen-three" placeholder="Enter name for Senator 3">
                            <input type="text" class="form-control" name="sen-four" id="sen-four" placeholder="Enter name for Senator 4">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="btn-update-data" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE Modal //------------------------------------------------ -->

    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Candidate Data</h5>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4>Do you really want to delete this Data?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                        <button type="submit" name="btn-delete-data" class="btn btn-primary">YES</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

        <!-- DELETE Modal //------------------------------------------------ -->

    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Candidate Data</h5>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4>Do you really want to delete this Data?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                        <button type="submit" name="btn-delete-data" class="btn btn-primary">YES</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



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

    <div class="container-fluid">

        <center>
            <h2>LIST OF CANDIDATES</h2>
        </center>

        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#candidate-add-modal">
                    ADD CANDIDATE
                </button>
                <a href="result.php" class="btn btn-dark">SHOW RESULT</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <?php

                include 'config.php';

                $qry = "SELECT * FROM tblcandidate";
                $query_run = mysqli_query($con, $qry);
                ?>
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">Candidate #</th>
                            <th scope="col">President</th>
                            <th scope="col">Vice President</th>
                            <th scope="col">Secretary</th>
                            <th scope="col">Treasurer</th>
                            <th scope="col">P.R.O</th>
                            <th scope="col">Business Manager</th>
                            <th scope="col" colspan="4">Senators</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                        </tr>
                    </thead>
                    <?php
                    if ($query_run) {

                        foreach ($query_run as $row) {
                    ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['president']; ?></td>
                                    <td><?php echo $row['vpresident']; ?></td>
                                    <td><?php echo $row['secretary']; ?></td>
                                    <td><?php echo $row['treasurer']; ?></td>
                                    <td><?php echo $row['pro']; ?></td>
                                    <td><?php echo $row['bmanager']; ?></td>
                                    <td><?php echo $row['sen-one']; ?></td>
                                    <td><?php echo $row['sen-two']; ?></td>
                                    <td><?php echo $row['sen-three']; ?></td>
                                    <td><?php echo $row['sen-four']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-edit">EDIT</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-delete">DELETE</button>
                                    </td>
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
        </div>
    </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {

            $('.btn-delete').on('click', function() {

                $('#delete-modal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();

                });
                console.log('data');

                $('#delete_id').val(data[0]);


            });
        });
    </script>


    <script>
        $(document).ready(function() {

            $('.btn-edit').on('click', function() {

                $('#edit-modal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();

                });
                console.log('data');

                $('#update_id').val(data[0]);
                $('#pres').val(data[1]);
                $('#vpres').val(data[2]);
                $('#sec').val(data[3]);
                $('#treas').val(data[4]);
                $('#pro').val(data[5]);
                $('#bmanager').val(data[6]);
                $('#sen-one').val(data[7]);
                $('#sen-two').val(data[8]);
                $('#sen-three').val(data[9]);
                $('#sen-four').val(data[10]);

            });
        });
    </script>

</body>

</html>