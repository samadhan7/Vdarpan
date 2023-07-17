<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the form data
  $orgName = $_POST["Organization"];
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $contactNo = $_POST["contactNo"];

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Insert the data into the database
  $sql = "INSERT INTO advertisement (Organization, FirstName, LastName, ContactNo) VALUES ('$orgName', '$firstName', '$lastName', '$contactNo')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
