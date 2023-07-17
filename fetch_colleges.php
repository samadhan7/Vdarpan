<?php
session_start(); 
if(isset($_SESSION["val"]) && $_SESSION["val"] == 1)
{


  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Initialize variables for search parameters
$city = isset($_POST['city']) ? $_POST['city'] : '';
$search = isset($_POST['search']) ? $_POST['search'] : '';

// Build the SQL query based on search parameters
$sql = "SELECT * FROM colleges";
if ($city != '' && $city != 'All') {
  $sql .= " WHERE city = '$city'";
}
if ($search != '') {
  if ($city != '' && $city != 'All') {
    $sql .= " AND name LIKE '%$search%'";
  } else {
    $sql .= " WHERE name LIKE '%$search%'";
  }
}

// Fetch colleges from the database based on the search query
$result = $conn->query($sql);

// Prepare the HTML content for college list
$html = '';
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $name = $row["name"];
    $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
    $url = isset($row["url"]) ? $row["url"] : "";
    $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";

    $html .= '
      <div class="col-lg-3 col-md-6 col-sm-12 my-3">
        <div class="card">
          <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
          <div class="card-body">
            <h5 class="card-title">' . $name . '</h5>
            <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
          </div>
        </div>
      </div>
    ';
  }
} else {
  $html = "No colleges found.";
}

// Close the database connection
$conn->close();

// Return the HTML content for the college list
echo $html;

}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 2){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM consultant";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No consultant found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 3){
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM contractor";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No contractor found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;

}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 4){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM groceries";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No groceries found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;

}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 5){

  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM gym";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No gym found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;


}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 6){
  

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM laptopservices";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No laptopservices found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 7){


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM homeservices";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No homeservices found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;

}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 8){


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM carrent";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No cars for rent found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;

}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 9){
  

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM pgs";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No paying guest found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 10){
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM travels";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No travels found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;

}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 11){


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM eventorganizer";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No event organizer found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;

}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 12){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM coaching";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No coaching found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 13){
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM transport";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No transport found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 14){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM restaurant";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No restaurant found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 15){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM carservices";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No car services found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 16){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM ca";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No Chartered accountant found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 17){
  

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM parlours";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No parlours found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}

elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 18){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM photography";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No Photographars found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}



elseif(isset($_SESSION["val"]) && $_SESSION["val"] == 19){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydatabase";
  
  // Create a connection to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Initialize variables for search parameters
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
  // Build the SQL query based on search parameters
  $sql = "SELECT * FROM electrician";
  if ($city != '' && $city != 'All') {
    $sql .= " WHERE city = '$city'";
  }
  if ($search != '') {
    if ($city != '' && $city != 'All') {
      $sql .= " AND name LIKE '%$search%'";
    } else {
      $sql .= " WHERE name LIKE '%$search%'";
    }
  }
  
  // Fetch colleges from the database based on the search query
  $result = $conn->query($sql);
  
  // Prepare the HTML content for college list
  $html = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $imageUrl = isset($row["logo_url"]) ? $row["logo_url"] : "default-image.jpg"; // Set a default image if logo_url is not available
      $url = isset($row["url"]) ? $row["url"] : "";
      $websiteUrl = isset($row["website_url"]) ? $row["website_url"] : "";
  
      $html .= '
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <div class="card">
            <img class="card-img-top" src="' . $imageUrl . '" alt="' . $name . '">
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              <a href="' . $websiteUrl . '" class="btn btn-primary">Get Info</a>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    $html = "No electrician found.";
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the HTML content for the college list
  echo $html;
}
?>


