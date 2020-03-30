<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'voting');

    $val = 1;
    $student_no = $_POST['student_no'];
    $pass = $_POST['password'];


    $qry = "SELECT * FROM `tbl_excel` WHERE `student_no` = '$student_no' AND `surname` = '$pass'";
    $query_run = mysqli_query($con, $qry);
    $num = mysqli_num_rows($query_run);

    $validation = mysqli_query($con,"SELECT `validation` FROM `tbl_excel` WHERE `student_no` = '$student_no'");
    $result = mysqli_fetch_array($validation);
    // print $result['validation'];

    

    if($num > 1) {
        if($result['validation'] < 1){
            $_SESSION['surname'] = $pass;
            header("refresh:0.5;url=balota.php");
            $_SESSION['status']="Active";
            $_SESSION['student_no'] = $student_no;
            $_SESSION['surname'] = $pass;

        } else {
            header("refresh:0.5;url=userlogin.php");
            echo '<script> alert("You already login!"); </script>';
        }

    } else {
       echo '<script> alert("Login Failed!"); </script>';
       header("refresh:0.5;url=userlogin.php");
    }

    
    