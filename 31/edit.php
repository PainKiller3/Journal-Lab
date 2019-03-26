<?php
	$rn=$_GET['rn'];
	$con=mysqli_connect('localhost','root','bvi123','userinf')
	or die("Connection Failed!");
	$sql="select * from usrinf where roll=$rn";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($res);
	$rn=$row['roll'];
	$nm=$row['name'];
?>
<html>
	<body>
		<form method="POST" action="editRec.php">
			Roll No: <input type="text" name="rn" value="<?php echo $rn; ?>" disabled>
			<br>
			Name: <input type=text name="Name" value="<?php echo $nm; ?>" >
			<br>
			<input type="submit" value="UPDATE">
		</form>
	</body>
</html>