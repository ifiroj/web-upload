<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <title>Upload | Index</title>

</head>

<body>
    
    <form action="php/upload.php" method="post" enctype="multipart/form-data">
    
        <label for="">Name : </label>    
        <input type="text" name="txtName" placeholder="Full Name " required><br>

        <label for="">Address : </label>
        <input type="text" name="txtAddress" placeholder="Address" required> <br>
        
	    <h3>Please select file to upload : </h3>
	    <input type="file" name="myFile"><br>
<!--        <input class="btn btn-primary" type="submit" name="btnSubmit" value="Upload">	-->
        <button name="btnSubmit" type="submit" class="btn btn-primary">Upload</button><br>
<!--        <button name="btnShow" type="submit" class="btn btn-primary">Show</button>-->
    </form>

 <!--    javascript-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>