<?php
session_start();
$user=$_GET['num'];  $pass=$_GET['pass'];
if($user=="admin" && $pass=="admin")  
{  
	$_SESSION['username']="admin";
	header("location:38welc.html");  
}
else  
{  
	header("location:38.html"); 	
}
?>
