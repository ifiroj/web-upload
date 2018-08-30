<?php
        if(isset($_POST['btnConform'])){
            
            $date = $_POST['txtDate'];
            $ticket = $_POST['txtTicket'];
            $name = $_POST['txtCustomer'];
            $phone = $_POST['txtPhone'];
            $from = $_POST['txtInitial'];
            $to = $_POST['txtFinal'];
            $seat = $_POST['txtSeat'];
            $bus = $_POST['txtBus'];
            $amount = $_POST['txtAmount'];
            $discount = $_POST['txtDiscount'];
            $pay = $_POST['txtPay'];
            
            //connect to database
            include "connect.php";
            
            //insert data in table code
            $insert = "INSERT INTO booking (date,ticket,customer,phone,initial,final,seat,bus,amount,discount,total) VALUES ('$date','$ticket','$name','$phone','$from','$to','$seat','$bus','$amount','$discount','$pay')";
                 
            //execute insert code 
            if( mysql_query($insert)){
                echo"Ticket Booked.";
                header('Refresh:1;../staff/menu.php');   
            }
            
            else{
               echo "Something's Wrong";
            }
            
        }
              
?>