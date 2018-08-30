<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $db = mysql_connect("localhost","root","123") or die(mysql_error());
        mysql_select_db("telephone",$db);
    
        $query = "SELECT * FROM record";
        $result = mysql_query($query);
        while($record = mysql_fetch_assoc($result)){
            $fullname = $record['Fullname'];
            $photo = $record['Photo'];
            
            echo "Fullname: $fullname <br>";
            echo "<img src='photo/$photo' width='90'>";
            echo "<br><br>";
        }
    ?>
</body>
</html>