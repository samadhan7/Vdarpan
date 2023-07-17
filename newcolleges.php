<?php
session_start();

$value = isset($_GET['value']) ? $_GET['value'] : '';
if($value==1){
?>


<?php
$_SESSION["val"] = 1;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Colleges</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by college name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">Colleges</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>
</body>
</html>
<!--html code end-->



<?php
}elseif($value==2){

?>


<!-- html code -->
<?php
$_SESSION["val"] = 2;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Consultant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by consultant name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">Consultant</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>
</body>
</html>
<!-- html code end -->

<?php
}elseif($value==3){

?>

<!-- html code -->
<?php
$_SESSION["val"] = 3;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contractors</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by Contractors name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">Contractors</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>
</body>
</html>
<!-- html code end -->






<?php
}elseif($value==4){
?>



<?php
$_SESSION["val"] = 4;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Groceries</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by Groceries name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">Groceries</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>



<?php
}elseif($value==5){
?>



<?php
$_SESSION["val"] = 5;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Gyms</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by college name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">Gyms</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>



<?php
}elseif($value==6){

?>
<!-- html code -->
<?php
$_SESSION["val"] = 6;
?>

<!DOCTYPE html>
<html>
<head>
  <title>laptop Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by laptop services name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">laptopservices</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>
</body>
</html>
<!-- html code end -->



<?php
}elseif($value==7){
?>




<!-- html code -->
<?php
$_SESSION["val"] = 7;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by home services name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">home services</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>
</body>
</html>
<!-- html code end -->




<?php
}elseif($value==8){
?>

<!-- html code -->
<?php
$_SESSION["val"] = 8;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Car Rent</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by car renters name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">car rent</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>
</body>
</html>
<!-- html code end -->





<?php
}elseif($value==9){
?>

<!-- html code -->
<?php
$_SESSION["val"] = 9;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Paying Guest</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by Paying Guest name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">Paying Guest</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>
</body>
</html>
<!-- html code end -->



<?php
} elseif ($value == 10) {
?>


<!-- html code -->
<?php
$_SESSION["val"] = 10;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Travels</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by Travels name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">car rent</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>
</body>
</html>
<!-- html code end -->



<?php
} elseif ($value == 11) {
?>

<?php
$_SESSION["val"] = 11;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Event Organizer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by event organizer name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">event organizer </h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>



<?php
} elseif ($value == 12) {
?>

<?php
$_SESSION["val"] = 12;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Coaching</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by Coaching name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">Coaching</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>

<?php
} elseif ($value == 13) {
?>


<?php
$_SESSION["val"] = 13;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Transport</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by transport name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">Transports</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>

<?php
} elseif ($value == 14) {
?>

<?php
$_SESSION["val"] = 14;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Restauran</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by restaurant name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">Restaurant</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>

<?php
} elseif ($value == 15) {
?>

<?php
$_SESSION["val"] = 15;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Car Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by car services name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">car services</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>

<?php
} elseif ($value == 16) {
?>



<?php
$_SESSION["val"] = 16;
?>

<!DOCTYPE html>
<html>
<head>
  <title>chartered accountant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by CA name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">chartered accountants</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>

<?php
} elseif ($value == 17) {
?>



<?php
$_SESSION["val"] = 17;
?>

<!DOCTYPE html>
<html>
<head>
  <title>beauty parlours</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by parlour name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">beauty parlours</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>

<?php
} elseif ($value == 18) {
?>



<?php
$_SESSION["val"] = 18;
?>

<!DOCTYPE html>
<html>
<head>
  <title>photographers</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by photographer name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">photographer</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>





<?php
 }elseif ($value == 19) {
?>



<?php
$_SESSION["val"] = 19;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Electrician</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <style>
      body {
    margin: 0;
    padding: 0;
  }

    /* Your custom CSS styles here */
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%; /* Add this line to make the image width cover the block */
    }

    #city {
      width: 100px;
    }

    #search {
      width: 400px;
      margin-left: 2px;
    }

    form {
      display: flex;
      padding-top: 15px;
      border-radius: 10px;
      color: black;
    }
    


  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffcc ;
    padding: 10px;
    z-index: 999;

    background-color: #ffffcc; /* Set your desired background color */
    padding: 10px 20px; /* Adjust the padding as needed */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    height: 8%;
  }
  nav a {
    color: #fff; /* Set your desired link color */
    text-decoration: none;
    margin-right: 10px;
  }
  .navbar-left,
  .navbar-right {
    display: flex;
    align-items: center;
  }

  .navbar-left {
    flex-grow: 1;
  }

  .navbar-right {
    display: flex;
    align-items: center;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="navbar-left">
      <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
    </div>



    <form>
  

      <div class="form-group" id="city">
        <select class="form-control" id="city" onchange="searchColleges()">
          <option value="">All</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Pune">Pune</option>

          <option value="Ahmednagar">Ahmednagar</option>
          <option value="Nashik">Nashik</option>
          <option value="Thane">Thane</option>


        </select>
      </div>


      <div class="form-group" id="seahh">
        <input type="text" class="form-control" id="search" placeholder="Search by electriciane name...">
      </div>

    </form>

    <div class="navbar-right">
      <select id="styling" id="lang">
        <option value="Select Language">Select Language</option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Marathi">Marathi</option>
        <option value="Other">Other</option>
      </select>
      <a href="listing.html" class="no-underline" id="styling" href="#">Free Listing</a>
      <a id="styling" class="no-underline" href="advertisement.html">Advertise</a>

      <a href="register.html" class="no-underline" id="styling" href="#">Alert</a>

      <a id="styling" class="no-underline" href="aboutus.html">About Us</a>





      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Sign-In</option>
        <option value="newusersign.html">User</option>
        <option value="newadminsign.html">Admin</option>
      </select>



      <select onchange="window.location.href=this.value" id="styling" id="lang">
        <option value="">Login</option>
        <option value="userlogin.php">User</option>
        <option value="adminlogin.php">Admin</option>
      </select>





  </nav>
<br>
<br>

<h1 class="text-center my-4" style="font-family: sans-serif;">photographer</h1>

<div class="container">
  <div class="row" id="collegeList">
    <!-- College list will be dynamically loaded here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  // Function to fetch and display all colleges when the page loads
  $(document).ready(function() {
    searchColleges(); // Call the searchColleges function to fetch all colleges
  });

  function searchColleges() {
    var city = document.getElementById("city").value;
    var search = document.getElementById("search").value;

    // Send an AJAX request to the server to fetch filtered colleges
    $.ajax({
     
      url: "fetch_colleges.php",
      type: "POST",
      data: { city: city, search: search },
      success: function (response) {
        // Replace the HTML content of the college list with the filtered results
        $("#collegeList").html(response);
      }
    });
  }

  function redirectToWebsite(url) {
    window.location.href = url;
  }
</script>





</body>
</html>

<?php
}else{

  echo "error in newcolleges.php";
}

?>