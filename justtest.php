<!DOCTYPE html>
<html>
<head>
  <title>Colleges</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">
  <!-- Rest of your CSS styles -->
</head>
<body>
  <!-- Your HTML code -->

  <?php
  // Database configuration
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "mydatabase";

  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $database);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Function to fetch colleges from the database based on the selected city and search term
  function fetchColleges($conn, $city, $searchTerm) {
    $query = "SELECT * FROM colleges WHERE city = '$city' AND college_name LIKE '%$searchTerm%'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        // Display the college information
        echo '<div class="col-lg-3 col-md-6 col-sm-12 my-3">';
        echo '<div class="card">';
        echo '<img class="card-img-top" src="' . $row["image_url"] . '" alt="' . $row["college_name"] . '" style="height: 200px;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row["college_name"] . '</h5>';
        echo '<a href="' . $row["college_url"] . '" class="btn btn-primary">Get Info</a>';
        echo '</div></div></div>';
      }
    } else {
      echo '<div class="col-12 text-center">No colleges found.</div>';
    }
  }

  // Fetch the selected city and search term from the form
  $city = $_POST["city"];
  $searchTerm = $_POST["search"];

  // Fetch colleges based on the selected city and search term
  fetchColleges($conn, $city, $searchTerm);

  // Close the database connection
  $conn->close();
  ?>

  <!-- Rest of your HTML code -->
  
  <!-- Your JavaScript code -->
  
  <script>
    // Your JavaScript code here
  </script>

</body>
</html>
