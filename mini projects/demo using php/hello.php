<?php
    if(isset($_POST['btnSubmit'])){
        $name = $_POST['txtName'];
        echo"<h3>Hello $name, Chai peelo</h3>";
    }

    else{
        echo"batho nahuna vetlass ni dui laat";
    }
?>