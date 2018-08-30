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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <style>
        .one{
            margin-top: 3em;
        }
        h1{
            margin-top: 1em;;
        }
/*
        body{
            background-color: black;
            color: white;
        }
*/
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
                        <a class="nav-link" href="booked_new.php">Booked</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="../index.php">Logout</a>
                      </li>
                    </ul>
                  </div>
        </nav>
   
    <div class="container-fluid">
        
      <div class="row">
           <div class="col-md-12">
               <h1 align="center">Booking page </h1><br>
           </div>
       </div>
       <hr>
       <form action="../php/book.php" method="post" enctype="multipart/form-data">
              
            <div class="form-row one">
                <div class="col-md-4">
                  <label for="">Date&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  <input name="txtDate" type="date">
                </div>
                
                <div class="col-md-4 ">
                  <label for="">Ticket</label>
                  <input name="txtTicket" type="number" placeholder="Ticket number" required>
                </div>
                
                <div class="col-md-3">
                  <label for="">Name</label>
                  <input name="txtCustomer" type="text" placeholder="Customer name" required>
                </div>
                
            </div><br><br>
              
            <div class="form-row ">
                <div class="col-md-4 ">
                  <label for="">Phone&nbsp;</label>
                  <input name="txtPhone" type="number" placeholder="Contact Number" required>
                </div>
                
                <div class="col-md-4">
                  <label for="">From</label>
                  <input name="txtInitial" type="text" placeholder="From" required>
                </div>
                
                <div class="col-md-3">
                  <label for="">To</label>
                  <input name="txtFinal" type="text"  placeholder="To" required>
                </div>
            </div><br><br>
              
            <div class="form-row">
                <div class="col-md-4 ">
                  <label for="">Seat&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  <input name="txtSeat" type="text" placeholder="Seat Number" required>
                </div>
                
                <div class="col-md-4">
                  <label for="">Bus</label>
                  <input name="txtBus" type="text" placeholder="Bus Number" required>
                </div>
                
                <div class="col-md-3">
                  <label for="">Rate</label>
                  <input name="txtAmount" id="txtAmount" type="number" required>
                </div>
              </div>
             
             <div class="form-row">
                <div class="col-md-4 ">
                     <br><br>
                  <label for="">Dicount&nbsp;</label>
                  <input name="txtDiscount" id="txtDiscount" type="number">
                </div>
                
                
                <div class="col-md-4">
                 <br><br>
                  <label for="">Amount</label>
                  <input name="txtPay" id="result" type="text">
                </div>
                 
                <div class="col-md-4">
                     <br><br>   
                    <button name="btnConform" class="btn btn-primary" type="submit">Confirm</button>        
                </div>
                  
              </div>
             
              
            
        </form>   

    </div>
    
    
<!--    javascript-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script> 
    
    $(document).on("change keyup blur", "#txtDiscount", function() {
        var main = $('#txtAmount').val();
        var disc = $('#txtDiscount').val();
        var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
        var mult = main*dec; // gives the value for subtract from main value
        var discont = main-mult;
        $('#result').val(discont);
    });
    
    
    
    
</script>   

</body>
</html>