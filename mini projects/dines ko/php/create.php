<?php 
    if(isset($_POST['btnCreate'])){
        $fullname = $_POST['txtFullname'];
        $address = $_POST['txtAddress'];
        $phone = $_POST['txtPhone'];
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        $retypepassword = $_POST['txtRetypePassword'];
        
        if($password == $retypepassword){
            
        $user = md5($username);
        $pass = md5($password);
        
        //connect the database
        $db = mysql_connect("localhost","root","") or die("cannot connect".mysql_error());
        
        //select the database
        mysql_select_db("project",$db);
        
        //insert the data
        $insert = "INSERT INTO register (Fullname, Address, Phone, Username, Password) VALUES ('$fullname', '$address', '$phone', '$user', '$pass')";
        
        mysql_query($insert);
        
        echo "successful.........!";
        header("Refresh:4;../mainpage.php");
        }else{
            echo "retype password";
            header("Refresh:2;../create.php");
        }
    }else{
        echo "you have to login first";
        echo header("Refresh:2;../index.php");
    }
?>