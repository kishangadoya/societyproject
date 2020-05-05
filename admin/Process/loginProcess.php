<?php
	//DO NOT INCLUDE "sessionRedirect.php" OTHERWISE THE SCRIT-->ALERT WILL NOT WORK
	include ('dbConnection.php');
	$un= $_POST['username'];	//$un= local var (contain admin's username from "index.php")
	$upw= $_POST['password'];	//$upw= local var(contain admin's password from "index.php" )

	//die("Somthing is wrong");
	$query = "SELECT * FROM admin_login WHERE username = '$un' AND password = '$upw' ";
	$fire = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$rec = mysqli_num_rows($fire);

	if ($rec>=1) {//if query runs and record is found
		session_start();
		$_SESSION['society_admin'] = $un;
		header('location:../home.php');
	}

	else{
		?><!--PHP scope end-->

		<script>
			alert("Incorrect Id or Password!");
			window.location="../index.php";
		</script>
		<?php 
	}
 ?>