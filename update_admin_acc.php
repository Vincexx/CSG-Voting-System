
<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

$db = mysqli_select_db($con, 'voting');

if (isset($_POST['btn-update-data'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirm_pass'];

    if(!empty($username) && !empty($password)) {
        if($password == $confirmPass) {
            $qry = "UPDATE `tbluser` SET `username` = '$username' , `password` = '$password' WHERE `userid` = '0'";
            $query_run = mysqli_query($con, $qry);
                if ($query_run) {
                    echo '<script> alert("Data Updated Successful!"); </script>';
                    header("refresh:0.5;url=home.php");
                }
        } else {
            echo '<script> alert("Password does not Match!"); </script>';
            header("refresh:0.5;url=adminlogin.php");
        }  
    } elseif(!empty($username)) {
            $qry = "UPDATE `tbluser` SET `username` = '$username' WHERE `userid` = '0'";
            $query_run = mysqli_query($con, $qry);
                if ($query_run) {
                    echo '<script> alert("Data Updated Successful!"); </script>';
                    header("refresh:0.5;url=home.php");
                }
    } elseif (!empty($password)) {
        if ($password == $confirmPass) {
            $qry = "UPDATE `tbluser` SET `password` = '$password' WHERE `userid` = '0'";
            $query_run = mysqli_query($con, $qry);
            if ($query_run) {
                echo '<script> alert("Data Updated Successful!"); </script>';
                header('Location:home.php');
            } 
        } else {
            echo '<script> alert("Password does not Match!"); </script>';
            header("refresh:0.5;url=adminlogin.php");
        }
    }

}

?>


