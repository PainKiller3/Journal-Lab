<html>
<body>
<form method ="GET"  action ="33.php">
Roll No:
<input type="text" name="rno"> <br>
Name:
<input type="text" name="name"> <br>
<input type="submit"  value="UPDATE">
</form><hr>
<?php
$con=mysqli_connect('localhost','blitz','reignz','student');
if(isset($_GET['rno']))
{
if($con)
{
$roll=@$_GET['rno'];
$name=@$_GET['name'];
$squery="update stdnt SET name='$name' where roll=$roll";
mysqli_query($con,$squery);
echo "Record Updated";
}
else
{
echo "Connection Failed";
}}
?>
</body>
</html>
