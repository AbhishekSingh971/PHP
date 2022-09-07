<?php
$file="text2.txt";
if(file_exists($file)){
    unlink("text2.txt");
}
else{
    echo "file does not exist";
}
