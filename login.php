<?php
// Start session
include("basic.php");
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["pwd"];


        // Prepare and bind the query
        $sql = "SELECT * FROM signup WHERE email ='$email'";
        $result=mysqli_query($conn,$sql);

        // Check if user exists
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            
            // Verify password
            if ($password == $row["Password"]) {
                // Authentication successful, set session variable and redirect to dashboard
                $_SESSION["email"] = $email;
                $_SESSION["username"] = $row["Name"];
                header("Location: index.php");
                exit; // Ensure script stops execution after redirect
            } else {
                // Password is incorrect
                echo "Incorrect password!";
                header("Location: login.html");
                exit; // Ensure script stops execution after redirect
            }
        } else {
            // User does not exist
            echo "User not found!";
        }

        // Close statement and connection
        mysqli_close($conn);
    }

?>