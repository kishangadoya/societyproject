<?php 
	session_start();
	unset($_SESSION ['society_admin']);
	header('location: ../index.php');
 ?>