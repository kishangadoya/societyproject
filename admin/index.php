<?php 
	session_start();
	if (isset($_SESSION['society_admin'])) {	//$_SESSION is globle varible...
												//society admin=key of Session
		header('location:home.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- 	add style here	-->
	<style type="text/css"> 
			
	</style>
	
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
				<div class="col-4">
					<div class="card">
						<div class="card-header bg-dark text-white">Admin Login</div>
							<div class="card-body">
								<form action="process/loginProcess.php" method="post">
									<div class="form-group">
										<label for="username" class="form-label">User id</label>
										<input type="text" name="username" for="username" class="form-control" id="username" required>
									</div>
									<div class="form-group">
										<label for="password" class="form-label">Password</label>
										<input type="password" name="password" id="password" for="password" class="form-control" required="true">
									</div>
									<div class="row justify-content-center pt-2">
										<button class="btn btn-primary" type="submit" value="Submit" name="a_submit">Log In</button>
									</div><!--Admin submit button=a_submit -->
								</form>
							</div>
					</div>
				</div>	
		</div>
	</div>
	
	<!-- jquery, popper & JS plugins -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>