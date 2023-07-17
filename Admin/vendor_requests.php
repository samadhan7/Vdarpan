<?php 

include '../db/database.php'; // Include the file containing the Database class

// Check if the admin is logged in or has appropriate privileges
// You can add your authentication and authorization logic here

// Retrieve all vendor requests from the database
$vendorRequests = $database->readVendorRequests();

// Handle the actions on vendor requests (approve/reject)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['approve'])) {
        $requestID = $_POST['approve'];
        $database->approveVendorRequest($requestID);
        header("Location: vendor_requests.php"); // Redirect to the admin page
        
    } elseif (isset($_POST['reject'])) {
        $requestID = $_POST['reject']; // <-- Fixed variable name
        $database->rejectVendorRequest($requestID);
        header("Location: vendor_requests.php"); // Redirect to the admin page
        
    }
}

$database->close_db(); // Close the database connection
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New vendors requests</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .btn-approve {
            margin-right: 5px;
        }
        .btn-reject {
            margin-left: 5px;
        }
        .action-buttons {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Vendor Requests</h1>

        <?php if (mysqli_num_rows($vendorRequests) > 0) : ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Organization Name</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact No</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($vendorRequests)) : ?>
                        <tr>
                            <td><?php echo $row['org_name']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['contact_no']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                                <div class="action-buttons">
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <input type="hidden" name="approve" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class="btn btn-success btn-approve">Approve</button>
                                    </form>
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <input type="hidden" name="reject" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class="btn btn-danger btn-reject">Reject</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p class="text-center">No vendor requests found.</p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>