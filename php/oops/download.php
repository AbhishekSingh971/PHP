<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="" Method="post" enctype="multipart/form-data">
        <input type="file" name="file_Upload" id="file_Upload">
        <br>
        <input style="border-radius:20%;" type="submit" value="Upload file" name="submit">
    </form> -->
    <h2>Download file from here:</h2>
    <a href="download.php?file=Z:\photos\IMG_20220514_124551287_MF_PORTRAIT~2.jpg">Click Here</a>
</body>

</html>
<?php
if (!empty($_GET['file'])) {
    $filename = basename($_GET['file']);
    $filepath = 'z:\photos/' . $filename;
    if (!empty($filename) && file_exists($filepath)) {

        header("Cache-Control: public");
        header("Content-Description:File Transfer");
        header("Content-Desposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding:binary");

        readfile($filepath);
        exit;
    } else {
        echo "this file does not exist.";
    }
}
?>