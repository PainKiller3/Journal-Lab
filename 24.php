<?php
$n=$_GET['number'];
echo "<table border=1 cellpadding=10>";
for ($i=1; $i <=10 ; $i++) 
{ 
	echo "<TR>"; echo "<TD>"; echo $n*$i;
	echo "<TB>"; echo "</TR>";
}
echo "</table>";
?>