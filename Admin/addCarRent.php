<!DOCTYPE html>
<html>
<head>
    <title>Car Renters</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Car Renters</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th>Website URL</th>
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
                                        $sql = "DELETE FROM carrent WHERE id='$id'";
                                        if ($conn->query($sql) === TRUE) {
                                            echo "<div class='alert alert-success'>Record deleted successfully</div>";
                                        } else {
                                            echo "<div class='alert alert-danger'>Error deleting record: " . $conn->error . "</div>";
                                        }
                                    }

                                    // Select data from colleges table
                                    $sql = "SELECT id, name, logo_url, website_url, city FROM carrent";
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
                                        echo "<tr><td colspan='6'>No Car Renters found.</td></tr>";
                                    }

                                    $conn->close();
                                ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCollegeModal">Add Car Renters</button>
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
                    <h5 class="modal-title" id="addCollegeModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="add_CarRent.php">
                        
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
