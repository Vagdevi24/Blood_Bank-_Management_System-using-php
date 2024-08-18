<?php
    $Name = $_POST["uname"];
    $Password = $_POST["pass"];

    if($Name === "vagdevi" && $Password === "vagdevi") {
?>
        
<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>
  <style>
   
  body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
  }
  
  /* Basic page layout */
  header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
  }
  
  nav {
    background-color: #f0f0f0;
    padding: 10px;
  }
  
  nav ul {
    list-style-type: none;
    text-align: center;
  }
  
  nav ul li {
    display: inline;
    margin-right: 10px;
  }
  
  nav ul li a {
    text-decoration: none;
    color: #333;
    padding: 12px;
  }
  
  nav ul li a.active {
    background-color: #333;
    color: #fff;
  }
  
  section {
    padding: 250px;
    text-align: center;
  }
  
  footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
  }
  .btn{
        background-color:peru;
        color: black;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      .btn:hover{
         background-color:antiquewhite;
      }
  </style>
  
</head>
<body>
 
  <header>
    <h1>Blood Bank Admin</h1>
  </header>
  
  <nav>
    <ul>
      <li><a href="#" class="active">Dashboard</a></li>
      <li><a href="admin_donation.php">Donations</a></li>
      <li><a href="admin_request.php">Requests For Blood</a></li>
      <li><a href="admin_users.php">Users</a></li>
      <li><a href="admin_contact.php">Contacts</a></li>
      <li><a href="logout.php" class="btn">Logout</a></li>
    </ul>
  </nav>
  
  <section>
    <h2>Welcome, Administrator!</h2>
    <p>Here, you can manage various aspects of your blood bank.</p>
  </section>

  <footer>
    <p>&copy; 2023 Your Blood Bank Website. All rights reserved.</p>
  </footer>
</body>
</html>

<?php        
    } else {
        echo "<script>alert('Invalid Username or Password. Please try again')</script>";
        include 'admin.html';
    }
?>
