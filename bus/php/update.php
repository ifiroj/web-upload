<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
        if(isset($_POST['btnUpdate'])){
            $pass1 = $_POST['txtNewpass'];
            $pass2 = $_POST['txtConfirmpass'];
            if($pass1 != $pass2){
                echo  "Enter same password.";
                header('Refresh:1;../staff/menu.php');
                exit;
            }
            
            else{
                //connect to database
                include "connect.php";
             
                $insert = "UPDATE staff set password = '$pass2' WHERE username = '$username' "; 
            
                //execute insert code 
                if( mysql_query($insert)){
                    echo"Password Changed.";
                    header('Refresh:1;../staff/login.php');   
                }
            
                else{
                   echo "Something's Wrong";
                }
            }
        }
              
?>