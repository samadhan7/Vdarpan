<!-- <?php

// Get form data
// $name = $_POST["name"];
// $email = $_POST["email"];
// $password = $_POST["password"];
// $birthdate = $_POST["birthdate"];
// $address = $_POST["address"];

// // Connect to the database
// $host = "localhost";
// $username = "root";
// $password = "";
$dbname = "mydatabase";
// $conn = mysqli_connect($host, $username, $password, $dbname);

// // Check if the connection was successful
// if (!$conn) {
// 	die("Connection failed: " . mysqli_connect_error());
// }

// // Insert the data into the "users" table
// $sql = "INSERT INTO newusersign (name, email, password, birthdate, address) VALUES ('$name', '$email', '$password', '$birthdate', '$address')";

if (mysqli_query($conn, $sql)) {
	echo "Sign-up successful";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?> -->
