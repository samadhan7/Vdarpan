
<!DOCTYPE html>
<html>
<head>
    <title>Groceries</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Groceries</h5>
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

                                    // Delete row from groceries table
                                    if (isset($_POST["delete"])) {
                                        $id = $_POST["id"];
                                        $sql = "DELETE FROM groceries WHERE id='$id'";
                                        if ($conn->query($sql) === TRUE) {
                                            echo "<div class='alert alert-success'>Record deleted successfully</div>";
                                        } else {
                                            echo "<div class='alert alert-danger'>Error deleting record: " . $conn->error . "</div>";
                                        }
                                    }

                                    // Select data from groceries table
                                    $sql = "SELECT id, name, url, web_url, city FROM groceries";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$row["id"]."</td>";
                                            echo "<td>".$row["name"]."</td>";
                                            echo "<td>".$row["url"]."</td>";
                                            echo "<td><a href='".$row["web_url"]."' target='_blank'>".$row["web_url"]."</a></td>";
                                            echo "<td>".$row["city"]."</td>";
                                            echo "<td>
                                                    <form method='post' onsubmit='return confirm(\"Are you sure you want to delete this record?\")'>
                                                        <input type='hidden' name='id' value='".$row["id"]."'>
                                                        <button type='submit' class='btn btn-danger' name='delete'>Delete</button>
                                                    </form>
                                                    <form method='post' action='edit_grocery.php'>
                                                        <input type='hidden' name='id' value='".$row["id"]."'>
                                                        <button type='submit' class='btn btn-primary' name='edit'>Edit</button>
                                                    </form>
                                                </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No groceries found.</td></tr>";
                                    }

                                    $conn->close();
                                ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addGroceryModal">Add Grocery</button>
                    </div>
                </div>
            </div>
        </div>
    </div>