<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Note Portal | Homepage</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
   
     <style>
        
        .top{
            margin-top: 3em;
        }
        
     </style>
    
</head>

<body>
    
    <div class="container-fluid">
       
        <div class="row top">
           <div class="col-md-5 offset-md-3">
               <h1>Welcome to Notes Portal</h1><br>
           </div>
       </div>
       
       <div class="row">
            <div class="col-md-5 offset-md-3">
             
              <form action="php/login.php" method="post">
                  <div class="form-group">
                    <label for="">Email address</label>
                    <input name="txtEmail" type="email" id="exampleInputEmail1" placeholder="Enter email" required>
                  </div>

                  <div class="form-group">
                    <label for="">Password</label>
                    <input name="txtPassword" type="password" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                
                  <div class="form-group">
                     <label for="">Account Type</label>
                     <select class="form-control" name="txtAccountType" id="">
                         <option value="Student">I am a Student</option>
                         <option value="Teacher">I am a Teacher</option>
                     </select>
                  </div>
                     
                     //buttons used for register and login
                     <a href="register.php" class="btn btn-primary">Register</a>
                     <button name="btnLogin" type="submit" class="btn btn-primary">Login</button>
                
                </form>
            
            </div>
       </div>

    </div>
    
    <!--    javascript-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>