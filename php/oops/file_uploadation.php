<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="#e49e41" align="center">
  <h1>File Upload</h1>
<form action="" Method="post" enctype="multipart/form-data">
  <input type="file" name="file_Upload" id="file_Upload">
  <br>
  <input style="border-radius:20%;" type="submit" value="Upload file" name="submit">
</form>
</body>
</html>

<?php
echo "<h1>Result</h1>";
if(isset($_FILES['file_Upload'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name= $_FILES['file_Upload']['name'];
    $file_size= $_FILES['file_Upload']['size'];
    $file_tmp= $_FILES['file_Upload']['tmp_name'];
    $file_type= $_FILES['file_Upload']['type'];
    move_uploaded_file($file_tmp,"oops".$file_name);
  }    
?>