<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="php/upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="txtName" placeholder="Enter your Name"> <br>
        <input type="input" name="txtAddress" placeholder="Enter your Address"> <br>
        Please select file <br>
        <input type="file" name="myFile"> <br>
        <input type="submit" name="btnSubmit" value="Register">
    </form>
</body>
</html>