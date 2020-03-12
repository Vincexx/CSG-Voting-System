
<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

$db = mysqli_select_db($con, 'voting');

if (isset($_POST['btn-update-data'])) {

    $id = $_POST['update_id'];
    $pres = $_POST['president'];
    $vpres = $_POST['vpresident'];
    $sec = $_POST['secretary'];
    $treas = $_POST['treasurer'];
    $pro = $_POST['pro'];
    $bm = $_POST['bmanager'];
    $senone = $_POST['sen-one'];
    $sentwo = $_POST['sen-two'];
    $senthree = $_POST['sen-three'];
    $senfour = $_POST['sen-four'];

    $qry = "UPDATE `tblcandidate` SET `president`='$pres',`vpresident`='$vpres',`secretary`='$sec',`treasurer`='$treas',`pro`='$pro',`bmanager`='$bm',`sen-one`='$senone',`sen-two`='$sentwo',`sen-three`='$senthree',`sen-four`='$senfour' WHERE `id` = $id";
    $query_run = mysqli_query($con, $qry);

    if ($query_run) {

        echo '<script> alert("Data Updated Successful!"); </script>';
        header('Location:home.php');
    } else {
        echo '<script> alert("Data Not Updated!"); </script>';
    }
}

?>