<?php
    if(isset($_POST['btnTeacher'])){
        
        echo "Please wait while redirecting";
        header('Refresh:2;teacher.php');
        
    }
    
    elseif(isset($_POST['btnStudent'])){

        echo "Please wait while redirecting";
        header('Refresh:2;student.php');
    }
?>