<?php
	include 'dbConnection.php';
	include 'sessionRedirect.php';
	

	if(isset($_POST['submit'])){
		$selectFloor = $_POST['selectFloor'];
		$selectFlat = $_POST['selectFlat'];
		$block= strtolower($_GET['blk']);
		$ownername = $_POST['ownername'];
		$familymember = $_POST['familymember'];

		//echo "$block";

		$query = "INSERT into block_".$block." VALUES('','$selectFloor','$selectFlat',
		'$ownername','$familymember','NULL')";
		$fire = mysqli_query($conn,$query) or die(mysqli_error($conn));

		$_SESSION['insert_status']='done';

		header('location:../insertDetail.php?blk='.$block);
	}


?>
