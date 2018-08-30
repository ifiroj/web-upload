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
            padding: 100px 0px 0px 500px;
            background-color: beige;
            height: 100vh;
            width: 100%;
        }
    </style>
</head>
<body>
     
    <form action="php/information.php" method="post">
       
        <label for="Name">Name</label>
        <input type="text" name="txtFullName" placeholder="Name"><br><br>
        <label for="Address">Address</label>
        <input type="text" name="txtAddress" placeholder="Address"><br><br>
        <label for="Age">Age</label>
        <input type="text" name="txtAge" placeholder="Age"><br><br>
        <label for="Phone">Phone</label>
        <input type="text" name="txtPhone" placeholder="Phone"><br><br>
        
         <input type="submit" name="btnRecord" value="Record Entry">
      
    </form>
     
</body>
</html>