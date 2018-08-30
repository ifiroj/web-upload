<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        form{
            height: 100vh;
            width: 100%;
            text-align: center;
            background-color: azure;
            padding-top: 50px;
        }
    </style>
</head>
<body>
     
     <form action="php/create.php" method="post">
     <a href="mainpage.php">Home</a><br><br><br>
     
     <label for="Fullname">Fullname</label>
     <input type="text" name="txtFullname" placeholder="Fullname"><br><br>
     
     <label for="Address">Address</label>
     <input type="text" name="txtAddress" placeholder="Address"><br><br>
     
      <label for="Phone">Phone</label>
     <input type="text" name="txtPhone" placeholder="Phone"><br><br>
     
    <label for="Username">Username</label>
    <input type="txt" name="txtUsername" placeholder="Username"><br><br>
    
    <label for="Password">Password</label>
    <input type="txt" name="txtPassword" placeholder="Password"><br><br>
        
    <label for="RetypePassword">RetypePassword</label>
    <input type="txt" name="txtRetypePassword" placeholder="RetypePassword"><br><br>
    
    <input type="submit" name="btnCreate" value="create">
   
    </form>
    
</body>
</html>