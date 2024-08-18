<?php
include("basic.php");
$name = $_POST['name'];
$mobile=$_POST['mobile'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$bg = $_POST['bloodgroup'];
$addr = $_POST['address'];


$sql = "INSERT INTO donateblood VALUES ('$name', '$mobile', '$email','$age','$gender','$bg','$addr')";

    if(mysqli_query($conn, $sql)) {
        // Display a success message with JavaScript dialog box
        echo '<script>alert(" successfully Submitted."); window.location.href = "index.php";</script>';
    } 

mysqli_close($conn); // Close the database connection
?>