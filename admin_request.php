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

<center><h2>Requested Blood Details</h2></center>

<?php
    // Prepare SQL statement to retrieve details based on blood group
    $sql = "SELECT * FROM requestblood";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display table header
        echo "<table>";
        echo "<tr><th>MobieNumber</th><th>BloodGroup</th><th>Reason</th><th>Action</th></tr>";

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $mob=$row["Mobile"];
            echo "<tr>";
            
            echo "<td>" . $row["Mobile"] . "</td>";
            echo "<td>" . $row["Bloodgroup"] . "</td>";
            echo "<td>" . $row["Reason"] . "</td>";
            echo "<td><a href='del.php?mobile=" . $row["Mobile"] . "'><button>Cancel</button></a></td>";
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
