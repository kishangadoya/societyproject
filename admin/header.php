<?php 
include 'process/dbConnection.php';
include ('process/sessionRedirect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo "$pagetitle"; ?></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Font-Awsome CSS-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- 	add style here	-->
	<style type="text/css"> 	
		
		}

	</style>

</head>
<body>
	<!--This is home page...-->
	<ul class="nav nav-tabs nav-pills  navbar-dark bg-dark">
		<li class="nav-item">
			<a class="nav-link active" href="home.php">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Personal-info</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">View Detail</a>
		</li>
		<li class="nav-item">
			<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		</li>
	</ul>