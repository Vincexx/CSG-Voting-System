<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

$db = mysqli_select_db($con, 'voting');

    if(isset($_POST['submit'])) {
        if($_FILES['file']['name']) {
            $filename = explode('.', $_FILES['file']['name']);
            if($filename[1] == 'csv') {
                $handle = fopen($_FILES['file']['tmp_name'], 'r');
                while($data = fgetcsv($handle)) {
                    $item1 = mysqli_real_escape_string($con, $data[0]);
                    $item2 = mysqli_real_escape_string($con, $data[1]);
                    $item3 = mysqli_real_escape_string($con, $data[2]);
                    $item4 = mysqli_real_escape_string($con, $data[3]);
                    $item5 = mysqli_real_escape_string($con, $data[4]);
                    $item6 = mysqli_real_escape_string($con, $data[5]);
                
                    $qry = "INSERT INTO `tbl_excel`(`student_no`, `name`, `course`, `year`, `section`, `subject`) VALUES ('$item1', '$item2', '$item3', '$item4', '$item5', '$item6')";
                    $query_run = mysqli_query($con,$qry);
                    print $query_run;
                }       
                fclose($handle);
                print "Import Done";

            }
            else {
                print "Data not Found!";
            }

        } 
    }

?>
