<?php
$file = "file.txt";
if (file_exists($file)) {
    echo readfile("file.txt");
    rename("text.txt","text2.txt");
} else {
    echo "file does not exist";}
?>
