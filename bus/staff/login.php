
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <style>
    .one{
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
        <h1 align="center">Login into your account</h1><br><hr>
           <div class="row one">
               <div class="col-md-5 offset-md-3" >
                   
                   <form action="../php/login.php" method="post" enctype="multipart/form-data">
                          
                          <div class="form-group">
                            <label for="">Username</label>
                            <input name="txtUsername" type="text" class="form-control" placeholder="Enter Username" required>
                          </div>
                          
                          <div class="form-group">
                            <label for="">Password</label>
                            <input name="txtPassword" type="password" class="form-control" placeholder="Enter Password" required>
                          </div>
                          
                     <button name="btnLogin" type="submit" class="btn btn-primary">Login</button>
                     <a href="reg.php" type="submit" class="btn btn-primary">Register</a>
                 </form>

                   
                   
                   
               </div>
           </div>
            
    </div>
  
    
    
<!--    javascript-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  
    
</body>
</html>