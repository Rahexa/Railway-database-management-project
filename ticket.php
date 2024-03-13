<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Receipt</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Set background color for the entire page */
            font-family: Arial, sans-serif;
        }
        .ticket-form {
            border: 1px dashed #000;
            width: 60%;
            padding: 5px;
            margin: 50px auto;
            box-sizing: border-box;
            background-color: #fff; /* Set background color for the form */
        }
        .ticket-form h2 {
            text-align: center;
            margin-bottom: 10px;
        }
        .ticket-info {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }
        .ticket-info p {
            width: 20%;
            margin: 2px 0;
            border-bottom: 1px dashed #000;
            padding: 3px 0;
        }
        .message-container {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <?php
    session_start();

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

    // Retrieve logged-in user ID from session
    $user_id = $_SESSION['user_id'];

    // Fetch booking information for the logged-in user from the database
    $sql = "SELECT booking.*, TrainRoutes.TrainName, TrainRoutes.DepartureTime
            FROM booking
            JOIN TrainRoutes ON booking.train_no = TrainRoutes.TrainNo
            WHERE booking.user_id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display data as ticket receipts
        while($row = $result->fetch_assoc()) {
            echo "<div class='ticket-form'>";
            echo "<h2>Ticket Receipt</h2>";
            echo "<div class='ticket-info'>";
            echo "<p><strong>Ticket No:</strong> " . $row["Booking_number"] . "</p>";
            echo "<p><strong>Name:</strong> " . $row["Name"] . "</p>";
            echo "<p><strong>Age:</strong> " . $row["Age"] . "</p>";
            echo "<p><strong>Sex:</strong> " . $row["sex"] . "</p>";
            echo "<p><strong>Date of Journey:</strong> " . $row["Date_of_Journey"] . "</p>";
            echo "</div>";
            echo "<div class='ticket-info'>";
            echo "<p><strong>From Station:</strong> " . $row["from_station"] . "</p>";
            echo "<p><strong>To Station:</strong> " . $row["to_station"] . "</p>";
            echo "<p><strong>Class:</strong> " . $row["class"] . "</p>";
            echo "<p><strong>Ticket Type:</strong> " . $row["Ticket_Type"] . "</p>";
            echo "<p><strong>Status:</strong> " . $row["Status"] . "</p>";
            echo "</div>";
            echo "<div class='ticket-info'>";
            echo "<p><strong>Train No:</strong> " . $row["train_no"] . "</p>";
            echo "<p><strong>Train Name:</strong> " . $row["TrainName"] . "</p>";
            echo "<p><strong>Journey Type:</strong> " . $row["Journey_Type"] . "</p>";
            echo "<p><strong>Time of Departure:</strong> " . $row["DepartureTime"] . "</p>";
            // Add download link for the ticket
            echo "<p><a href='download.php?booking_number=" . $row["Booking_number"] . "'>Download Ticket</a></p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<div class='message-container'>";
        echo "<p>No bookings found for the logged-in user.</p>";
        echo "</div>";
    }

    $conn->close();
    ?>
</body>
</html>
