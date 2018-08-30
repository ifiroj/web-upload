<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <div class="row">
       <div class="col-md-5">
           <h1>Upload Notes</h1>
       </div>
   </div>
    <div class="row">
        <div class="col-md-5 offset-md-3">
            <form>
                  <div class="form-group">
                    <label for="">Name</label>
                    <input name="txtName" type="text" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="">Subject</label>
                    <input name="txtSubject" type="text" class="form-control">
                  </div>
                   <div class="form-group">
<!--                    <label for="">Select File</label>-->
                    <input type="file" name="myFile" value="Select file">
                  </div>
                 <button name="btnUpload" type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>