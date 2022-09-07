<?php
$file=fopen("file.txt","r");
while(!feof($file)){
    $line=fgetc($file);
    echo $line . "<br>";
}
?>