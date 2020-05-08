<?php
	include ('dbConnection.php');
	include ('sessionRedirect.php');
	$var =  $_POST['blkoption'];

			$query=	"SELECT * from block_" .$var. " ORDER By flat_no ASC";
			$results= mysqli_query($conn,$query) or die(mysqli_error($conn));

			if (mysqli_num_rows($results)<=0) {
				echo '<tr><td colspan=7><center>No records Found...</center></td><tr>';
			}
				while ($detail = mysqli_fetch_assoc($results)) 
				{?>
					<tr>
						<td><?php echo $detail['id']; ?></td>
						<td><?php echo $var; ?></td>
						<td><?php echo $detail['floor']; ?></td>
						<td><?php echo $detail['flat_no']; ?></td>
						<td><?php echo $detail['owner_name']; ?></td>
						<td><?php echo $detail['familymember']; ?></td>
						<td><?php echo $detail['maintenance']; ?></td>
					</tr>

		<?php }
			


	if(isset( $GET['blk']))
	{
		$sessionblock = $GET['blk'];?>

		<div class="container justify-content-center mt-4">
			<table class="table table-hover  table-striped">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Block</th>
						<th scope="col">Floor</th>
						<th scope="col">Flat</th>
						<th scope="col">Owner Name</th>
						<th scope="col">Family member</th>
						<th scope="col">Maintenance</th>
					</tr>
				</thead>
				<tbody id="">
				<?php 
					$query=	"SELECT * from block_".$sessionblock;
					$results= mysqli_query($conn,$query) or die(mysqli_error($conn));

					if (mysqli_num_rows($results)<=0) {
						echo '<tr><td colspan=7><center>No records Found...</center></td><tr>';
					}
						while ($detail = mysqli_fetch_assoc($results)) 
						{
	//php ends	?>
							<tr>
								<td><?php echo $detail['id']; ?></td>
								<td><?php echo $var; ?></td>
								<td><?php echo $detail['floor']; ?></td>
								<td><?php echo $detail['flat_no']; ?></td>
								<td><?php echo $detail['owner_name']; ?></td>
								<td><?php echo $detail['familymember']; ?></td>
								<td><?php echo $detail['maintenance']; ?></td>
							</tr>
				</tbody>
			</table>
		</div>
		<?php
						}
	}
?>