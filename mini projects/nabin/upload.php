<?php 
    
	if(isset($_POST['btnSubmit'])){
        $email=$_POST['txtEmail'];
        $password=$_POST['txtPassword'];
        
        
        $name=$_FILES['myFile']['name'];
        $temp=$_FILES['myFile']['tmp_name'];
        $size=$_FILES['myFile']['size'];
        
        include "connect.php";
        $query="INSERT INTO account (Email,Subject,Files,Password,) VALUES ()"
    }

?>