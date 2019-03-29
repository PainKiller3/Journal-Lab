<html>
<body>
<form method="POST" action="25.php">
First Number:
<input type="text" name="t1"> </br>
Second Number:
<input type="text" name="t2"> </br>
<input type="submit" value="MAX"><br>
</form>
<?php
@$a=$_POST['t1'];
@$b=$_POST['t2'];
if($a>$b)
{
	@$res=$a;
}
else
{
	@$res=$b;
}
?>
Max Number: 
<input type=text value=<?php echo $res;?> disabled>
</body> </html> 
