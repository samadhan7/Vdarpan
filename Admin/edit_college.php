<!DOCTYPE html>
<html>
<head>
    <title>Edit College</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit College</h5>
                        <?php
                            error_reporting(E_ERROR | E_PARSE);
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

                            // Retrieve college data
                            if (isset($_POST["id"])) {
                                $id = $_POST["id"];
                                $sql = "SELECT * FROM colleges WHERE id='$id'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $name = $row["name"];
                                    $logo_url = $row["logo_url"];
                                    $website_url = $row["website_url"];
                                    $city = $row["city"];

                                    // Display edit form
                                    echo '
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" name="name" value="'.$name.'">
                                            </div>
                                            <div class="form-group">
                                                <label for="logo_url">Logo URL:</label>
                                                <input type="text" class="form-control" id="logo_url" name="logo_url" value="'.$logo_url.'">
                                            </div>
                                            <div class="form-group">
                                                <label for="website_url">Website URL:</label>
                                                <input type="text" class="form-control" id="website_url" name="website_url" value="'.$website_url.'">
                                            </div>
                                            <div class="form-group">
                                                <label for="city">City:</label>
                                                <input type="text" class="form-control" id="city" name="city" value="'.$city.'">
                                            </div>
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    ';
                                } else {
                                    echo "<div class='alert alert-danger'>College not found.</div>";
                                }
                            }

                            // Update college data
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
                                $id = $_POST["id"];
                                $name = $_POST["name"];
                                $logo_url = $_POST["logo_url"];
                                $website_url = $_POST["website_url"];
                                $city = $_POST["city"];

                                $sql = "UPDATE colleges SET name='$name', logo_url='$logo_url', website_url='$website_url', city='$city' WHERE id='$id'";
                                if ($conn->query($sql) === TRUE) {
                                    echo "<div class='alert alert-success'>College updated successfully</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>Error updating college: " . $conn->error . "</div>";
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
