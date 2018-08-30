<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h3>records are</h3>
    
    <table>
        <tr>
            <th>Fullname</th>
            <th>Address</th>
            <th>Age</th>
            <th>Number</th>
        </tr>
        
        <?php 
        
        $db = mysql_connect("localhost","root","");

        mysql_select_db("project",$db);
        
        $result = mysql_query("SELECT * FROM information");
        
        while($record = mysql_fetch_assoc($result)){
            $name = $record['FullName'];
            $address = $record['Address'];
            $age = $record["Age"];
            $number = $record['Number'];
            
            echo "<tr>";
            echo "<td>$name</td>";
             echo "<td>$address</td>";
             echo "<td>$age</td>";
             echo "<td>$number</td>";
            echo "</tr>";
            
        }
        ?>
    </table>
    
</body>
</html>