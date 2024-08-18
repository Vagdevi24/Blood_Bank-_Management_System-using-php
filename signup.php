<?php
include("basic.php");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pwd'];

$sql = "INSERT INTO signup (Name, Email, Password) VALUES ('$name', '$email', '$pass')";

try {
    if(mysqli_query($conn, $sql)) {
        // Display a success message with JavaScript dialog box
        echo '<script>alert("You have signed up successfully."); window.location.href = "login.html";</script>';
    } else {
        throw new Exception("Error inserting record: " . mysqli_error($conn));
    }
} catch(Exception $e) {
    // Redirect to sign.html with an error parameter
    header('Location: sign.html?error=email_exists');
    exit;
}

mysqli_close($conn); // Close the database connection
?>
