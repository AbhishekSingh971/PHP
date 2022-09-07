<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>registration form</title>
    <style>
    body {
            background-image: url("https://cdn.pixabay.com/photo/2016/06/02/02/33/triangles-1430105__480.png");
            background-size: 100%; background-repeat: no-repeat;
            }
            h1{
                border:10px solid palegreen;
                background-color:teal;
                color:white;
            }
    </style>
</head>
<body  align="center">
<h1>Registration form:Post</h1>
<h3>Abhishek kumar singh</h3>
    <form action='GET_xyz_2part.php' method="GET">
        NAME:<input type="text" name="fname" placeholder="Enter Your Name" title="Enter Your Name">
        Rollno:<Input type="text" name="rollno" placeholder="Enter Your Roll Number" title="Enter Your Roll Number It must be greater than 100">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<!-- <?php
echo $_GET['fname'];
if (isset($_GET['submit']))
echo "<br>"; {
    if ($_GET['rollno'] <= 100) {
        echo "invalid";
    } else {
        echo $_GET['rollno'];
    }
}
?> -->