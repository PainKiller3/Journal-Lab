<?php
	$rem=$_GET['rem'];
	$con=mysqli_connect('localhost','blitz','reignz','userinf')
	or die("Connection Failed!");
	$sql="delete from usrinf where roll=$rem";
	mysqli_query($con,$sql);
	echo "Record deleted!";
?>
