<?php
    $connect = mysqli_connect("localhost","root","");
    if(isset($_POST["btn_add"])){
        $insertSql = "CALL insertCountry('".$_POST["country_name"]."')";
        if(mysqli_query($connect, $insertSql)){
            header("location:INDEX.php?inserted=1");
        }
    }
if(isset($_POST["btn_edit"])){
    $updateSql = "CALL updateCountry('".$_POST["country_id"]."', '".$_POST["country_name"]."')";
    if(mysqli_query($connect, $updateSql)){
     header("location:INDEx.php?updated=1");   
    }
    
}
?>

<!--
selectCountry = db
tbl_country = table
	country_id int(11) auto
	country_name varchar(250)
SELECT * FROM tbl_country ORDER BY country_id;
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DEMO</title>
    <script src="jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;   
        }   
        .box{
            width: 500px;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container box">
       <?php
            if(isset($_GET["edit"])){
                    $singlesql = "CALL singleCountry('".$_GET["country_id"]."')";
                    $singleResult = mysqli_query($connect, $singleSql);
                
                if(mysqli_num_rows($singleResult)>0){
                    while($singleRow = mysqli_fetch_array($singleResult)){
                        
                    
                    
                
                ?>
                 <form method="post" name="edit_country">
            <h3 align="center">
                Edit country
            </h3>
            <div class="form-group">
                <label>
                    Enter country name
                </label>
                <input type="text" name="country_name" class="form-cotrol" value="<?php echo $singleRow["country_name"]; ?>">
            </div>
            <div class="form-group" align="center">
               <input type="hidden" name="country_id" value="<?php echo $singleRow["country_id"];?>"/>
                <input type="submit" name="btn_edit" value="Edit" class="btn btn-info"/>
            </div>
        </form>
                <?php
                    }
                    mysqli_next_result($connect);
                }
            }
            
            else{
                
            
            
        ?>
       
        <?php
        }
        
        ?>
        <br><br>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>country name</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                
                <?php
                    $selectSql = "CALL selectCountry()";
//                selectCountry = database
                    $selectResult = mysqli_query($connect, $selectSql);
                if(mysqli_num_rows($selectResult)> 0){
                    
                    while($row = mysqli_fetch_array($selectResult)){
                        ?>
                        <tr>
                            <td><?php echo $row["country_name"]; ?></td>
                            <td>
                                <a href="INDEX.php?edit=1&country_id<?php echo $row["country_id"]; ?>">Edit</a>
                            </td>
                            <td>
                                <a href="" class="btn_delete" id="<?php echo $row["country_id"]; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                        mysqli_next_result($connect);
                    }
                }
                
                else{
                ?>
                    <tr>
                        <td colspan="3">
                            No Data
                        </td>
                    </tr>
                
                <?php
                    
                
                    
                }
                
                ?>
                
            </table>
        </div>
    </div>
    
</body>
</html>