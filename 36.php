<?php
$file=fopen("test.txt","w");
fwrite($file,"Hello World");
fclose($file);
?>
FREAD:-
<?php
echo readfile("reitest.txt");
?>