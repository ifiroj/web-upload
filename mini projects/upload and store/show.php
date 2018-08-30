<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $db = mysql_connect("localhost","root","") or die(mysql_error());
        mysql_select_db("registration",$db);
    
        $query = "SELECT * FROM record Order by Sno Desc Limit 1";
        $result = mysql_query($query);
        while($record = mysql_fetch_assoc($result)){
            $fullname = $record['Fullname'];
            $photo = $record['Photo'];
            
            echo $photo;
            echo "Fullname: $fullname <br>";
            echo "<img src='photo/$photo' width='420'>";
            echo "<br><br>";
        }
    ?>
</body>
</html>