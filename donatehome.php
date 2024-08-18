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
<html>
<head>
<title>Blood Donation Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #bf0000; /* Red background */
        margin: 0;
        padding: 0;
    }
    
    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        text-align: center;
        color: #bf0000;
        font-size: 28px;
        margin-bottom: 20px;
    }
    
    p {
        text-align: center;
        font-style: italic;
        color: #666;
        margin-bottom: 30px;
    }
    
    label {
        font-weight: bold;
        color: #333;
        display: block;
        margin-bottom: 8px;
    }
    
    input[type="text"],
    input[type="tel"],
    input[type="email"],
    select,
    textarea {
        width: calc(100% - 22px);
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="tel"]:focus,
    input[type="email"]:focus,
    select:focus,
    textarea:focus {
        outline: none;
        border-color: #bf0000;
    }
    
    select {
        appearance: none;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23bf0000"><path d="M7 10l5 5 5-5z"/></svg>') no-repeat right #fff;
        background-size: 20px;
        padding-right: 30px;
    }
    
    textarea {
        resize: vertical;
        min-height: 100px;
    }
    
    input[type="submit"] {
        background-color: #bf0000;
        color: white;
        padding: 14px 20px;
        margin: 20px 0 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
    }
    
    input[type="submit"]:hover {
        background-color: #800000;
    }
</style>
</head>
<body>

<div class="container">
    <h1>Blood Donation Form</h1>
    <p>"Donate Blood, Save Lives!"</p>
    <form action="donate.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required>
        
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        
        <label for="bloodgroup">Blood Group:</label>
        <select id="bloodgroup" name="bloodgroup" required>
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>
        
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
