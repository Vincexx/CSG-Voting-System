<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'voting');
    
    $_SESSION['is_show'] = false;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM tbluser WHERE username = '$username' && `password` = '$password'";
    $result = mysqli_query($con, $qry);
    $num = mysqli_num_rows($result);

    if($num == 1) {
        header("refresh:0.5;url=result.php");
        $_SESSION['is_show'] = true;
    } else {
        echo '<script> alert("Login Failed!"); </script>';
        header("refresh:0.5;url=result.php");
        $_SESSION['is_show'] = false;
    }
 