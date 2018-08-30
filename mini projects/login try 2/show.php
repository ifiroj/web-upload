<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>MENU</h1>
    <a href="index.php">Register</a>
    <a href="show.php">Show Record</a>
    <h1>People's information</h1>
    
    <table>
        <tr>
            <th>Fullname</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
        
        <?php
        
            include"connect.php";
            $query = "SELECT * FROM information where username = '$username' and password = '$password' ";
            $result = mysql_query($query);
        
            if(mysql_num_rows($result)==1){
                
            }
        
        while($record = mysql_fetch_assoc($result)){
            $name = $record['Fullname'];
            $address = $record['Address'];
            $phone = $record['Phone'];
            
            echo"<tr>";
            echo"<td>$name</td>";
            echo"<td>$address</td>";
            echo"<td>$phone</td>";
            echo"</tr>";
    
        }
        
        ?>
        
    </table>
</body>
</html>