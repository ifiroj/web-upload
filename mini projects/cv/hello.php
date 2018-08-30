<?php

    echo"<h1>Curriculum Vitae</h1>";
    if(isset($_POST['btnSubmit'])){
        
        $name = $_POST['txtName'];
        $date = $_POST['txtDate'];
        $Fname = $_POST['txtFname'];
        $Mname = $_POST['txtMname'];
        $Gender = $_POST['txtGender'];
        $Status = $_POST['txtStatus'];
        $Religion = $_POST['txtReligion'];
        $Address = $_POST['txtAddress'];
        $Phone = $_POST['txtPhone'];
        $Email = $_POST['txtMail'];
        
        echo"Name :  $name<br>";  
        echo"Date Of Birth :  $date<br>";
        echo"Father's Name :  $Fname<br>";
        echo"Mother's Name :  $Mname<br>";
        echo"Gender : $Gender<br>";
        echo"Marital Status :  $Status<br>";
        echo"Religion : $Religion<br>";
        echo"Address : $Address<br>";
        echo"Contact Number : $Phone<br>";
        echo"Email : $Email<br>";
    }

    else{
        echo"Access Denied.";
        header('Refresh:2;index.php');
    }
?>

