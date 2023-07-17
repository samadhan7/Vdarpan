<?php
include 'db/database.php'; // Include the file containing the Database class

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Database(); // Create an instance of the Database class

    $orgName = $_POST['orgName'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $contactNo = $_POST['contactNo'];

    $database->vendorReq($orgName, $firstName, $lastName, $contactNo); // Call the vendorReq() method

    $database->close_db(); // Close the database connection
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Listing</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="advertisement.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        
    </style>
    </head>
    <body>
        <br>
                <h4 style="text-align: center;"> Thank you for Choosing  this platform  for Listing </h4>
               <h5 style="text-align: center;"> Please Fill the Following details  </h5>
       

       <div id="main">
        <navv id="navv">
        <h1> Free Listing </h1>
       <!-- <a href="login.html"> <h5 type="button" id="login"> Login  </h5></a> -->
        </navv>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <div >

               

                <input  name="orgName" id="inputt" type="text"  placeholder="Organization Name.."  input required> 
                <BR>
                <input name="firstName" id="inputt" type="text"  placeholder="First Name.."  input required> 
                <BR>
                <input name="lastName" id="inputt" type="text"  placeholder="Last Name.."  input required> 
                <BR>
                
                <input name="contactNo" id="inputt" type="Number"  placeholder="Contact No.."  input required> 
                <BR>
                <input id="inputtt" type="submit" value="Submit">

               </div>             

        <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
          Copyright © 2020. All rights reserved.
        </div>
        </form>

    </div>

        <script src="" async defer></script>
    </body>
</html>
