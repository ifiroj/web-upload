<?php
 
 session_start();
 session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">  
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    
    <style>
        .top{
            margin-top: 3em;
            text-align: center;
        }
        
        h1{
            text-align: center;
            margin-top: 5em;
            font-family: 'Playball', cursive;
        }
        
        body{
            background-image: url(image/volvo2.jpg);
            background-size: cover;
            height: 100vh;
            color: white;
            
        }
    </style>
    
</head>
<body>
            
    <div class="container-fluid">
        <h1>DELUX BUS TRAVELLING</h1>
           <div class="row top">
               <div class="col-md-12">
                 <h4>Choose an option for entry :</h4><br>
                  <form action="php/login.php" method="post">
                       <a href="guest/menu.php" class="btn btn-primary">Guest</a>
                       <a href="staff/login.php" class="btn btn-primary">Staff</a>
                  </form>
                   
               </div>
           </div>
            
    </div>
  
<!--    javascript-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  
    
</body>
</html>