<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "railway_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $marital_status = $_POST["marital_status"];
    $dob = $_POST["dob"];
    $mobile = $_POST["mobile"];

    // Perform SQL insert
    $sql = "INSERT INTO users (first_name, last_name, email, password, gender, marital_status, dob, mobile) 
            VALUES ('$first_name', '$last_name', '$email', '$password', '$gender', '$marital_status', '$dob', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to signup form with success parameter
        header("Location: re.php?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection when done
$conn->close();
?>
