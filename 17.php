<?php
$age=array("Reignz"=>"20", "Hkr"=>"25", "Blitz"=>"26");
asort($age);
foreach($age as $x=>$x_value)
{
echo "Key=".$x."  Value=".$x_value;
echo "<br>";
}
?>