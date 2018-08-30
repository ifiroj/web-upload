<?php

    if(isset($_POST['btnUpload'])){
        $Tname = $_POST['txtName'];
        $subject = $_POST['txtSubject'];
        
        $name = $_FILES['myFile']['name'];
        $size = $_FILES['myFile']['size'];
        $temp = $_FILES['myFile']['tmp_name']
        $type = $_FILES['myFile']['type'];
        $error = $_FILES['myFile']['error'];
        
        if($error==0){
            if($type=="doc/pdf"){
                //Upload Notes
                $db = mysql_connect("localhost","root","") or die(mysql_error());
                mysql_select_db("registration",$db);
                
                $insert = "INSERT INTO upload (Name,Subject,Note) VALUES ('$Tname','$subject','$text'";
                mysql_query($insert);
                move_uploaded_file($temp,"Notes/".$text);
                echo "Notes Uploaded";
            }else{
                echo "Invalid Input Format";
            }
        }
    }else{
        echo "Sorry something went wrong";
    }

?>