<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: tomato;
        }
    </style>
</head>

<body>
    <h1>File uploadation</h1>
    <div class="form">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <input type="text" name="fname" placeholder="FIRST NAME">
    <input type="text" name="lname" placeholder="LAST NAME">
    <input type="number" name="number" placeholder="+91-9727XXXXXX">
    <input type="email" name="email" placeholder="@gmail.com">
    <input type="file" name="file-upload" >
    </div>
    <div class="button">
        <input type="submit" name=Uploadsubmit value="upload file">
        <input type="submit" name=submit value="submit">
    </div>

    </form>
</body>

</html>