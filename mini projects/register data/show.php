<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <style>
        table{
            text-align: center;
            width: 50%;
        }
        
        td{
            border: 1px solid #ccc;    
        }
        
        tr:nth-child(odd){
            background-color: lightgray;
            color: black;
        }
        
    </style>
    
</head>
<body>
   
   <h1>Menu</h1>
   
   <a href="index.php">Register</a>
   <a href="show.php">Show Record</a>
   <br><br>
    <table>
    <tr>
        <th>Fullname</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Mobile</th>
    </tr>   
    
    <?php
        
        include "connect.php";
        $query = "SELECT * from information";
        $result = mysql_query($query);
    
        while($record = mysql_fetch_assoc($result)){
            $name = $record['Fullname'];
            $address = $record['Address'];
            $phone = $record['Phone'];
            $mobile = $record['Mobile'];
            
            echo "<tr>";
            echo"<td>$name</td>";
            echo"<td>$address</td>";
            echo"<td>$phone</td>";
            echo"<td>$mobile</td>";
            echo"</tr>";
        }
    ?>
    </table>
    
</body>
</html>