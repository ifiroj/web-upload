<?php
        if(isset($_POST['btnReg'])){
            
            $username = $_POST['txtUsername'];
            $name = $_POST['txtFullname'];
            $phone = $_POST['txtPhone'];
            $address = $_POST['txtAddress'];
            $pass = $_POST['txtPassword'];
            
            //connect to database
            include "connect.php";
            
            //insert data in table code
            $insert = "INSERT INTO staff (username,fullname,phone,address,password) VALUES ('$username','$name','$phone','$address','$pass')";
                 
            //execute insert code 
            if( mysql_query($insert)){
                echo"Account Registered.";
                header('Refresh:1;../staff/login.php');   
            }
            
            else{
               echo "Something's Wrong";
            }
            
        }
              
?>