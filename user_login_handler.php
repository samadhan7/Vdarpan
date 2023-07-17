<?php
// Start the session
session_start();

// Get the form data
$email = $_POST["email"];
$password = $_POST["password"];

// Set database connection details
$host = 'localhost'; // Your database host name or IP address
$dbname = 'mydatabase'; // Your database name
$user = 'root'; // Your database username
$password_db = ''; // Your database password

// Establish a PDO database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password_db);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

// Query the database for the user with the provided email and password
$stmt = $pdo->prepare("SELECT * FROM newusersign WHERE email = :email AND password = :password");
$stmt->execute(['email' => $email, 'password' => $password]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if a user was found with the provided email and password
if ($user) {
    // Email and password are correct, set a session variable to indicate that the user is logged in
    $_SESSION["email"] = $email;

    // Redirect the user to the dashboard page
    header("Location:user_dashboard.php");
    exit();
} else {
    // If we get here, the login failed
    header("Location: userlogin.php?error=invalid_login");
    exit();
}
?>
