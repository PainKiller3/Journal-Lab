<?php
$n1=$_GET['fno'];
$n2=$_GET['sno'];
if($n1>$n2)
{
		echo "Number $n1 is max";
}
elseif ($n2>$n1)
{
		echo "Number $n2 is max";
}
else
{
	echo "Both are same";
}
?>