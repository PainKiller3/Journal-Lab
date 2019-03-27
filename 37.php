<?php
$file=fopen("reitest.txt","a");
fwrite($file,"Hello");
fwrite($file,"Reignz");
echo readfile("reitest.txt")."<br>";
fclose($file);
?>