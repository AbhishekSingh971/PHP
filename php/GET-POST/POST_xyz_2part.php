<!-- <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        echo $_POST['fname'];
        echo $_POST['rollno'];
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-image: url("https://cdn.pixabay.com/photo/2016/06/02/02/33/triangles-1430105__480.png");
            background-size: 100%;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="card m-5" style="width: 18rem;">
        <br>
        <h3 class="card-title text-center">User Details</h3>
        <img class="card-img-top" src="https://img.vectorfair.com/vectorfair-uploads/2020-04-12/free/TM_1268_SkVNQSBBTk4gMjgxMS0yMQ.jpg" alt="Card image cap">
        <div class="card-body">

            <p class="card-text text-center text-capitalize"><?php echo "Name : " . $_POST['fname'] ?></p>
            <p class="card-text text-center text-capitalize"><?php echo "Rollno : " . $_POST['rollno'] ?></p>
        </div>
    </div>
</body>

</html>