<?php
    
    if(isset($_POST['btnUpdate'])){
          
            include "../php/connect.php";
            $ticket = $_POST['txtTicket'];
            
                $name = $_POST['txtCustomer'];
                $date = $_POST['txtDate'];
                $phone = $_POST['txtPhone'];
                $from = $_POST['txtInitial'];
                $to = $_POST['txtFinal'];
                $seat = $_POST['txtSeat'];
                $bus = $_POST['txtBus'];
                $amount = $_POST['txtAmount'];
                $discount = $_POST['txtDiscount'];
                $pay = $_POST['txtPay'];    
                
                $insert = "UPDATE booking set date='$date', customer='$name',phone='$phone', initial='$from', final='$to', seat='$seat', bus='$bus', amount='$amount',discount='$discount', total='$pay' WHERE ticket='$ticket'";  
                mysql_query($insert) or die(mysql_error());
                
                echo"Saved Changed.";
                header('Refresh:0;../staff/booked_new.php'); 
    }
        ?>
            
          