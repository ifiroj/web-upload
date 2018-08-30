<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
   <h1>Menu</h1>
    <a href="index.php">Register</a>
    <a href="show.php">Show Record</a>
    <a href="login.php">Login</a><br><br>
    
    <form action="register.php" method="post">
        
        <label for="Fullname">Fullname</label>
        <input type="text" name="txtFullname" placeholder="Enter name"><br>
        
        <label for="Address">Address</label>
        <input type="text" name="txtAddress" placeholder="Enter address"><br>
        
        <label for="Phone">Phone</label>
        <input type="tel" name="txtPhone" ><br>
        
        <label for="Mobile">Mobile</label>
        <input type="tel" name="txtMobile" ><br>
        
        <input type="submit" name="btnSave" value="Save"><br>
        
        
    </form>
</body>
</html>