<?php
$age=array("Arindam"=>"22", "XsploIT"=>"21", "Mehul"=>"18");
asort($age);
foreach($age as $x=>$x_value)
{
echo "Key=".$x."  Value=".$x_value;
echo "<br>";
}
?>
