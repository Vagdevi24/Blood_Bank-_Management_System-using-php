<?php
include("basic.php");

// Check if mobile number is provided in the URL parameters
if(isset($_GET['mobile'])) {
    // Sanitize the input to prevent SQL injection
    $mobile = mysqli_real_escape_string($conn, $_GET['mobile']);

    // Prepare the delete query
    $sql = "DELETE FROM requestblood WHERE Mobile='$mobile'";

    // Execute the delete query
    if(mysqli_query($conn, $sql)) {
        // If deletion is successful, redirect back to the donor details page
        header("Location: admin_request.php");
        exit();
    } else {
        // If there's an error, display the error message
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // If mobile number is not provided in the URL parameters, display an error message
    echo "Mobile number not provided.";
}

// Close the database connection
$conn->close();
?>
