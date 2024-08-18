<?php
include("basic.php");

$name = $_POST['Fname'];
$email = $_POST['Email'];
$mobile=$_POST['mb'];
$msg=$_POST['msg'];
$sql = "INSERT INTO contact VALUES ('$name', '$email', '$mobile','$msg')";


    if(mysqli_query($conn, $sql)) {
        // Display a success message with JavaScript dialog box
        echo '<script>alert("submitted successfully."); window.location.href = "index.php";</script>';
    } else {
        throw new Exception("Error inserting record: " . mysqli_error($conn));
    }


mysqli_close($conn); // Close the database connection
?>
