<?php
    
//connect with mysql server

    $db = mysql_connect("localhost","root","") or die("Oops couldn't connect to server.".mysql_error);

//select database

    mysql_select_db("telephone",$db);
?>