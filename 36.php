<?php
echo "Contents Of File:<br><br>";
$file1=fopen("test.txt","r");
echo fread($file1,filesize('test.txt'));
fclose($file1);
?>
