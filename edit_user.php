<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit User</h5>
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

                            // Retrieve user data
                            if (isset($_GET["email"])) {
                                $email = $_GET["email"];
                                $sql = "SELECT * FROM newusersign WHERE email='$email'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $name = $row["name"];
                                    $password = $row["password"];
                                    $birthdate = $row["birthdate"];
                                    $address = $row["address"];

                                    // Display edit form
                                    echo '
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" name="name" value="'.$name.'">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password:</label>
                                                <input type="password" class="form-control" id="password" name="password" value="'.$password.'">
                                            </div>
                                            <div class="form-group">
                                                <label for="birthdate">Birthdate:</label>
                                                <input type="date" class="form-control" id="birthdate" name="birthdate" value="'.$birthdate.'">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address:</label>
                                                <input type="text" class="form-control" id="address" name="address" value="'.$address.'">
                                            </div>
                                            <input type="hidden" name="email" value="'.$email.'">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    ';
                                } else {
                                    echo "<div class='alert alert-danger'>User not found.</div>";
                                }
                            }

                            // Update user data
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $email = $_POST["email"];
                                $name = $_POST["name"];
                                $password = $_POST["password"];
                                $birthdate = $_POST["birthdate"];
                                $address = $_POST["address"];

                                $sql = "UPDATE newusersign SET name='$name', password='$password', birthdate='$birthdate', address='$address' WHERE email='$email'";
                                if ($conn->query($sql) === TRUE) {
                                    echo "<div class='alert alert-success'>User updated successfully</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>Error updating user: " . $conn->error . "</div>";
                                }
                            }

                            $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
