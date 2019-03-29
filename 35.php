<?php
$user="blitz";
$pwd="reignz";
setcookie($user,$pwd,time()+(60*2),"/");
if(!isset($_COOKIE[$user]))
{
	echo $user." is not set."; 
}
else
{
	echo $user." and its value is ".$_COOKIE[$user];  
}
?>
<br>
<a href="delcookie.php"> Delete Cookie </a>
