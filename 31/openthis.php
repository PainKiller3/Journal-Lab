<?php
	$con=mysqli_connect('localhost','root','bvi123','userinf')
	or die("Connection Failed!");
	$sql="select * from usrinf";
	$res=mysqli_query($con,$sql);
	echo '<table border=1 bordercolor=blue cellpadding=10>';
	echo "<tr>";
	echo "<th>Roll No</th>";
	echo "<th>Name</th>";
	echo "<th colspan=2>Action</th>";
	echo "<tr>";
	while($row=mysqli_fetch_array($res))
	{ ?>
		<tr>
		<td>
		<?php echo $row['roll']; ?>
		</td>
		<td>
		<?php echo $row['name']; ?>
		</td>
		<td>
		<a href=edit.php?rn=<?php echo $row['roll']; ?> >EDIT</a>
		</td>
		<td>
		<a href=delete.php?rem=<?php echo $row['roll']; ?> >DELETE</a>
		</td>
		</tr>
	<?php } ?>
	</table>
	<?php mysqli_close($con); ?>
