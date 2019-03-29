<?php
$uname=$_POST['uname'];
$passwd=$_POST['passwd'];
if($uname=="admin" && $passwd=="admin")
{
	echo "Login Successful";
}
else
{
	echo "Login Failed";
}
?>
