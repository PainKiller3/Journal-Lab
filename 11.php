<?php
echo "<table border=1 cellpadding=10>";
$n=6;
for($i=1;$i<=10;$i++)
{
	echo "<tr>";
	echo "<td>"; echo $n; echo "</td>";
	echo "<td>"; echo "x"; echo "</td>";
	echo "<td>"; echo $i; echo "</td>";
	echo "<td>"; echo "="; echo "</td>";
	echo "<td>"; echo $n*$i; echo "</td>";
	echo "</tr>";
}echo "</table>";
?>
