<?php
    if(isset($_POST['btnRegister'])){
        //Variable Declaration
        $name = $_POST['txtName'];
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        
        include "connect.php";
        
        //Insert Data in the Table
        $insert = "INSERT INTO information (Name,Username,Password) VALUES ('$name','$username','$password')";
        
        //Execute Insert Code
        mysql_query($insert);
        
        echo "Record Saved";
        header('Refresh:2;index.php');
    }
?>