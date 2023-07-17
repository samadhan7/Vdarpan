<?php
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

// Get college data from POST request
$collegeName = $_POST["collegeName"];
$imageUrl = $_POST["imageUrl"];
$websiteUrl = $_POST["websiteUrl"];

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO colleges (name, image_url, website_url) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $collegeName, $imageUrl, $websiteUrl);

// Execute statement and check for errors
if ($stmt->execute() === TRUE) {
  echo "College added successfully";
} else {
  echo "Error: " . $stmt->error;
}

// Close connection and statement
$stmt->close();
$conn->close(); 
?>
