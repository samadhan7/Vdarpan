

<?php
// Start the session
session_start();

// Check if the user is already logged in, redirect to dashboard
if (isset($_SESSION["email"])) {
    header("Location: dashboard.php");
    exit();
}
?>










<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>




<body>




<?php
    // Check if an error occurred during login and display the error message
    if (isset($_GET["error"]) && $_GET["error"] == "invalid_login") {
        echo "<p>Invalid email or password.</p>";
    }
    ?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-primary text-white">
						<h4>Admin-Login</h4>
					</div>
					<div class="card-body">
						<form action="login_handler.php" method="POST">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" id="email" name="email" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" name="password" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</form>
						<div class="mt-3">
							<a href="reset_password.php">Forgot your password?</a>
						</div><div class="mt-3">
							<a href="newadminsign.html">Dont have an Accoount ?</a>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
















