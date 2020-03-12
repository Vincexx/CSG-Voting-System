<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    $db = mysqli_select_db($con, 'voting');

   if(isset($_POST['btn-delete-data'])){

        $id =$_POST['delete_id'];

        $qry = "DELETE FROM tblcandidate WHERE id = '$id'";
        $query_run = mysqli_query($con,$qry);

        if ($query_run) {

            echo '<script> alert("Data Deleted"); </script>';
            header('Location:home.php');

        } else {
            echo '<script> alert("Data Not Deleted"); </script>';
        }

   }

   ?>