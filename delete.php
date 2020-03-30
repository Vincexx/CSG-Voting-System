<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    $db = mysqli_select_db($con, 'voting');

   if(isset($_POST['btn-delete-data'])){

        $id =$_POST['delete_id'];

        $qry = "DELETE FROM tblcandidate WHERE id = '$id'";
        $query_run = mysqli_query($con,$qry);

        $qry = "UPDATE `tbl_no_vote` SET `no_vote_pres` = '0', `no_vote_vpres` = '0', `no_vote_sec`= '0', `no_vote_treas`= '0', `no_vote_pro`= '0', `no_vote_bm` = '0',`no_vote_1` = '0', `total_votes` = '0', `already_voted` = '0'  WHERE `id` = '1'";
        $query_run = mysqli_query($con,$qry);

        $qry = "SELECT * FROM tbl_excel";
        $query_run = mysqli_query($con, $qry);
        $total_student = mysqli_num_rows($query_run);

        $qry1 = "UPDATE `tbl_no_vote` SET `not_yet_vote`= '$total_student' WHERE `id` = '1'";
        $query_run1 = mysqli_query($con, $qry1);
        echo '<script> alert("Data Saved"); </script>';

        

        if ($query_run) {

            echo '<script> alert("Data Deleted"); </script>';
            header('Location:home.php');

        } else {
            echo '<script> alert("Data Not Deleted"); </script>';
        }

   }

   ?>