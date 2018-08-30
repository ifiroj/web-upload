<?php
    if(isset($_POST['btnUpdate'])){
        $serial = $_POST['Serial'];
            
            foreach($serial as $s){
               $fullname = $_POST['Fullname'][$s];
               $address = $_POST['Address'][$s];
                $phone = $_POST['Phone'][$s];
                $mobile = $_POST['Mobile'][$s];
                
                include "connect.php";
                $update = "Update information set Fullname='$fullname',Address='$address',Phone='$phone',Mobile='$mobile' Where SNo='$s' Limit 1";
                mysql_query($update) or die(mysql_error());
            }
        
            echo "Record Updated";
        header('Refresh:2;index.php');
    }
?>