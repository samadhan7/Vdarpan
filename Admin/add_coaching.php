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
            $logoUrl = $_POST["logo_url"];
            $websiteUrl = $_POST["website_url"];
            $city = $_POST["city"];
            
            // Insert data into colleges table
            
                $sql = "INSERT INTO coaching (name, logo_url, website_url, city) VALUES ('$name', '$logoUrl', '$websiteUrl', '$city')";
  
        
            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>added successfully</div>";
            } else {
                echo "<div class='alert alert-danger'>Error adding: " . $conn->error . "</div>";
            }
        }

        $conn->close();
    ?>
