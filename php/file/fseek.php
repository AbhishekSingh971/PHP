<?php
$file=fopen("file.txt","r");
echo fgets($file);
echo ftell($file);
echo fseek($file,15);
echo ftell($file);
?>