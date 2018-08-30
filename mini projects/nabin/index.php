<?php 
    
    session_start();
    session_destroy();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Portal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
	
        .container{
            background
            width: 60%;
            height: 300px;
            background-color: darkgray;
            border: 2px solid #ccc;
           
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <form method="post" action="login.php">
                   
                    

                    <div class="form-group row">
                        <div class="form-group row">
                         <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" name="txtEmail" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                                                           
                      <input type="password" class="form-control form-control-lg" name="txtPassword" placeholder="Password" required>

                        </div>
                    </div>
                    
                    
                    
                    <label for="">Account type
                    
                    <select name="txtPerson" id="">
                         <option value="Student">I am a Student</option>
                        <option value="Teacher">I am a Teacher</option>
                    </select>
                    </label> <br><br>

                     <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>


                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
