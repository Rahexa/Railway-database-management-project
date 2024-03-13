<?php
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

// Prepare a SQL statement with placeholders
$sql = "INSERT INTO booking (Name, Booking_number, Class, from_station, to_station, Age, Sex, Status, Date_of_Journey, Journey_Type, Ticket_Type, train_no, user_id, Booked_time)
        VALUES (?, NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Retrieve form data
$name = $_POST["name"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$from = $_POST["from"];
$to = $_POST["to"];
$date = $_POST["date"];
$journeyType = $_POST["journeyType"];
$class = $_POST["class"];
$ticketType = $_POST["ticketType"];

// Retrieve logged-in user ID from session
session_start();
$user_id = $_SESSION['user_id'];

// Determine train number based on station pair
if ($from == "Dhaka Junction" && $to == "Chittagong Central") {
    $trainNo = 1020;

} 
else if ($from == "Chittagong Central" && $to == "Dhaka Junction") {
    $trainNo = 1030;
    
} 
else if ($from == "Chittagong Central" && $to == "Rajshahi Station") {
    $trainNo = 1040;
    
} 
else if ($from == "Dhaka Junction" && $to == "Khulna Terminal") {
    $trainNo = 1050;
    
} 
else if ($from == "Dhaka Junction" && $to == "Rajshahi Station") {
    $trainNo = 1060;
    
} 
else if ($from == "Dhaka Junction" && $to == "Sylhet Junction") {
    $trainNo = 1070;
    
} 
else if ($from == "Dhaka Junction" && $to == "Barisal Central") {
    $trainNo = 1080;
    
} 
else if ($from == "Dhaka Junction" && $to == "Rangpur Terminal") {
    $trainNo = 1090;
    
} 
else if ($from == "Dhaka Junction" && $to == "Comilla Junction") {
    $trainNo = 2000;
    
} 
else if ($from == "Dhaka Junction" && $to == "Mymensingh Central") {
    $trainNo = 2010;
    
} 
else if ($from == "Dhaka Junction" && $to == "Jessore Station") {
    $trainNo = 2020;
    
} 
else if ($from == "Chittagong Central" && $to == "Khulna Terminal") {
    $trainNo = 2010;
    
} 
else if ($from == "Chittagong Central" && $to == "Rajshahi Station") {
    $trainNo = 2000;
    
} 
else if ($from == "Chittagong Central" && $to == "Sylhet Junction") {
    $trainNo = 1080;
    
} 
else if ($from == "Chittagong Central" && $to == "Rangpur Terminal") {
    $trainNo = 1070;
    
} 
else if ($from == "Chittagong Central" && $to == "Comilla Junction") {
    $trainNo = 1060;
    
} 
else if ($from == "Chittagong Central" && $to == "Jessore Station") {
    $trainNo = 1050;
    
} 
else if ($from == "Rajshahi Station" && $to == "Dhaka Junction") {
    $trainNo = 1040;
    
} 
else if ($from == "Rajshahi Station" && $to == "Chittagong Central") {
    $trainNo = 1050;
    
}
else if ($from == "Rajshahi Station" && $to == "Khulna Terminal") {
    $trainNo = 1060;
    
}
else if ($from == "Rajshahi Station" && $to == "Jessore Station") {
    $trainNo = 1070;
    
}
else if ($from == "Rajshahi Station" && $to == "Sylhet Junction") {
    $trainNo = 1080;
    
}
else if ($from == "Rajshahi Station" && $to == "Rangpur Terminal") {
    $trainNo = 1090;
    
}
else if ($from == "Rajshahi Station" && $to == "Comilla Junction") {
    $trainNo = 2000;
    
}
else if ($from == "Sylhet Junction" && $to == "Dhaka Junction") {
    $trainNo = 1030;
    
}
else if ($from == "Sylhet Junction" && $to == "Barisal Central") {
    $trainNo = 1040;
    
}
else if ($from == "Sylhet Junction" && $to == "Chittagong Central") {
    $trainNo = 1050;
    
}
else if ($from == "Sylhet Junction" && $to == "Khulna Terminal") {
    $trainNo = 1060;
    
}
else if ($from == "Sylhet Junction" && $to == "Jessore Station") {
    $trainNo = 1070;
    
}
else if ($from == "Sylhet Junction" && $to == "Rangpur Terminal") {
    $trainNo = 1080;
    
}
else if ($from == "Sylhet Junction" && $to == "Comilla Junction") {
    $trainNo = 1090;
    
}
else if ($from == "Jessore Station" && $to == "Dhaka Junction") {
    $trainNo = 1060;
    
} 
else if ($from == "Jessore Station" && $to == "Chittagong Central") {
    $trainNo = 1070;
    
} 
else if ($from == "Jessore Station" && $to == "Rajshahi Station") {
    $trainNo = 1080;
    
} 
else if ($from == "Jessore Station" && $to == "Khulna Terminal") {
    $trainNo = 1090;
    
} 
else if ($from == "Jessore Station" && $to == "Jessore Station") {
    $trainNo = 2000;
    
} 
else if ($from == "Jessore Station" && $to == "Rangpur Terminal") {
    $trainNo = 2010;
    
} 
else if ($from == "Jessore Station" && $to == "Comilla Junction") {
    $trainNo = 2020;
    
}  else {
    // If the station pair is not specified, you can set it to a default value or handle it as needed
    $trainNo = "Unknown";
}

// Status (assuming "booked" status)
$status = "booked";

// Get the current time for Booked_time
$booked_time = date('H:i:s');

// Bind parameters to the prepared statement
$stmt->bind_param("ssssissssssss", $name, $class, $from, $to, $age, $sex, $status, $date, $journeyType, $ticketType, $trainNo, $user_id, $booked_time);

// Execute the prepared statement
if ($stmt->execute()) {
    // Redirect back to the booking form page with success status
    header("Location: bookingnot.php#?status=success");
    exit(); // Ensure that subsequent code is not executed after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
