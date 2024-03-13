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

// Check if the booking number is provided in the URL
if(isset($_GET['booking_number'])) {
    // Retrieve the booking number from the URL query string
    $booking_number = $_GET['booking_number'];
    
    // Fetch ticket data from the database based on the booking number
    $sql = "SELECT booking.*, TrainRoutes.TrainName, TrainRoutes.DepartureTime
            FROM booking
            JOIN TrainRoutes ON booking.train_no = TrainRoutes.TrainNo
            WHERE booking.Booking_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $booking_number);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0) {
        // Fetch the row
        $row = $result->fetch_assoc();
        
        // Generate HTML content for the ticket
        $ticket_content = "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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
                <div class='ticket-form'>
                    <h2>Ticket Receipt</h2>
                    <div class='ticket-info'>
                        <p><strong>Ticket No:</strong> " . $row["Booking_number"] . "</p>
                        <p><strong>Name:</strong> " . $row["Name"] . "</p>
                        <p><strong>Age:</strong> " . $row["Age"] . "</p>
                        <p><strong>Sex:</strong> " . $row["sex"] . "</p>
                        <p><strong>Date of Journey:</strong> " . $row["Date_of_Journey"] . "</p>
                    </div>
                    <div class='ticket-info'>
                        <p><strong>From Station:</strong> " . $row["from_station"] . "</p>
                        <p><strong>To Station:</strong> " . $row["to_station"] . "</p>
                        <p><strong>Class:</strong> " . $row["class"] . "</p>
                        <p><strong>Ticket Type:</strong> " . $row["Ticket_Type"] . "</p>
                        <p><strong>Status:</strong> " . $row["Status"] . "</p>
                    </div>
                    <div class='ticket-info'>
                        <p><strong>Train No:</strong> " . $row["train_no"] . "</p>
                        <p><strong>Train Name:</strong> " . ($row["TrainName"] ?? "N/A") . "</p>
                        <p><strong>Journey Type:</strong> " . $row["Journey_Type"] . "</p>
                        <p><strong>Time of Departure:</strong> " . ($row["DepartureTime"] ?? "N/A") . "</p>
                    </div>
                    <!-- Add more ticket details as needed -->
                </div>
            </body>
            </html>";

        // Set appropriate headers for file download
        header('Content-Type: text/html');
        header('Content-Disposition: attachment; filename="ticket_'.$booking_number.'.html"');
        
        // Output the ticket content
        echo $ticket_content;
    } else {
        echo "Ticket not found.";
    }
    
    // Close the prepared statement and database connection
    $stmt->close();
} else {
    // If booking number is not provided, show an error message or redirect
    echo "Booking number not provided.";
}

// Close the database connection
$conn->close();
?>
