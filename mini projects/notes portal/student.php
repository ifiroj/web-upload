<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>View Notes</title>
</head>
<body>
    <h3>WELCOME STUDENTS</h3>
    <table>
        
    </table>
    
    <script src="js/jquery-3.3.1.min.js"></script>;
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
   

   <?php
    include "php/connect.php";
    $querry = "SELECT * FROM upload ";
    $result = mysql_query($querry);

    while($record = mysql_fetch_assoc($result)){
        $name = $record['Name'];
        $subject = $record['Subject'];
        
        
    }
?>