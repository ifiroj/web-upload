<?php
    if(isset($_POST['btnSubmit'])){
        $fullname = $_POST['txtName'];
        $address = $_POST['txtAddress'];
        
        $name = $_FILES['myFile']['name'];
        $size = $_FILES['myFile']['size'];
        $temp = $_FILES['myFile']['tmp_name'];
        $type = $_FILES['myFile']['type'];
        $error = $_FILES['myFile']['error'];
        
        if($error==0){
            if($type=="image/jpeg"){
                //upload image
                $db = mysql_connect("localhost","root","") or die(mysql_error());
                mysql_select_db("telephone",$db);
                
                $insert = "INSERT INTO record (Fullname,Address,Photo) VALUES ('$fullname','$address','$name')";
                mysql_query($insert);
                move_uploaded_file($temp,"../photo/".$name);
                echo "Record Saved";
            }else{
                echo "invalid format";
            }
        }
	else{
            echo "Oops something wrong";
        }
?>