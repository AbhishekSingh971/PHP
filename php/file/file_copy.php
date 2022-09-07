<?php
$file = "file.txt";
if(file_exists($file)){
    echo readfile("file.txt");
    copy($file,"text.txt");
}
else{
    echo "file does not exist";
}
?>