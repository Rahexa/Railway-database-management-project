<?php
// Replace placeholders with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch train information from the database
$sql = "SELECT * FROM TrainRoutes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train List</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('https://volumezeroltd.com/wp-content/uploads/2022/02/Coxs-Bazaar-Railway-Station-14.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: white; /* Set the default text color to white */
}

.container {
    width: 80%;
    margin: 0 auto;
    padding-top: 50px;
}

h2 {
    text-align: center;
    background-color: rgba(255, 255, 255, 0.5); /* Background color with transparency */
    color: white; /* Text color for the heading */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: rgba(0, 0, 0, 0.5); /* Background color with transparency */
}

th,
td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
    color: white; /* Text color for table cells */
}

th {
    background-color: #151B4F;
}

    </style>
</head>

<body>
    <div class="container">
        <h2>Train List</h2>
        <table>
            <tr>
                <th>Train No</th>
                <th>Train Name</th>
                <th>Departure Station</th>
                <th>Departure Time</th>
                <th>Arrival Station</th>
                <th>Arrival Time</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["TrainNo"] . "</td>";
                    echo "<td>" . $row["TrainName"] . "</td>";
                    echo "<td>" . $row["DepartureStation"] . "</td>";
                    echo "<td>" . $row["DepartureTime"] . "</td>";
                    echo "<td>" . $row["ArrivalStation"] . "</td>";
                    echo "<td>" . $row["ArrivalTime"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No trains found</td></tr>";
            }
            ?>
        </table>
    <div style="text-align: center; margin-top: 20px;">
    <a href="home.php" class="return-home-link" style="color: #ffffff; font-size: 20px;"><b>Back to Home</b></a>
    
</div>
    </div>
</body>

</html>

<?php
// Close connection
$conn->close();
?>
