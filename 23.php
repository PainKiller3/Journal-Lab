<html>
<body>
<form method="POST" action="23.php">
First Number:
<input type="text" name="t1"> </br>
Second Number:
<input type="text" name="t2"> </br>
<input type="submit" value="ADD"><br>
</form>
<?php
@$n1=$_POST['t1'];
@$n2=$_POST['t2'];
@$a=$n1+$n2;
?>
Result: 
<input type=text value=<?php echo $a;?> disabled>
</body>
</html>
