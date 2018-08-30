<?php 
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    echo "Hello:".$_SESSION ["username"];

}else{
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
        .container{
            width: 50%;
            border: 5px solid grey;
            border-radius: 50px;
        }
    </style>
</head>
<body>
  <div class="container">
   <div class="row">
       <div class="col-md-5 offset-md-3">
           
           <form action="teacherstore.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Fullname</label>
    <input type="text" class="form-control" name="txtFullname" placeholder="Name" required>
    <br>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Subject</label>
       <input type="text" class="form-control" name="txtSubject" placeholder="Subject" required>
    <br>
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Document</label>
     <input type="file" class="form-control" name="txtDocument" placeholder="Enter your file" required>
  
    <br>
  </div>
  <button type="submit" class="btn btn-primary" name="btnSaved">Submit</button>
</form>
       </div>
   </div>
   
   </div>
  <button class=" btn btn-lg">  <a href="index.php">logout</a></button>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>