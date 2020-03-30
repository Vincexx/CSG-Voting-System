<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');
    
    mysqli_select_db($con, 'voting');
    $_SESSION['is_active'] = false;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['is_show'] = false;
    $qry = "SELECT * FROM tbluser WHERE username = '$username' && `password` = '$password'";

    $result = mysqli_query($con, $qry);

    $num = mysqli_num_rows($result);

    if($num == 1) {
        $_SESSION['is_active'] = true;
        header('location: home.php');
    } else {
        header('location:adminlogin.php');
    }

?>