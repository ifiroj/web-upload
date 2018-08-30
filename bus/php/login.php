<?php
        session_start();
  if(isset($_POST['btnLogin'])){
        $username = $_POST['txtUsername'];
        $pass = $_POST['txtPassword'];
        
        include "connect.php";
        
        $query = "SELECT * FROM staff WHERE username='$username'and password='$pass' ";
        $result = mysql_query($query);
    
        if(mysql_num_rows($result) == 1){
            while($record = mysql_fetch_assoc($result)){
                $_SESSION['username'] = $record['username'];
                $_SESSION['fullname'] = $record['fullname'];
            }
            header('Refresh:5;../staff/menu.php');
        }
        
        else{
            echo "Invalid Username or Password";
            header('Refresh:1;../staff/login.php');
        }
    }
    
?>