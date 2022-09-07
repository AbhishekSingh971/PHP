<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
</head>

<body bgcolor="#e49e41" align="center">
    <h1>Abhishek kumar singh</h1>

    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="POST">
        NAME:<input type="text" name="fname" title="tooltip_text">
        Rollno:<Input type="text" name="rollno">
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit']))
    echo $_POST['fname'];
echo "<br>"; {
    if ($_POST['rollno'] <= 1000) {
        echo "invalid";
    } else {
        echo $_POST['rollno'];
    }
}
?>