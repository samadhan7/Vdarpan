<?php
require_once '../db/database.php';

$message = ''; // Variable to store the status message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $contactNumber = $_POST['contactNumber'];

    if ($password !== $confirmPassword) {
        $message = "Password and confirm password do not match";
    } else {
        $database = new Database();
        $result = $database->createVendor($name, $email, $password, $contactNumber);

        if ($result === true) {
            $message = "Account created go to login page";
        } else if ($result === "pending") {
            $message = "Please make a listing request to the admin and wait for approval";
        } else {
            $message = "Failed to create account";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vendor Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div
            class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-sd-3 offset-lg-4"
          >
            <h1 class="mb-3 text-center">Sign Up</h1>
            
            <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo ($result === true) ? 'success' : 'danger'; ?>" role="alert">
              <?php echo $message; ?>
            </div>
            <?php endif; ?>

            <form class="mb-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <input type="hidden" name="action" value="create_vendor"> 

              <div class="form-group">
                <label for="name">Name:</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter your name"
                  id="name"
                  name="name"
                  required
                />
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  placeholder="example@email.com"
                  id="email"
                  name="email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  required
                />
              </div>
              <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input
                  type="password"
                  class="form-control"
                  id="confirmPassword"
                  name="confirmPassword"
                  required
                />
              </div>
              <div class="form-group">
                <label for="contactNumber">Contact Number:</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter the number used for listing request"
                  id="contactNumber"
                  name="contactNumber"
                  required
                />
                <small class="form-text text-muted">
                  Enter the same contact number used for the listing request to the admin.
                </small>
              </div>
              <button type="submit" class="btn btn-primary btn-block">
                Create account
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
