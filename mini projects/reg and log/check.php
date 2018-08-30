<?php
    if(isset($_POST['btnLogin'])){
        $username = $_POST['txtLogUN'];
        $password = $_POST['txtLogPW'];
        
        include "connect.php";
        
        $query = "SELECT * FROM information WHERE Username = '$username' and Password = '$password'";
        $result = mysql_query($query);
        
        if(mysql_num_rows($result)==1){
            echo "Please wait while redirecting....";
            header('Refresh:3;sucessful.php');
        }else{
            echo "Invalid Username or Password";
        }
    }
?>