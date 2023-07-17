<?php
// Step 1: Create a connection to the database
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

// Step 2: Create the table if it doesn't exist
// $sql = "CREATE TABLE IF NOT EXISTS colleges (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         name VARCHAR(255) NOT NULL,
//         logo_url VARCHAR(255) NOT NULL,
//         website_url VARCHAR(255) NOT NULL,
//         city VARCHAR(255) NOT NULL
//       )";
$sql = "CREATE TABLE IF NOT EXISTS colleges (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  logo_url VARCHAR(255) NOT NULL,
  website_url VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL
) AUTO_INCREMENT=1";


if ($conn->query($sql) === FALSE) {
  echo "Error creating table: " . $conn->error;
}

// Step 3: Add colleges to the table
$collegesAdded = 0;

// function addCollege($name, $logoUrl, $websiteUrl, $city) {
//   global $conn, $collegesAdded;
//   $sql = "SELECT name FROM colleges WHERE name = '$name'";
//   $result = $conn->query($sql);

//   if ($result->num_rows == 0) {
//     $sql = "INSERT INTO colleges (name, logo_url, website_url, city) VALUES ('$name', '$logoUrl', '$websiteUrl', '$city')";
//     if ($conn->query($sql) === TRUE) {
//       $collegesAdded++;
//     } else {
//       echo "Error: " . $sql . "<br>" . $conn->error;
//     }
//   }
//    else {
//      echo "College already exists in the database";
//    }
// }

function addCollege($name, $logoUrl, $websiteUrl, $city) {
  global $conn, $collegesAdded;
  $sql = "SELECT name FROM colleges WHERE name = '$name'";
  $result = $conn->query($sql);

  if ($result->num_rows == 0) {
    $sql = "INSERT INTO colleges (name, logo_url, website_url, city) VALUES ('$name', '$logoUrl', '$websiteUrl', '$city')";
    if ($conn->query($sql) === TRUE) {
      // College added successfully
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "College already exists in the database";
  }

  $collegesAdded++;
}


// ... (Previous code)

// Step 4: Call the addCollege function for each college
addCollege("Punee College", "https://moderncoe.edu.in/images/new_bannernew.jpg", "innerpages.html", "Pune");
addCollege("Indian Institute of Science Bangalore", "https://iisc.ac.in/wp-content/uploads/2019/04/IISc-ill.jpg", "https://www.iisc.ac.in/", "Bangalore");
addCollege("Bangalore University", "https://bangaloreuniversity.ac.in/wp-content/uploads/2018/03/BU-Admn-Blk-Front.jpg", "https://www.bangaloreuniversity.ac.in/", "Bangalore");
addCollege("University Of Pune", "https://lh3.googleusercontent.com/p/AF1QipOqhVQFhJuMUtrnDuVHSAqwXfpifFgaKXDpjZQ=s1360-w1360-h1020", "https://www.iimb.ac.in/", "Pune");
addCollege("PESs Modern College Of Engineering, Pune", "https://moderncoe.edu.in/images/new_bannernew.jpg", "innerpages.html", "Pune");
addCollege("Pune College", "https://moderncoe.edu.in/images/new_bannernew.jpg", "innerpages.html", "Pune");
addCollege(" College", "https://moderncoe.edu.in/images/new_bannernew.jpg", "innerpages.html", "Pune");


// Step 5: Close the database connection
$conn->close();

// Step 6: Display the success message
if ($collegesAdded > 0) {
  header("Location:adminlogin.php");
}
?>
