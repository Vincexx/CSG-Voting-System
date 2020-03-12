<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    $db = mysqli_select_db($con, 'voting');
    

   if(isset($_POST['btn-submit'])){
        
     $president = $_POST['president'];
     $_SESSION['president']= $president;

     $vpresident = $_POST['vpresident'];
     $_SESSION['vpresident'] = $vpresident;

     $secretary = $_POST['secretary'];
     $_SESSION['secretary'] = $secretary;

     $treasurer = $_POST['treasurer'];
     $_SESSION['treasurer'] = $treasurer;

     $pro = $_POST['pro'];
     $_SESSION['pro'] = $pro;

     $bmanager = $_POST['bmanager'];
     $_SESSION['bmanager'] = $bmanager;

     $sen_one = $_POST['sen-one'];

     $sen_two = $_POST['sen-two'];

     $sen_three = $_POST['sen-three'];

     $sen_four = $_POST['sen-four'];

          $qry = "SELECT * FROM tblcandidate";
          $query_run = mysqli_query($con, $qry);
          $count = 0;
          if ($query_run) {

               foreach ($query_run as $row) {
                    if($president == $row['president']) {
                         $count = $row['number_vote_pres'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_pres`= '$count' WHERE `president` = '$president'";
                         $query_run = mysqli_query($con, $qry1);
                    }
                    if ($vpresident == $row['vpresident']) {
                         $count = $row['number_vote_vpres'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_vpres`= '$count' WHERE `vpresident` = '$vpresident'";
                         $query_run = mysqli_query($con, $qry1);   
                    }
                    if ($secretary == $row['secretary']) {
                         $count = $row['number_vote_sec'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_sec`= '$count' WHERE `secretary` = '$secretary'";
                         $query_run = mysqli_query($con, $qry1);   
                    }
                    if ($treasurer == $row['treasurer']) {
                         $count = $row['number_vote_treas'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_treas`= '$count' WHERE `treasurer` = '$treasurer'";
                         $query_run = mysqli_query($con, $qry1);   
                    }
                    if ($pro == $row['pro']) {
                         $count = $row['number_vote_pro'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_pro`= '$count' WHERE `pro` = '$pro'";
                         $query_run = mysqli_query($con, $qry1);   
                    }
                    if ($bmanager == $row['bmanager']) {
                         $count = $row['number_vote_bm'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_bm`= '$count' WHERE `bmanager` = '$bmanager'";
                         $query_run = mysqli_query($con, $qry1);   
                    }
                    foreach ($sen_one as $sen1) {
                         if ($sen1 == $row['sen-one']) {
                              $_SESSION['sen-one'] = $sen1;
                              $count = $row['number_vote_1'];
                              $count++;
                              echo $count;
                              echo $sen1;
                              $qry1 = "UPDATE `tblcandidate` SET `number_vote_1`= '$count' WHERE `sen-one` = '$sen1'";
                              $query_run = mysqli_query($con, $qry1);
                         }
                    }
                    foreach ($sen_two as $sen2) {
                         if ($sen2 == $row['sen-two']) {
                              $_SESSION['sen-two'] = $sen2;
                              $count = $row['number_vote_2'];
                              $count++;
                              echo $count;
                              echo $sen2;
                              $qry1 = "UPDATE `tblcandidate` SET `number_vote_2`= '$count' WHERE `sen-two` = '$sen2'";
                              $query_run = mysqli_query($con, $qry1);
                         }
                    }
                    foreach ($sen_three as $sen3) {
                         if ($sen3 == $row['sen-three']) {
                              $_SESSION['sen-three'] = $sen3;
                              $count = $row['number_vote_3'];
                              $count++;
                              echo $count;
                              echo $sen3;
                              $qry1 = "UPDATE `tblcandidate` SET `number_vote_3`= '$count' WHERE `sen-three` = '$sen3'";
                              $query_run = mysqli_query($con, $qry1);
                         }
                    }
                    foreach ($sen_four as $sen4) {
                         if ($sen4 == $row['sen-four']) {
                              $_SESSION['sen-four'] = $sen4;
                              $count = $row['number_vote_4'];
                              $count++;
                              echo $count;
                              echo $sen4;
                              $qry1 = "UPDATE `tblcandidate` SET `number_vote_4`= '$count' WHERE `sen-four` = '$sen4'";
                              $query_run = mysqli_query($con, $qry1);
                         }
                    }
                         
               }  
               echo '<script> alert("Submit Form Successful!"); </script>';
               $_SESSION['status']="Submitted";
               header('Location:receipt.php');
          } else {
               echo '<script> alert("Submit Form Failed!"); </script>';
               header('Location:balota.php');
          }
        
        

        
    

   }

?>  