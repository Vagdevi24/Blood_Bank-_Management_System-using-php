<?php
session_start();

// Check if session is empty
if (empty($_SESSION)) {
    // Redirect user to login page
    echo '<script>alert("You have not Logged In...Login first."); window.location.href = "login.html";</script>';
    
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Request Blood Form</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .container {
    width: 350px;
    background-color: rgba(255, 0, 0, 0.8);
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
  h1 {
    text-align: center;
    color: white;
  }
  input[type="tel"],
  select,
  textarea {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-sizing: border-box;
    background-color: #ffffff;
  }
  select:focus,
  textarea:focus,
  input[type="tel"]:focus {
    outline: none;
    background-color: #f2f2f2;
  }
  textarea {
    resize: vertical;
    min-height: 100px;
  }
  input[type="submit"] {
    background-color: #cc0000;
    color: white;
    padding: 14px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s;
  }
  input[type="submit"]:hover {
    background-color: #990000;
  }
  .footer {
    text-align: center;
    color: white;
    margin-top: 20px;
  }
</style>
</head>
<body>

<div class="container">
  <h1>Request Blood</h1>
  <form action="look.php" method="post">
    <label for="mobile">Mobile Number:</label>
    <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number..." required>
    
    <label for="bloodgroup">Required Blood Group:</label>
    <select id="bloodgroup" name="bloodgroup" required>
      <option value="">Select Blood Group</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>
    
    <label for="reason">Reason for Request:</label>
    <textarea id="reason" name="reason" placeholder="Tell us why you need blood..." required></textarea>
    
    <input type="submit" value="Search">
  </form>
  <div class="footer">
    <p>Help us save lives.</p>
  </div>
</div>

</body>
</html>
