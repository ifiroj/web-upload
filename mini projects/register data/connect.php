<?php
        
        //connect with Mysql Server
        $db = mysql_connect("localhost","root","") or die("Oops couldn't connect to server".mysql_error);
        
        //Select Database
        mysql_select_db("telephone", $db);
        
?>