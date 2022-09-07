<?php
$file=fopen("file.txt","r");
echo fgets($file);
echo ftell($file);
echo fgets($file);
?>