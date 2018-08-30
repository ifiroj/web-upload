<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Note Portal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
       
        <div class="row">
           <div class="col-md-5 offset-md-3">
               <h1>Welcome to Notes Portal</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet optio, eligendi consequatur eaque quos aperiam</p>
           </div>
       </div>
       
       <div class="row">
           
            <div class="col-md-5 offset-md-3">
               <form method="post" action="php/login-script.php">
              
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="txtEmail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="txtPassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                 <div class="form-group">
                     <label for="">Account Type</label>
                     <select class="form-control" name="txtAccountType" id="">
                         <option value="Student">I am a Student</option>
                         <option value="Teacher">I am a Teacher</option>
                     </select>
                 </div>

                <button name="btnReg" type="submit" class="btn btn-primary">Register</button>
                <button name="btnLogin" type="submit" class="btn btn-primary">Login</button>
            
                </form>
            </div>
       </div>
        
    </div>
</body>
</html>