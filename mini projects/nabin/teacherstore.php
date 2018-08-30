<?php 

    if(isset($_POST['btnSaved'])){
        
        $names=$_POST['txtFullname'];
        $subject=$_POST['txtSubject'];
        $document=$_FILES['txtDocument']['name'];
        $name=$_FILES['txtDocument']['name'];
        $temp=$_FILES['txtDocument']['tmp_name'];
        
        
         //connect mysqul server
        $db=mysql_connect("localhost","root","") or die("not collected" .mysql_error());
        
        //select data base
        mysql_select_db("portal",$db);
        
        $query="INSERT INTO teacher(Fullname,Subject,Document) VALUES ('$names','$subject','$document')";
        
        mysql_query($query);
        move_uploaded_file($temp,"photo".$name);
        echo "Files saved!!!!!!!!!!!!!!1";
        header('Refresh:3;teacher.php');

    }else
        echo "Invalid COde";

?>