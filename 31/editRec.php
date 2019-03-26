<?php
	$nme=$_POST['Name'];
	$rollno=$_POST['rn'];
	$con=mysqli_connect('localhost','root','bvi123','userinf')
	or die("Connection Failed!");
	$sql="update usrinf set name='$nme' where roll=$rollno";
	mysqli_query($con,$sql);
	echo "Record Updated!";
?>