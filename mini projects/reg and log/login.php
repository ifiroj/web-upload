<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Friday</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-md-4">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="login.php">Login</a>
              </li>
            </ul>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 offset-md-3">
           <form method="post" action="check.php">
          <div class="form-group">
            <label for="formGroupExampleInput2">Username</label>
            <input name="txtLogUN" type="text" class="form-control" id="formGroupExampleInput2">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input name="txtLogPW" type="text" class="form-control" id="formGroupExampleInput2">
          </div>
          
           <button type="submit" name="btnLogin">Login</button>
          </form>            
        </div>
    </div>
<!--Code for JavaScript-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>