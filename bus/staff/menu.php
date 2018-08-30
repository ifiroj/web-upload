<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $fullname = $_SESSION['fullname'];
}else{
    header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        hr{
            border: 1px solid black;
            margin-top: 5em;
        }
        h1{
            margin-top: 1em;
        }
        .one{
            margin-top: 5em;
        }
        
        .two{
            margin-top: 5em;
        }
        
        .three{
            margin-top: 5em;
            
        }
        .data{
            overflow: scroll;
            height: 350px;
        }
        .four{
            margin-top: 5em;
        }
        
        body{
            height: 50em;
        }
    </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="menu.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="booked_new.php">Booked</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                      </li>
                      <li class="nav-item">
                        <label class="nav-link" for=""><?php echo "Welcome $fullname";?></label>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../index.php">Logout</a>
                      </li>
                    </ul>
                  </div>
        </nav>
       
             
    <div class="container-fluid">
        
        <h1 align="center">Welcome to staff's main page</h1><br><hr>

        <div class="row one">
        <div class="col-md-3">
            <h3>Change Password</h3>
        </div>
        
        <div class="col-md-7 offset-1">
              
              
                  <div class="card text-center">
                      <div class="card-header">
                        <h3 class="card-title" align="center">CHANGE PASSWORD</h3>        
                      </div>
                      
                      <div class="card-body">
                    
                            <form class="card-text" method="post" action="../php/update.php" align="center">
                                New Password:<br>
                                <input type="password" name="txtNewpass" required><br><br>
                                Confirm Password:<br>
                                <input type="password" name="txtConfirmpass" required><br><br>
                                <button name="btnUpdate" type="submit" class="btn btn-primary">Confirm</button>
                            </form>
                
                      </div>  
                  </div>
            
        </div>
        </div><br><hr>
           
            <div class="row two">
            <div class="col-md-3">
                <h3>Search Information</h3>
            </div>
            
            <div class="col-md-7 offset-1">
                <div class="card text-center data">
                  
                  <div class="card-header">
                     <h3 align="center">SEARCH</h3>
                  </div>
                      
                  <div class="card-body">
                       
                      <form class="card-text" method="post" action="menu.php" align="center">
                        <h5 class="card-title">Search By Name</h5>
                        <input type="search" name="find"><br>
                        <button type="submit" name="btnSearch" class="btn btn-primary">Search</button>
                      </form>
                    
                    <table class="table data">
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
                            <th>Discount</th>
                            <th>Amount</th>
                        </tr>   
                        
<!--                    used for displaying searched data    -->
                        <?php

                            include "../php/connect.php";
                            $name = $_POST['find'];
                            $query = "SELECT * from booking WHERE customer like '%$name%' ";
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
                                echo"<td>$date</td>";
                                echo"<td>$ticket</td>";
                                echo"<td>$name</td>";
                                echo"<td>$phone</td>";
                                echo"<td>$from</td>";
                                echo"<td>$to</td>";
                                echo"<td>$seat</td>";
                                echo"<td>$bus</td>";
                                echo"<td>$amount</td>";
                                echo"<td>$discount</td>";
                                echo"<td>$pay</td>";
                                echo"</tr>";
                            }
                        ?>
                        
                    </table>
                        
                </div>
                                             
            </div>
                
            </div>
            </div><br><hr>
        
            
            <div class="row three">            
            <div class="col-md-3">
                <h3>Edit Profile</h3>
            </div>
            
            <div class="col-md-7 offset-1">
               
                    
                    <div class="card text-center">
                          
                          <div class="card-header">
                            <h3 align="center">EDIT PROFILE</h3>
                          </div>
                          
                          <div class="card-body">
                           <form class="card-text" method="post" action="../php/update.php" align="center">
                                <h5 class="card-title">Enter your information</h5>
                                
                                <a href="../php/update.php" class="btn btn-primary">Submit</a>
                            </form>
                          </div>
    
                    </div>
            </div>
            </div><br><hr>
        
            <div class="row four">
            <div class="col-md-3">
                <h3>Security</h3>
            </div>
            
            <div class="col-md-7 offset-1">
                
                  
                    <div class="card text-center">
                      
                      <div class="card-header">
                         <h3 align="center">SET SECURITY</h3>
                      </div>
                      
                      <div class="card-body">
                       <form class="card-text" method="post" action="../php/update.php" align="center">
                        <h5 class="card-title">Secure your account</h5>
                        Pet name :
                                <input type="text" name="txtNewpass" required><br><br>
                                Favorite job :
                                <input type="text" name="txtConfirmpass" required><br><br>
                        <a href="../php/update.php" class="btn btn-primary">Submit</a>
                        </form>
                      </div>
                      
                       
                    </div>
            
            </div>        
            </div>
        
    </div>
<!--    javascript-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>