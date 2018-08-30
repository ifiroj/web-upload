<?php
        if(isset($_POST['btnLogin'])){
            $username = $_POST['txtUsername'];
            $password = $_POST['txtPassword'];
            
            include "../connect.php";
            
            $query = "SELECT * FROM account WHERE Username = '$username' and Password = '$password' ";
            $result = mysql_query($query);
            
            if(mysql_num_rows($result) == 1){
                echo "Please wait while redirect..!";
                
                header('Refresh:3;../home.php');
            }else{
                echo "invalid username or password";
            }
        }
?>