<?php
$num=array(8,9,6,4,7);
rsort($num);
$length=count($num);
for($x=0;$x<$length;$x++)
{
echo "$num[$x]";
echo "<br>";
}
?>