<?php
mysql_connect("localhost","root","");
mysql_select_db('ict');
$query="select * from route";
$result=mysql_query($query);
?>
<html>
<body>
	<form>
<select required>
	<option>---Select Source City---</option> 
	<?php 
	while($row=mysql_fetch_assoc($result))
	{
		?>
		<option><?php echo $row['Place'] ?></option>
		<?php
	}
	?>
</select>
<br><br><br>
<?php
mysql_connect("localhost","root","");
mysql_select_db('ict');
$query="select * from route";
$result=mysql_query($query);
?>
<select required>
	<option>---Select Destination City---</option> 
	<?php 
	while($row=mysql_fetch_assoc($result))
	{
		?>
		<option><?php echo $row['Place'] ?></option>
		<?php
	}
	?>
</select>
</form>
</body>
</html>