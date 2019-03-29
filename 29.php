<html>
<body>
<form method="GET" action="29.php">
Select City: <select name="city">
	<option>Mumbai</option>
	<option>Pune</option>
	<option>Delhi</option>
</select><br>
<input type="submit"><br><hr>
</form>
<?php
if(isset($_GET['city']))
{
	echo $_GET ['city']." is selected";
}
?>
</body>
</html>
