<?php
//Abhishek kumar singh
$file=fopen("file2.txt","w+");
fwrite($file,"My name is abhishek and i'm from bca");
readfile("file2.txt");
?>