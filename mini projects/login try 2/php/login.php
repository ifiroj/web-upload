<?php
    if(isset($_POST['btnLogin'])){
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        
        include"../connect.php";
        
        $query = "SELECT * FROM acoount where username ='$username' and password='$password' ";
        $result =mysql_query($query);
        
        if(mysql_num_rows($result)==1){
            echo"Please wait while redirecting .. ";
            
            header('Refresh:3;..home.php');
        }
        
        else{
            echo"Invalid username and password.";    
        }
    }
?>