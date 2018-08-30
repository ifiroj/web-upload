<?php 
    if(isset($_POST['btnlogin'])){
            $name = $_POST['txtUsername'];
            $pass = $_POST['txtPassword'];
        
            $username = md5($name);
            $password = md5($pass);
        
            $db = mysql_connect("localhost","root","") or die("cannot load".mysql_error());

            mysql_select_db("project",$db);

            $query = "SELECT * FROM register where Username = '$username' and Password = '$password'";

            $result = mysql_query($query);

                if(mysql_num_rows($result) == 1){
                    echo "login success";
                    header('Refresh:2;../mainpage.php');
                }else{
                    echo "invalid user name and password";
                    header('Refresh:2;../index.php');  
               }
    }else{
        echo "you have to login first";
        header('Refresh:2;../index.php');
    }
?>