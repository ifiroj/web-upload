<?php
    if(isset($_POST['btnSave'])){
        $fulname = $_POST['txtFullname'];
        $address = $_POST['txtAddress'];
        $phone = $_POST['txtPhone'];
       $mobile = $_POST['txtMobile'];

        include "connect.php";

        //Insert Data in Table Code
        $insert = "INSERT INTO information (Fullname,Address,Phone,Mobile) VALUES ('$fulname','$address','$phone','$mobile')";
       
        //Execute Insert Code
        mysql_query($insert);

        echo "Record Saved";
        header('Refresh:2;index.php');
    }
?>