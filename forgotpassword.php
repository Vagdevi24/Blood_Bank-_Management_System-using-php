<?php
include("basic.php");
$pass=$_POST['pass'];
$email=$_POST['email'];
$sq = "UPDATE signup set Password='$pass' where Email='$email'";

if(mysqli_query($conn, $sq)) {
    // Display a success message with JavaScript dialog box
    echo '<script>alert("Password Updated successfully."); window.location.href = "login.html";</script>';
}
?>
