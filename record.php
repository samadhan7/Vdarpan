<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Dashboard</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Registered Admin</h5>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								
								




                                <?php
                                    // Connect to database
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "mydatabase";
    
                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
    
                                    // Select data from newadminsign table
                                    $sql = "SELECT name FROM newadminsign";
                                    $result = $conn->query($sql);
    
                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr><td>".$row["name"]."</td></tr>";
                                        }
                                    } else {
                                        echo "<tr><td>No registered admins found.</td></tr>";
                                    }
    
                                    $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
















        <div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Registered User</h5>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								
								




                                <?php
                                    // Connect to database
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "mydatabase";
    
                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
    
                                    // Select data from newadminsign table
                                    $sql = "SELECT name FROM newusersign";
                                    $result = $conn->query($sql);
    
                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr><td>".$row["name"]."</td></tr>";
                                        }
                                    } else {
                                        echo "<tr><td>No registered admins found.</td></tr>";
                                    }
    
                                    $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

















































        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Free Listings</h5>
                        <p class="card-text">This card displays a list of free listings.</p>
                        <a href="#" class="btn btn-primary">View Listings</a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Premium Listings</h5>
                            <p class="card-text">This card displays a list of premium listings.</p>
                            <a href="#" class="btn btn-primary">View Listings</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    