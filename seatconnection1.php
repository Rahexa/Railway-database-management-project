<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
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

    // Get the submitted train number and class
    $trainNo = $_POST["Train_No"];
    $selectedClass = $_POST["selectedClass"];

    // Assuming a fixed total number of seats
    $totalSeats = 200;

    // Prepare SQL statement to count the total seats booked for the selected class
    $sql = "SELECT COUNT(*) AS total FROM booking WHERE Train_No = ? AND Class = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $trainNo, $selectedClass);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $totalSeatsBooked = $row['total'];

    // Calculate the available seats
    $availableSeats = $totalSeats - $totalSeatsBooked;

    // Close statement and connection
    $stmt->close();
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Availability</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.pexels.com/photos/5098046/pexels-photo-5098046.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: 500px;
        }

        .header-box {
            background-color: rgba(0, 0, 0, 0.6);
            margin: auto auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 15px #000;
            position: absolute;
            top: 130px;
            left: 50%;
            transform: translateX(-50%);
        }

        .header-box h2 {
            text-align: center;
            color: white;
            margin: 0;
        }

        form {
            background-color: rgba(0, 0, 0, 0.5);
            margin: auto auto;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 15px #000;
            position: absolute;
            top: 120px;
            bottom: 0;
            left: 0;
            right: 0;
            width: 400px;
            height: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: black;
        }

        input[type="text"]:read-only {
            background-color: #f0f0f0;
            color: black;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: black;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        button {
            margin-top: 40px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="header-box">
        <h2>Seat Availability</h2>
    </div>
    <form>
        <label for="totalSeats">Total Seats:</label>
        <input type="text" id="totalSeats" name="totalSeats" value="<?php echo $totalSeats; ?>" readonly>
        <label for="bookedSeats">Booked Seats:</label>
        <input type="text" id="bookedSeats" name="bookedSeats" value="<?php echo $totalSeatsBooked; ?>" readonly>
        <label for="availableSeats">Available Seats:</label>
        <input type="text" id="availableSeats" name="availableSeats" value="<?php echo $availableSeats; ?>" readonly>

        <a href="home.php" class="return-home-link"><b>Back to Home</b></a>
    </form>
</body>
</html>




<?php
}
?>
