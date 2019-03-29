<html>
<body>
<form method ="GET"  action ="32.php">
Roll No:
<input type="text" name="rno"> <br>
Name:
<input type="text" name="name"> <br>
<input type="submit" value=INSERT>
</form> <hr>
<?php
$roll=$_GET['rno'];
$name=$_GET['name'];
$con=mysqli_connect('localhost','blitz','reignz','student');
if($con)
{
$squery="insert into stdnt(roll, name) values($roll,'$name')";
mysqli_query($con,$squery);
echo "Record Inserted";
}
else
{
echo "Connection to Database Failed";
}
mysqli_close($con);
?>
</body>
</html>
