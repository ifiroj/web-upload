<?php
    if(isset($_POST['btnLogin'])){
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        
        $db = mysql_connect("localhost","root","123") or die(mysql_error());
        mysql_select_db("telephone",$db);
        
        $query = "SELECT * FROM account where username='$username' and password ='$password'";
        $result = mysql_query($query);
        if(mysql_num_rows($result)==1){
            echo "Login Success";
        }else{
            echo "Invalid Username or password";
        }
    }
?>