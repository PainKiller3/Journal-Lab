<html>
<body>
<form method="GET" action="27.php">
HDD	<input type="checkbox" value="HDD" name="ch1"> <br>
RAM	<input type="checkbox" value="RAM" name="ch2"> <br>
MONITOR	<input type="checkbox" value="MONITOR" name="ch3"> <br>
<input type="submit"> <br><hr>
<?php
if(isset($_GET['ch1']))
{
	echo $_GET ['ch1']. " is selected <br>";
}
if(isset($_GET['ch2']))
{
	echo $_GET ['ch2']. " is selected <br>";
}
if(isset($_GET['ch3']))
{
	echo $_GET ['ch3']. " is selected";
}
?>
</body>
</html>
