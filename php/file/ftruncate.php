<?php
$file= fopen("file.txt","r+");
ftruncate($file,10);
fclose($file);
?>