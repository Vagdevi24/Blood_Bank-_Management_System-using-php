<?php
include("basic.php");
?>
<html>
<head>
<title>User Details</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<center><h2>User Details</h2></center>

<?php
    // Prepare SQL statement to retrieve details based on blood group
    $sql = "SELECT * FROM signup";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display table header
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th></tr>";

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
 


$conn->close();
?>

</body>
</html>
