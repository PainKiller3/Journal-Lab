<?php
$server="localhost";
$user="root";
$pwd="";
$con=mysql_connect($server,$user,$pwd);
if(is_resource($con))
{
mysql_select_db('sample_bca');
$sql1="delete from student26 where Rno='101' and Name='ABC'";
mysql_query($sql1,$con);
echo "records deleted";
mysql_close($con);
}
else
{
echo "error".mysql_error();
}
?>