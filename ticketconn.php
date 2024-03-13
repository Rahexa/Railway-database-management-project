<?php
session_start();

// Replace placeholders with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway_database";

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if user is not logged in
    exit;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];

// Fetch booking information of the logged-in user from the database
$sql = "SELECT booking.*, TrainRoutes.TrainName, TrainRoutes.DepartureTime
        FROM booking
        JOIN TrainRoutes ON booking.train_no = TrainRoutes.TrainNo
        WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Display data as ticket receipts
    while ($row = $result->fetch_assoc()) {
        echo "<div class='ticket'>";
        echo "<h2>Ticket Receipt</h2>";
        echo "<div class='ticket-info'>";
        echo "<p><strong>Ticket No:</strong> " . $row["Booking_number"] . "</p>"; // Display the ticket number
        echo "<p><strong>Name:</strong> " . $row["Name"] . "</p>";
        echo "<p><strong>Age:</strong> " . $row["Age"] . "</p>";
        echo "<p><strong>Sex:</strong> " . $row["sex"] . "</p>";
        echo "<p><strong>Date of Journey:</strong> " . $row["Date_of_Journey"] . "</p>";
        echo "</div>";
        echo "<div class='ticket-info'>";
        echo "<p><strong>From Station:</strong> " . $row["from_station"] . "</p>";
        echo "<p><strong>To Station:</strong> " . $row["to_station"] . "</p>";
        echo "<p><strong>Class:</strong> " . $row["Class"] . "</p>"; // Assuming 'Class' is the correct column name
        echo "<p><strong>Ticket Type:</strong> " . $row["Ticket_Type"] . "</p>";
        echo "<p><strong>Status:</strong> " . $row["Status"] . "</p>";
        echo "</div>";
        echo "<div class='ticket-info'>";
        echo "<p><strong>Train No:</strong> " . $row["train_no"] . "</p>";
        echo "<p><strong>Train Name:</strong> " . $row["TrainName"] . "</p>";
        echo "<p><strong>Journey Type:</strong> " . $row["Journey_Type"] . "</p>";
        echo "<p><strong>Time of Departure:</strong> " . $row["DepartureTime"] . "</p>";
        echo "</div>";
        // Add download link for each ticket
        echo "<div class='download-link'>";
        echo "<a href='download.php?booking_number=" . $row["Booking_number"] . "'>Download Ticket</a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No bookings found for the logged-in user.";
}

$stmt->close();
$conn->close();
?>
