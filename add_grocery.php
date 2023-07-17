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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    // Insert data into groceries table
    $sql = "INSERT INTO groceries (name, quantity, price) VALUES ('$name', '$quantity', '$price')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Grocery added successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error adding grocery: " . $conn->error . "</div>";
    }
}

$conn->close();
?>
