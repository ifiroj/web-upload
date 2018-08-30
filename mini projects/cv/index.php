<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>
    
    <h1>Enter the following: </h1>
    
    <form action="hello.php" method="post">
        <label for="name">Name : </label>
        <input type="text" name="txtName"><br>
        
        <label for="date">Date Of Birth : </label>
        <input type="date" name="txtDate"><br>
        
        <label for="Fname">Father's Name : </label>
        <input type="text" name="txtFname"><br>
        
        <label for="Mname">Mother's Name : </label>
        <input type="text" name="txtMname"><br>
        
        <label for="Gender">Gender : </label>
        <input type="radio" id="customRadio1" name="txtGender" class="custom-control-input" value="Male">
        <label class="custom-control-label" for="customRadio1">Male</label>
        <input type="radio" id="customRadio1" name="txtGender" class="custom-control-input" value="Female">
        <label class="custom-control-label" for="customRadio1">Female</label><br>
        
        <label for="Gender">Marital Status : </label>
        <input type="radio" id="customRadio1" name="txtStatus" class="custom-control-input" value="Single">
        <label class="custom-control-label" for="customRadio1">Single</label>
        <input type="radio" id="customRadio1" name="txtStatus" class="custom-control-input" value="Married">
        <label class="custom-control-label" for="customRadio1">Married</label><br>
        
        <label for="Religion">Religion : </label>
        <input type="text" name="txtReligion"><br>
        
        <label for="Address">Address : </label>
        <input type="text" name="txtAddress"><br>
        
        <label for="Phone">Mobile Number :</label>
        <input type="tel" name="txtPhone"><br>
        
        <label for="Email">Email : </label>
        <input type="mail" name="txtMail"><br>
        
        <input type="submit" name="btnSubmit" value="Submit">
    </form>
    
</body>
</html>