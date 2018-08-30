<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <h1>Menu</h1>
   <a href="index.php">Register</a>
   <a href="show.php">Show Record</a>
   <br>
   <br>
    <form action="save.php" method="post">
        
        <label for="Fullname">Fullname</label>
        <input type="text" name="txtFullname" placeholder="Enter name"><br>
        
        <label for="Address">Address</label>
        <input type="text" name="txtAddress" placeholder="Enter address"><br>
        
        <label for="Phone">Phone</label>
        <input type="tel" name="txtPhone" placeholder="Enter Phone number"><br>

        <label for="Mobile">Mobile</label>
        <input type="tel" name="txtMobile" placeholder="Enter Mobile number"><br>

        <input type="submit" name="btnSave" value="save"><br>
        
        
        
    </form>
    
    
</body>
</html>