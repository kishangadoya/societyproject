<?php 
	if(session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}
	if (isset($_SESSION['society_admin']) == false) {
		header('location:index.php');
	}
?>