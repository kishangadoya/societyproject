<?php
	include ('dbConnection.php');

	if ($_POST['blkoption']=='*') 
	{
	$query_tables = mysql_query('SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE table_name LIKE "%block%" ');

	while($table = mysql_fetch_assoc($query_tables)){

    $query = mysql_query("select * from ".$table['table_name'] );
print_r($query);

}

}
	else
		$query=	"SELECT * from block_".$_POST['blkoption'];
	$results= mysqli_query($conn,$query) or die(mysqli_error($conn));

	if (mysqli_num_rows($results)<=0) {
		echo '<tr><td colspan=6><center>No records Found...</center></td><tr>';
	}
	while ($detail = mysqli_fetch_assoc($results)) 
	{?>
		<tr>
			<td><?php echo $detail['id']; ?></td>
			<td><?php echo $detail['floor']; ?></td>
			<td><?php echo $detail['flat_no']; ?></td>
			<td><?php echo $detail['owner_name']; ?></td>
			<td><?php echo $detail['familymember']; ?></td>
			<td><?php echo $detail['maintenance']; ?></td>
		</tr>

	<?php }
?>