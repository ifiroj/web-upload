<?php
        if(isset($_POST['btnLogin'])){
            $fullname = $_POST['txtFullname'];
            $address = $_POST['txtAddress'];
            $phone = $_POST['txtPhone'];
            $mobile = $_POST['txtMobile'];
            
            include "connect.php";
            
            //insert data in table code
            $insert = "INSERT INTO information (Fullname, Address, Phone, Mobile) VALUES ('$fullname','$address','$phone','$mobile')";
            
            //execute insert code 
            mysql_query($insert);
            
            echo"Record Saved";
            header('Refresh:2; index.php');
        }

?>