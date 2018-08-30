<?php
session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $fullname = $_SESSION['fullname'];
    }
    
    else{
        header('location:../index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <script src="http://www.code.jquery.com/jquery.min.js"></script>
    <link href="../ymz_box.css" rel="stylesheet">
    <script src="../ymz_box.min.js"></script>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    
    <style>
        h1{
            margin-top: 1em;
        }
        
        .one{
            overflow: scroll;
            height: 400px;
        }
        
    </style>
    
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="menu.php">Home</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="booked.php">Booked Ticket</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="booking.php">Ticket Booking</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="../index.php">Logout</a>
                      </li>
                    </ul>
                  </div>
        </nav>
   
    <div class="container-fluid">
       
    <h1 align="center">List of booked tickets</h1><br>  
       <div class="row one" >
            <form action="booked.php"  method="post">
           
            <div class="col-md-11">
                 <table class="table">
                        <tr>
                           
                            <th>Date</th>
                            <th>Ticket</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Seat</th>
                            <th>Bus</th>
                            <th>Rate</th>
                            <th>Discount %</th>
                            <th>Amount</th>
                            <th>Option</th>
                            
                        </tr>   

                        <?php

                            include "../php/connect.php";
                            $query = "SELECT * from booking";
                            $result = mysql_query($query);

                            while($record = mysql_fetch_array($result)){
                               
                                $date = $record['date'];
                                $ticket = $record['ticket'];
                                $name = $record['customer'];
                                $phone = $record['phone'];
                                $from = $record['initial'];
                                $to = $record['final'];
                                $seat = $record['seat'];
                                $bus = $record['bus'];
                                $amount = $record['amount'];
                                $discount = $record['discount'];
                                $pay = $record['total'];
                                
                                
                                echo "<tr>";
                                echo"<td><input type='text' name='date[$ticket]' value='$date'></td>";  
                                echo"<td><input type='text' name='ticket[]' value='$ticket'></td>";
                                echo"<td><input type='text' name='name[$ticket]' value='$name'></td>";
                                echo"<td><input type='number' name='phone[$ticket]' value='$phone'></td>";
                                echo"<td><input type='text' name='from[$ticket]' value='$from'></td>";
                                echo"<td><input type='text' name='to[$ticket]' value='$to'></td>";
                                echo"<td><input type='text' name='seat[$ticket]' value='$seat'></td>";
                                echo"<td><input type='text' name='bus[$ticket]' value='$bus'></td>";
                                echo"<td><input type='number' name='amount[$ticket]' value='$amount'></td>";
                                echo"<td><input type='number' name='discount[$ticket]' value='$discount'></td>";
                                echo"<td><input type='number' name='pay[$ticket]' value='$pay'></td>";
                               
                                echo"<td><input type='checkbox' name='check[]' value='$ticket'></td>";
                                echo"</tr>";
                            }
                        ?>
                    </table>
                 
                 
            </div>
       
               <div class="option">
                  
                   <?php
                     echo "<button style='margin-left:25px;' name='btnX' type='submit' class='btn btn-primary'>Update</button>"; 
                     
                     echo"<button style='margin-left:245px;' name='btnD' type='submit' class='btn btn-primary'>Delete</button>";
                   ?>
               
               </div>
               </form> 
    </div>
    
    </div>
    
<!--    javascript-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 
<?php
    
    if(isset($_POST['btnX'])){
          
            include "../php/connect.php";
            $ticket = $_POST['ticket'];
            foreach($ticket as $t){
                $name = $_POST['name'][$t];
                $date = $_POST['date'][$t];
                $phone = $_POST['phone'][$t];
                $from = $_POST['from'][$t];
                $to = $_POST['to'][$t];
                $seat = $_POST['seat'][$t];
                $bus = $_POST['bus'][$t];
                $amount = $_POST['amount'][$t];
                $discount = $_POST['discount'][$t];
                $pay = $_POST['pay'][$t];    
                
                $insert = "UPDATE booking set customer = '$name', phone ='$phone' WHERE ticket='$t' limit 1";  
                mysql_query($insert) or die(mysql_error());
            }
            
        ?>
            
            <?php
            echo"Saved Changed.";
            header('Refresh:0;../staff/booked.php');   

    }
  ?>
  
  <?php
    
    if(isset($_POST['btnD'])){
          
            include "../php/connect.php";
            $ticket = $_POST['check']; //this is for checking and deleting one by one
            foreach($ticket as $t ){
               
                $insert = "DELETE FROM booking WHERE ticket='$t' ";  
                mysql_query($insert) or die(mysql_error());
            }
            
        ?>
            
            <?php
            echo"Deleted.";
            header('Refresh:0;../staff/booked.php');   

    }
  ?>
  
</body>
</html>