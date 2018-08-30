<?php 

if(isset($_POST['btnRecord'])){
    $name = $_POST['txtFullName'];
    $address = $_POST['txtAddress'];
    $age = $_POST['txtAge'];
    $phone = $_POST['txtPhone'];
    
    //connect width database
    
     $db = mysql_connect("localhost","root","") or die("cannot connect".mysql_error());
    
    //select the database
    
    mysql_select_db("project",$db);

    //query
    
    $insert = "INSERT INTO information (FullName, Address, Age, Number) VALUES ('$name','$address','$age','$phone')";
    
    //entry the data into the mysql
    mysql_query($insert);
    
    echo "successfully data is recorded";
    header('Refresh:1;../create.php');  
}

?>