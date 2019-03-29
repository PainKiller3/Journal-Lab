<html>
<body>
<form method="GET" action="24.php">
	Enter Number: <input type="text" name="txt"> </br>
	<input type="submit"><br>
</form>
<?php
@$n=$_GET['txt'];
echo "<table border=1 cellpadding=10>";
for ($i=1; $i <=10 ; $i++) 
{ 
	echo "<tr>";
	echo "<td>"; echo $n; echo "</td>";
	echo "<td>"; echo "x"; echo "</td>";
	echo "<td>"; echo $i; echo "</td>";
	echo "<td>"; echo "="; echo "</td>";
	echo "<td>"; echo $n*$i; echo "</td>";
	echo "</tr>";
}
echo "</table></body></html>";
?>
