<html>
<body>
<form method="GET" action="28.php">
<input type="radio" value="Male" name="g"> Male <br>
<input type="radio" value="Female" name="g">Female <br>
<input type="submit" value="submit"> <br> <hr>
</form>
<?php
if(isset($_GET['g']))
{
	echo $_GET['g']." is selected";
}
?>
</body>
</html>
