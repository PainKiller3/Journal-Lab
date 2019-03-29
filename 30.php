<html>
<body>
<form method="GET" action="30.php">
<table border=1>
<tr>
<td>Emp No:</td>
<td><input type="text" name="t1" maxlength="4"></td></tr>
<tr>
<td>Name:</td>
<td><input type="text" name="t2"></td></tr>
<tr>
<td>Gender:</td>
<td><input type="radio" value="Male" name="G"> Male
<input type="radio" value="Female" name="G"> Female</td></tr>
<tr>
<td>Languages:</td>
<td><input type="checkbox" name="l1" value="English" multiple>English<br>
<input type="checkbox" name="l2" value="Hindi" multiple>Hindi<br>
<input type="checkbox" name="l3" value="Marathi" multiple>Marathi<br></td></tr>
<tr>
<td>City:</td>
  <td><select name="city" style="width:100%">
	<option>Mumbai</option>
	<option>Pune</option>
	<option>Delhi</option>
</select> </td></tr>
<tr>
<td colspan=2><input type="submit" style="width:100%"></td></tr>
</table>
</form>
<hr>
<?php
echo @$_GET['t1']."<br>";
echo @$_GET['t2']."<br>";
echo @$_GET['G']." is selected <br>";
if(isset($_GET['l1']))
echo @$_GET['l1']." language is selected <br>";
if(isset($_GET['l2']))
echo @$_GET['l2']." language is selected <br>";
if(isset($_GET['l3']))
echo @$_GET['l3']." language is selected <br>";
echo @$_GET['city']." is selected";
?>
</body>
</html>
