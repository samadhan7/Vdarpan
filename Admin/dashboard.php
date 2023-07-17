


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="#">Dashboard</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="userlogout.php">Logout</a>
			</li>
             <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            categories
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="addgym.php">GYM</a>
                <a class="dropdown-item" href="addgroceries.php">groceries</a>
                <a class="dropdown-item" href="addLaptopServices.php">Laptop Services</a>
                <a class="dropdown-item" href="addPG.php">Paying Guest</a>
                <a class="dropdown-item" href="addConsultant.php">Consultant</a>
                <a class="dropdown-item" href="addcontractor.php">contractor</a>
                <a class="dropdown-item" href="addHomeServices.php">Home Services<a>
                <a class="dropdown-item" href="addCarRent.php">Car Rent<a>
                <a class="dropdown-item" href="addTravels.php">Travels<a>
                <a class="dropdown-item" href="addeventorganizer.php">Event Organizer<a>
                <a class="dropdown-item" href="addcoaching.php">Coaching<a>
                <a class="dropdown-item" href="addtransport.php">Transport<a>
                <a class="dropdown-item" href="addRestaurant.php">Restaurant<a>
                <a class="dropdown-item" href="addCarServices.php">Car Services<a>
                <a class="dropdown-item" href="addCA.php">Chartered Accountant<a>
                <a class="dropdown-item" href="addParlour.php">Parlours<a>
                <a class="dropdown-item" href="addPhotography.php">Photography<a>
                <a class="dropdown-item" href="addElectrician.php">Electrician<a>
                
                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
            
            </div>
            <li class="nav-item">
				<a class="nav-link" href="vendor_requests.php">vendors requests</a>
			</li>
		</ul>
	</div>
  
</nav>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registered Admin</h5>
                    
                    <h5 class="card-title">Registered Admin</h5>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Birthdate</th>
                                <th>Address</th>
                                <th>Action</th>
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

                                // Delete row from newadminsign table
                                if (isset($_POST["delete"])) {
                                    $email = $_POST["email"];
                                    $sql = "DELETE FROM newadminsign WHERE email='$email'";
                                    if ($conn->query($sql) === TRUE) {
                                        echo "<div class='alert alert-success'>Record deleted successfully</div>";
                                    } else {
                                        echo "<div class='alert alert-danger'>Error deleting record: " . $conn->error . "</div>";
                                    }
                                }

                                // Select data from newadminsign table
                                $sql = "SELECT name, email, password, birthdate, address FROM newadminsign";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>".$row["name"]."</td>";
                                        echo "<td>".$row["email"]."</td>";
                                        echo "<td>".$row["password"]."</td>";
                                        echo "<td>".$row["birthdate"]."</td>";
                                        echo "<td>".$row["address"]."</td>";
                                        echo "<td>
                                              



                                                <form method='post' onsubmit='return confirm(\"Are you sure you want to delete this record?\")'>
                                                <input type='hidden' name='email' value='".$row["email"]."'>
                                                <button type='submit' class='btn btn-danger btn-sm' name='delete'>Delete</button>
                                            </form>
                                            <form method='post' action='edit_admin.php'>
                                                <input type='hidden' name='email' value='".$row["email"]."'>
                                                <button type='submit' class='btn btn-primary btn-sm' name='edit'>Edit</button>
                                            </form>

                                            </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No registered admins found.</td></tr>";
                                }

                                $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>







<div class="container mt-2">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registered Users</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Birthdate</th>
                                    <th>Address</th>
                                    <th>Action</th>
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

                                    // Delete row from newusersign table
                                    if (isset($_POST["delete"])) {
                                        $email = $_POST["email"];
                                        $sql = "DELETE FROM newusersign WHERE email='$email'";
                                        if ($conn->query($sql) === TRUE) {
                                            echo "<div class='alert alert-success'>Record deleted successfully</div>";
                                        } else {
                                            echo "<div class='alert alert-danger'>Error deleting record: " . $conn->error . "</div>";
                                        }
                                    }

                                    // Select data from newusersign table
                                    $sql = "SELECT name, email, password, birthdate, address FROM newusersign";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
                                            echo "<td>".$row["email"]."</td>";
                                            echo "<td>".$row["password"]."</td>";
                                            echo "<td>".$row["birthdate"]."</td>";
                                            echo "<td>".$row["address"]."</td>";
                                            echo "<td>
                                                    <form method='post' onsubmit='return confirm(\"Are you sure you want to delete this record?\")'>
                                                        <input type='hidden' name='email' value='".$row["email"]."'>
                                                        <button type='submit' class='btn btn-danger' name='delete'>Delete</button>
                                                    </form>
                                                    <form method='get' action='edit_user.php'>
                                                        <input type='hidden' name='email' value='".$row["email"]."'>
                                                        <button type='submit' class='btn btn-primary'>Edit</button>
                                                    </form>
                                                </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No registered users found.</td></tr>";
                                    }

                                    $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        





        <div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reviews</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Rating</th>
                                <th>Action</th>
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

                                // Delete row from reviews table
                                if (isset($_POST["delete"])) {
                                    $title = $_POST["title"];
                                    $sql = "DELETE FROM reviews WHERE title='$title'";
                                    if ($conn->query($sql) === TRUE) {
                                        echo "<div class='alert alert-success'>Record deleted successfully</div>";
                                    } else {
                                        echo "<div class='alert alert-danger'>Error deleting record: " . $conn->error . "</div>";
                                    }
                                }

                                // Select data from reviews table
                                $sql = "SELECT title, text, rating FROM reviews";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>".$row["title"]."</td>";
                                        echo "<td>".$row["text"]."</td>";
                                        echo "<td>".$row["rating"]."</td>";
                                        echo "<td>
                                                <form method='post' onsubmit='return confirm(\"Are you sure you want to delete this record?\")'>
                                                    <input type='hidden' name='title' value='".$row["title"]."'>
                                                    <button type='submit' class='btn btn-danger' name='delete'>Delete</button>
                                                </form>
                                            </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>No reviews found.</td></tr>";
                                }

                                $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        


    






<!-- colleges info -->


<!DOCTYPE html>
<html>
<head>
    <title>Colleges</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Colleges</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>URL</th>
                                    <th>Web URL</th>
                                    <th>City</th>
                                    <th>Action</th>
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

                                    // Delete row from colleges table
                                    if (isset($_POST["delete"])) {
                                        $id = $_POST["id"];
                                        $sql = "DELETE FROM colleges WHERE id='$id'";
                                        if ($conn->query($sql) === TRUE) {
                                            echo "<div class='alert alert-success'>Record deleted successfully</div>";
                                        } else {
                                            echo "<div class='alert alert-danger'>Error deleting record: " . $conn->error . "</div>";
                                        }
                                    }

                                    // Select data from colleges table
                                    $sql = "SELECT id, name, logo_url, website_url, city FROM colleges";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$row["id"]."</td>";
                                            echo "<td>".$row["name"]."</td>";
                                            echo "<td><img src='".$row["logo_url"]."' height='50'></td>";
                                            echo "<td><a href='".$row["website_url"]."' target='_blank'>".$row["website_url"]."</a></td>";
                                            echo "<td>".$row["city"]."</td>";
                                            echo "<td>
                                                    <form method='post' onsubmit='return confirm(\"Are you sure you want to delete this record?\")'>
                                                        <input type='hidden' name='id' value='".$row["id"]."'>
                                                        <button type='submit' class='btn btn-danger' name='delete'>Delete</button>
                                                    </form>
                                                    <form method='post' action='edit_college.php'>
                                                        <input type='hidden' name='id' value='".$row["id"]."'>
                                                        <button type='submit' class='btn btn-primary' name='edit'>Edit</button>
                                                    </form>
                                                </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No colleges found.</td></tr>";
                                    }

                                    $conn->close();
                                ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCollegeModal">Add College</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Add College Modal -->
    <div class="modal fade" id="addCollegeModal" tabindex="-1" role="dialog" aria-labelledby="addCollegeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCollegeModalLabel">Add College</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="add_college.php">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="logo_url">Logo URL:</label>
                            <input type="text" class="form-control" id="logo_url" name="logo_url" required>
                        </div>
                        <div class="form-group">
                            <label for="website_url">Website URL:</label>
                            <input type="text" class="form-control" id="website_url" name="website_url" required>
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

















        


























    </div>
</div>












        </div>
    </div>
                                </body>
</html>