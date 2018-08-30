<?php
    if(isset($_POST['btnLogin'])){
        $usernaem = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        include "connect.php";
        $query = "SELECT * FROM account where username='$usernaem' and password ='$password'";
        $result = mysql_query($query);
        
        if(mysql_num_rows($result)==1){
            echo "login success";
        }else{
            echo "invalid username or password";
        }
    }
?>