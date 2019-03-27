<?php
$server="localhost";
$user="root";
$pwd="";
$x=$_GET['rno'];
$y=$_GET['name'];
$con=mysql_connect($server,$user,$pwd);
if(is_resource($con))
{
mysql_select_db('sample_bca');
$sql1="insert into student values(‘$x’,’$y’)";
mysql_query($sql1,$con);
echo "records inserted";
mysql_close($con);
}
else
{
echo "error".mysql_error();
}
?>
