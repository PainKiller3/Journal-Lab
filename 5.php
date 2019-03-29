<html>
<body>
<b>PROGRAM to CHECK WHETHER NUMBER IS EVEN OR ODD</b>
<form method="GET" action="5.php">
	Enter Number: <input type="text" name="no"></br>
	<input type="submit">
</form><hr><b>
<?php
$n=@$_GET['no'];
if($n%2==0)
{
	echo $n." is even";
}
else
{
	echo $n." is odd";
}
?>
</b></body>
</html>
