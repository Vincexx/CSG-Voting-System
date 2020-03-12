<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    $db = mysqli_select_db($con, 'voting');

   if(isset($_POST['btn-delete-data'])){

        $ids = $_POST['delete_id'];

        $qry = "DELETE FROM tblvotersacc WHERE `voters_id` = '$ids'";
        $query_run = mysqli_query($con,$qry);


        if ($query_run) {

            echo '<script> alert("Data Deleted"); </script>';
            header('Location:student.php');

        } else {
            echo '<script> alert("Data Not Deleted"); </script>';
            header("refresh:1;url=student.php");
        }

   }

?>
