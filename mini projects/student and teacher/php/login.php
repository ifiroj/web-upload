<?php
  if(isset($_POST['btnLogin'])){
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPassword'];
        $type = $_POST['txtAccountType'];
        
        include "connect.php";
        
        $query = "SELECT * FROM account WHERE Email='$email'and Password='$pass' and AccountType='$type'";
        $result = mysql_query($query);
    
        if(mysql_num_rows($result) == 1){
            if($type=="Student"){
                header('Refresh:0;../student.php');
            }else{
                   header('Refresh:0;../teacher.php');
            }
        }else{
            echo "Invalid Username or Password";
            header('Refresh:0;../index.php');
        }
    }
    
?>