<?php 
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    echo "Hello:".$_SESSION ["username"];

}else{
    header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table{
                border: 3px solid green;
                  background-color: bisque;
                margin-left: 30px;
        }
        tr{
           color: red;
            border-radius: 20px;
        }
        td{
            color: grey;
        }
        h3{
            color: grey;
            font-size: 25px;
            margin-left: 30px;
            margin-top: 30px;
            text-decoration: underline;
           
        }
        tr:nth-child(even){
            background-color: darkgray;
        }
      
       
    </style>
</head>

<body>
  
   
    <div class="row" >
   
          
    <table width="600" border="2"  cellpadding="2" spacepadding="2"> 
     <h3 >Student Note Are Available Here::</h3> 
      <tr>   
            <th>Fullname</th>
            <th>Subject</th>
            <th>Document</th>
        </tr> 
        <br>

  <?php
        
      

    include "connect.php";
    $query="SELECT * FROM teacher";
     $result=mysql_query($query);
    while($record=mysql_fetch_assoc($result)){
      
        $name=$record['Fullname'];
    $subject=$record['Subject'];
    $document=$record['Document'];
       
        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$subject</td>";
        echo "<td>$document</td>";
        echo "</tr>";
         

   
    }

         ?>
                  </table> 
                  <a href="index.php">logOut</a>
    </div>


 </body>
</html>
