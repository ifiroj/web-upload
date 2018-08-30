   <?php
        
	//connect mysqul server
        $db=mysql_connect("localhost","root","") or die("not collected" .mysql_error());
        
        //select data base
        mysql_select_db("portal",$db);


        ?>        