<?php
// echo"<h1>r+</h1>";
// $file=fopen("file.txt","r+");
// fwrite($file,"hello how are you");
// echo readfile("file.txt") . "<br";

echo"<h1>r</h1>";
$file=fopen("file.txt","r");
fputs($file,"hello how are you");
echo readfile("file.txt") . "<br";

// echo"<h1>w+</h1>";
// $file=fopen("file.txt","w+");
// fwrite($file,"hello how are you");
// echo readfile("file.txt") . "<br";

// echo"<h1>w</h1>";
// $file=fopen("file.txt","w");
// fwrite($file,"hello how are you");
// echo readfile("file.txt") . "<br";

// echo"<h1>a</h1>";
// $file=fopen("file.txt","a");
// fwrite($file,"hello how are you");
// echo readfile("file.txt") . "<br";

// echo"<h1>a+</h1>";
// $file=fopen("file.txt","a+");
// fwrite($file,"hello how are you");
// echo readfile("file.txt") . "<br";

// echo"<h1>x+</h1>";
// $file=fopen("file.txt","x+");
// fwrite($file,"hello how are you");
// echo readfile("file.txt") . "<br";

// echo"<h1>x</h1>";
// $file=fopen("file.txt","x");
// fwrite($file,"hello how are you");
// echo readfile("file.txt") . "<br";
?>