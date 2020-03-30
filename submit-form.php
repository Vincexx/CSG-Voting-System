<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    $db = mysqli_select_db($con, 'voting');

     $qry = "SELECT * FROM tbl_excel";
     $query_run = mysqli_query($con, $qry);
     $total_student = mysqli_num_rows($query_run);

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
     $_SESSION['sen-one'] = $sen_one;

     $sen_two = $_POST['sen-two'];
     $_SESSION['sen-two'] = $sen_two;

     $sen_three = $_POST['sen-three'];
     $_SESSION['sen-three'] = $sen_three;

     $sen_four = $_POST['sen-four'];
     $_SESSION['sen-four'] = $sen_four;
                    

 


          $qry = "SELECT * FROM tblcandidate";
          $query_run = mysqli_query($con, $qry);
          $count = 0;
          $voted_pres = 0;
          $voted_vpres = 0;
          $voted_sec = 0;
          $voted_treas = 0;
          $voted_pro = 0;
          $voted_bm = 0;
          $voted_1 = 0;
          $voted_2 = 0;
          $voted_3 = 0;
          $voted_4 = 0;

          $loop = 0;
          $no_vote = 0;
     
          if ($query_run) {
               $_SESSION['row'] = $query_run;
               foreach ($query_run as $row) {
                    $loop++;
                    if($president == $row['president']) {
                         $count = $row['number_vote_pres'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_pres`= '$count' WHERE `president` = '$president'";
                         $query_run = mysqli_query($con, $qry1);
                         $voted_pres = 1;
                    } 
                    else{
                         if($voted_pres != 1 && $loop == 2){
                              $qry = "SELECT * FROM tbl_no_vote WHERE id = '1'";
                              $query_run = mysqli_query($con, $qry);
                              foreach($query_run as $rows) {
                                   $no_vote = $rows['no_vote_pres'];
                              }
                                   $no_vote++;
                                   $qry1 = "UPDATE `tbl_no_vote` SET `no_vote_pres`= '$no_vote' WHERE `id` = '1'";
                                   $query_run = mysqli_query($con, $qry1);
                              
                         }
                    }

                    if ($vpresident == $row['vpresident']) {
                         $count = $row['number_vote_vpres'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_vpres`= '$count' WHERE `vpresident` = '$vpresident'";
                         $query_run = mysqli_query($con, $qry1);   
                          $voted_vpres = 1;
                    } 
                    else{
                         if($voted_vpres != 1 && $loop == 2){
                              $qry = "SELECT * FROM tbl_no_vote WHERE id = '1'";
                              $query_run = mysqli_query($con, $qry);
                              foreach($query_run as $rows) {
                                   $no_vote = $rows['no_vote_vpres'];
                              }
                                   $no_vote++;
                                   $qry1 = "UPDATE `tbl_no_vote` SET `no_vote_vpres`= '$no_vote' WHERE `id` = '1'";
                                   $query_run = mysqli_query($con, $qry1);
                              
                         }
                    }
               
                    if ($secretary == $row['secretary']) {
                         $count = $row['number_vote_sec'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_sec`= '$count' WHERE `secretary` = '$secretary'";
                         $query_run = mysqli_query($con, $qry1);  
                         $voted_sec = 1; 
                    }
                    else{
                         if($voted_sec != 1 && $loop == 2){
                              $qry = "SELECT * FROM tbl_no_vote WHERE id = '1'";
                              $query_run = mysqli_query($con, $qry);
                              foreach($query_run as $rows) {
                                   $no_vote = $rows['no_vote_sec'];
                              }
                                   $no_vote++;
                                   $qry1 = "UPDATE `tbl_no_vote` SET `no_vote_sec`= '$no_vote' WHERE `id` = '1'";
                                   $query_run = mysqli_query($con, $qry1);
                              
                         }
                    }
                    
                    if ($treasurer == $row['treasurer']) {
                         $count = $row['number_vote_treas'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_treas`= '$count' WHERE `treasurer` = '$treasurer'";
                         $query_run = mysqli_query($con, $qry1);   
                         $voted_treas = 1; 
                    }
                    else{
                         if($voted_treas != 1 && $loop == 2){
                              $qry = "SELECT * FROM tbl_no_vote WHERE id = '1'";
                              $query_run = mysqli_query($con, $qry);
                              foreach($query_run as $rows) {
                                   $no_vote = $rows['no_vote_treas'];
                              }
                                   $no_vote++;
                                   $qry1 = "UPDATE `tbl_no_vote` SET `no_vote_treas`= '$no_vote' WHERE `id` = '1'";
                                   $query_run = mysqli_query($con, $qry1);
                              
                         }
                    }
                    if ($pro == $row['pro']) {
                         $count = $row['number_vote_pro'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_pro`= '$count' WHERE `pro` = '$pro'";
                         $query_run = mysqli_query($con, $qry1);
                         $voted_pro = 1;    
                    }
                    else{
                         if($voted_pro != 1 && $loop == 2){
                              $qry = "SELECT * FROM tbl_no_vote WHERE id = '1'";
                              $query_run = mysqli_query($con, $qry);
                              foreach($query_run as $rows) {
                                   $no_vote = $rows['no_vote_pro'];
                              }
                                   $no_vote++;
                                   $qry1 = "UPDATE `tbl_no_vote` SET `no_vote_pro`= '$no_vote' WHERE `id` = '1'";
                                   $query_run = mysqli_query($con, $qry1);
                              
                         }
                    }
                    if ($bmanager == $row['bmanager']) {
                         $count = $row['number_vote_bm'];
                         $count++;
                         echo $count;
                         $qry1 = "UPDATE `tblcandidate` SET `number_vote_bm`= '$count' WHERE `bmanager` = '$bmanager'";
                         $query_run = mysqli_query($con, $qry1);   
                         $voted_bm = 1; 
                    }
                    else{
                         if($voted_bm != 1 && $loop == 2){
                              $qry = "SELECT * FROM tbl_no_vote WHERE id = '1'";
                              $query_run = mysqli_query($con, $qry);
                              foreach($query_run as $rows) {
                                   $no_vote = $rows['no_vote_bm'];
                              }
                                   $no_vote++;
                                   $qry1 = "UPDATE `tbl_no_vote` SET `no_vote_bm`= '$no_vote' WHERE `id` = '1'";
                                   $query_run = mysqli_query($con, $qry1);
                              
                         }
                    }

                    foreach($sen_one as $sen1) {
                         if($sen1 == $row['sen-one']) {
                              $count = $row['number_vote_1'];
                              $count++;
                              echo $count;
                              $qry1 = "UPDATE `tblcandidate` SET `number_vote_1`= '$count' WHERE `sen-one` = '$sen1'";
                              $query_run = mysqli_query($con, $qry1);
                              $voted_1++; 
                         }
                    }

                    foreach($sen_two as $sen2) {
                         if($sen2 == $row['sen-two']) {
                              $count = $row['number_vote_2'];
                              $count++;
                              echo $count;
                              $qry1 = "UPDATE `tblcandidate` SET `number_vote_2`= '$count' WHERE `sen-two` = '$sen2'";
                              $query_run = mysqli_query($con, $qry1);
                              $voted_1++;
                         }
                    }

                    foreach($sen_three as $sen3) {
                         if($sen3 == $row['sen-three']) {
                              $count = $row['number_vote_3'];
                              $count++;
                              echo $count;
                              $qry1 = "UPDATE `tblcandidate` SET `number_vote_3`= '$count' WHERE `sen-three` = '$sen3'";
                              $query_run = mysqli_query($con, $qry1);
                              $voted_1++;
                         }
                    }

                    foreach($sen_four as $sen4) {
                         if($sen4 == $row['sen-four']) {
                              $count = $row['number_vote_4'];
                              $count++;
                              echo $count;
                              $qry1 = "UPDATE `tblcandidate` SET `number_vote_4`= '$count' WHERE `sen-four` = '$sen4'";
                              $query_run = mysqli_query($con, $qry1);
                              $voted_1++;
                         }
                    }

                    $count1 = 0;
                    $count1 = $count1 + 1;
                    $_SESSION['count'] = $count1;       
               }

                    $qry = "SELECT * FROM tbl_no_vote WHERE id = '1'";
                    $query_run = mysqli_query($con, $qry);
                    foreach ($query_run as $rows) {
                         $no_vote = $rows['no_vote_1'];
                    }
                         $vote_2 = 4 - $voted_1;
                         $no_vote += $vote_2;
                         $qry1 = "UPDATE `tbl_no_vote` SET `no_vote_1`= '$no_vote' WHERE `id` = '1'";
                         $query_run = mysqli_query($con, $qry1);
                         
                      

               $already_voted = 0;
               $not_yet_voted = 0;
               echo '<script> alert("Submit Form Successful!"); </script>';
               $_SESSION['status']="Submitted";

               $qry = "SELECT * FROM tbl_no_vote WHERE id = '1'";
                    $query_run = mysqli_query($con, $qry);
                    foreach ($query_run as $rows) {
                         $already_voted = $rows['already_voted'];
                         $not_yet_vote = $rows['not_yet_vote'];
                    }
               $already_voted++;
               $not_yet_vote--;
               $qry1 = "UPDATE `tbl_no_vote` SET `already_voted`= '$already_voted' WHERE `id` = '1'";
               $query_run = mysqli_query($con, $qry1);

               $qry1 = "UPDATE `tbl_no_vote` SET `not_yet_vote`= '$not_yet_vote' WHERE `id` = '1'";
               $query_run = mysqli_query($con, $qry1);
               
               $student_no = $_SESSION['student_no'];
               $qry1 = "UPDATE `tbl_excel` SET `validation`= '1' WHERE `student_no` = '$student_no'";
               $query_run = mysqli_query($con, $qry1);

               header('Location:receipt.php');
          } else {
               echo '<script> alert("Submit Form Failed!"); </script>';
               header('Location:balota.php');
          }
     
   }

?>  