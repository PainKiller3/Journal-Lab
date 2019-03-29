<?php
$con=mysqli_connect('localhost','blitz','reignz','student');
if($con)
{
$squery="delete from stdnt where roll='31' and name='Ninad'";
mysqli_query($con,$squery);
echo "Record Deleted";
}
else
{
echo "Connection failed";
}
mysqli_close($con);
?>
