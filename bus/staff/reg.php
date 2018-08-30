<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    
    <style> 
        .top{
            margin-top: 3em;
        }
        h1{
            margin-top: 1em;
        }
/*
        body{
            background-color: black;
            color: white;
        }
*/
    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="menu.php">Home </a>
                      </li>
                      
            
                    </ul>
                  </div>
        </nav>
    
    <div class="container-fluid">
            <h1 align="center">Insert the following information :</h1><br><hr>
           <div class="row top">
               <div class="col-md-8 offset-4">
                   
                   <form action="../php/reg.php" method="post" enctype="multipart/form-data">
                       
                       <div class="form-group">
                            <label for="">Username</label>
                            <input name="txtUsername" type="text" placeholder="username" required>
                       </div><br>
                       
                       <div class="form-group">
                            <label for="">Full name</label>
                            <input name="txtFullname" type="text" placeholder="fullname" required>
                       </div><br>
                       
                       <div class="form-group">
                            <label for="">Phone</label>
                            <input name="txtPhone" type="number" required>
                       </div><br>
                       
                       <div class="form-group">
                            <label for="">Address</label>
                            <input name="txtAddress" type="text">
                       </div><br>
                       
                       <div class="form-group">
                            <label for="">Password</label>
                            <input name="txtPassword" type="password" placeholder="Enter password" required>
                       </div><br>
                          
                       <button name="btnReg" type="submit" class="btn btn-primary">Register</button>
                       
                   </form>
                   
                   
               </div>
           </div>
            
    </div>
  
    
    
<!--    javascript-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  
    
</body>
</html>