<?php
        if(isset($_POST['btnReg'])){
            $email = mysql_real_escape_string($conn,$_POST['txtEmail']);
            $pass = mysql_real_escape_string($conn,$_POST['txtPassword']);
            $type = $_POST['txtAccountType'];
            
            //connect to database
            include "connect.php";
            
            //insert data in table code
            $insert = "INSERT INTO account (Email,Password,AccountType) VALUES ('$email','$pass','$type')";
                 
            //execute insert code 
           if( mysql_query($insert)){
                echo"Account Registered.";
                header('Refresh:0;../index.php');   
           }
            
            else{
               echo "Something Wrong";
           }
            
        }
              
?>