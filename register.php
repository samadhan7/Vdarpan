<?php
// Set database connection details
$host = 'localhost'; // Your database host name or IP address
$dbname = 'mydatabase'; // Your database name
$user = 'root'; // Your database username
$password = ''; // Your database password

// Establish a PDO database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare a PDO statement for inserting the data
    $stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
    // Bind the parameters to the statement
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "***************************************************************************User data has been inserted successfully! ***************************************************************************";
    } else {
        echo "An error occurred while inserting user data.";
    }
}
?>
