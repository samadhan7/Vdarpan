<?php
require_once 'db1.php';

    // Get admin ID from URL parameter
    $id = $_GET["id"];

    // Delete admin from newadminsign table
    $sql = "DELETE FROM newadminsign WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Admin deleted successfully";
    } else {
        echo "Error deleting admin: " . $conn->error;
    }

    $conn->close();
?>
