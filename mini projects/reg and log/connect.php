<?php
        //Connect to MySQL server
        $db = mysql_connect("localhost","root","") or die("Sorry could not connect".mysql_error());
        
        //Select Database
        mysql_select_db("register",$db);
?>