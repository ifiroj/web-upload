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
            background-color: lavender;
            padding: 100px 0px 0px 500px;
        }
    </style>
</head>
<body>
    
    <form action="php/login.php" method="post">
    
    <label for="Username">Username</label>
    <input type="Username" name="txtUsername" placeholder="Username"><br><br>
    <label for="Password">Password</label>
    <input type="Username" name="txtPassword" placeholder="Password"><br><br>
    
    <input type="submit" name="btnlogin" value="login">
    </form>
</body>
</html>