<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'voting');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM tbluser WHERE username = '$username' && `password` = '$password'";

    $result = mysqli_query($con, $qry);

    $num = mysqli_num_rows($result);

    if($num == 1) {
        $_SESSION['username'] = $username;
        header('location: home.php');
    } else {
        header('location:adminlogin.php');
    }

?>