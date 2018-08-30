
   

   <?php
session_start();
    if(isset($_POST['btnSubmit'])){
        
      $email=$_POST['txtEmail'];
        $password=$_POST['txtPassword'];
//        $password=md5($password);
        $people=$_POST['txtPerson'];
        
        
        
       include"connect.php";
        $query="SELECT * FROM account WHERE Email='$email' and Password='$password' and People='$people'";
        
        
        $result=mysql_query($query);
        
        if(mysql_num_rows($result)==1){
            echo "login success";
           
            
            if($people=="Student"){
                $_SESSION['username']=$email;
               
               header('Refresh:2;student.php'); 
                
                
                
            }else{ 
                 $_SESSION["username"]=$email;
                
                header('Refresh:2;teacher.php');
            }
            
              
        }else{
            echo "invalid Fullname or Password";
                header('Refresh:3;index.php');
            }
            
      
        
    }else 
        "Invalid format............";


?>
