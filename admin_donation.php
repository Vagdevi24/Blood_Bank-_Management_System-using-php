<?php
include("basic.php");
?>
<html>
<head>
<title>Donor Details</title>
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

<center><h2>Donor Details</h2></center>

<?php
    // Prepare SQL statement to retrieve details based on blood group
    $sql = "SELECT * FROM donateblood";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display table header
        echo "<table>";
        echo "<tr><th>Name</th><th>Mobile Number</th><th>Email</th><th>Age</th><th>Gender</th><th>Blood Group</th><th>Address</th></tr>";

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Mobile"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Age"] . "</td>";
            echo "<td>" . $row["Gender"] . "</td>";
            echo "<td>" . $row["Bloodgroup"] . "</td>";
            echo "<td>" . $row["Address"] . "</td>";
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
