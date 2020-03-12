<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    $db = mysqli_select_db($con, 'voting');

   if(isset($_POST['btn-save-data'])){

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

        $qry = "INSERT INTO tblcandidate (`president`, `vpresident`, `secretary`, `treasurer` , `pro` , `bmanager` ,  `sen-one`, `sen-two`, `sen-three`, `sen-four`) VALUES ('$pres', '$pres', '$sec', '$treas', '$pro' , '$bm' , '$senone', '$sentwo', '$senthree','$senfour')";
        $query_run = mysqli_query($con,$qry);

        if ($query_run) {

            echo '<script> alert("Data Saved"); </script>';
            header('Location:home.php');

        } else {
            echo '<script> alert("Data Not Saved"); </script>';
        }

   }


    ?>