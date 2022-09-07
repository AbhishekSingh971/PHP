<?php
$file = "file.txt";
if(file_exists($file)){
    echo readfile("file.txt");
}
else{
    echo "file does not exist";
}
?>