<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Our Record</h1>
    <form action="update.php" method="post">
        <table border=1>
            <tr>
                <th>Serial</th>
                <th>Fullname</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Mobile</th>
            </tr>
            
            <?php
                
                include "connect.php";
                if(isset($_GET['page'])){
                $page = $_GET['page'];
                    if($page =="" || $page=="0"){
                        $page1 = "1";
                    }

                    else{
                        $page1 = ($page * 5)-5;
                    }

                }

                else{
                    $page1=1;
                }

    //            yesma 5 ota limit laako xa which will show 5 items at a time
                $query = "SELECT * FROM information limit $page1,5";
                $result = mysql_query($query);

    //            multiple update
                while($record = mysql_fetch_array($result)){
                    $serial = $record['SNo'];
                    $fullname = $record['Fullname'];
                    $address = $record['Address'];
                    $phone = $record['Phone'];
                    $mobile = $record['Mobile'];
            ?>
                    
                <tr>
                    <td>
                        <input type="text" name="Serial[]" value="<?php echo $serial; ?>">
                    </td>
                    
                    <td>
                        <input type="text" name="Fullname[<?php echo $serial;?>]" value="<?php echo $fullname; ?>">
                    </td>
                    
                    <td>
                        <input type="text" name="Address[<?php echo $serial;?>]" value="<?php echo $address; ?>">
                    </td>
                    
                    <td>
                        <input type="text" name="Phone[<?php echo $serial;?>]" value="<?php echo $phone; ?>">
                    </td>
                    
                    <td>
                        <input type="text" name="Mobile[<?php echo $serial;?>]" value="<?php echo $mobile; ?>">
                    </td>
                 
                 </tr>
                
                    <?php
                }
            ?>
        </table>
        <input type="submit" name="btnUpdate" value="Update">
    
    </form>

   <!--    pagination-->
   
     <?php
        $query = "SELECT * FROM information";
        $result = mysql_query($query);
        $count = mysql_num_rows($result);
        echo "<br><br>";
        $count = ceil($count / 5);
        for($i=1;$i<=$count;$i++){
            echo "<a href='index.php?page=$i'>$i</a> ";
        }
    ?>
    
</body>
</html>