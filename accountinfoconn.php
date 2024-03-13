<?php
// Check if a session is not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Database connection parameters
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

// Initialize variables
$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$marital_status = '';
$dob = '';
$mobile = '';

// Fetch user information from the database
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows == 1) {
    // Fetch user data
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $gender = $row['gender'];
    $marital_status = $row['marital_status'];
    $dob = $row['dob'];
    $mobile = $row['mobile'];
} else {
    // User not found, redirect with error message
    $_SESSION['update_error'] = "User not found.";
    header("Location: accountinfo.php");
    exit;
}

// Check if the form is submitted for updating user information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input data from the form submission
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];

    // Check if new password and confirm new password are provided and match
   // Check if new password and confirm new password are provided and match
if (!empty($_POST['password']) && !empty($_POST['confirm_password'])) {
    if ($_POST['password'] === $_POST['confirm_password']) {
        // Update user password in the database
        $new_password = $_POST['password'];

        $sql = "UPDATE users SET password = ? WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $new_password, $user_id);

        if ($stmt->execute()) {
            // Password updated successfully
            $_SESSION['update_success'] = true;
        } else {
            // Error updating password
            $_SESSION['update_error'] = "Error updating password.";
        }
    } else {
        // Set error message if passwords don't match
        $_SESSION['password_error'] = "New password and confirm password must be the same.";
    }
} else {
    // Set error message if passwords are empty
    $_SESSION['password_error'] = "Please enter both new password and confirm password.";
}


    // Update other user information in the database
    $sql = "UPDATE users SET first_name = ?, last_name = ?, email = ?, gender = ?, marital_status = ?, dob = ?, mobile = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssi", $first_name, $last_name, $email, $gender, $marital_status, $dob, $mobile, $user_id);

    if ($stmt->execute()) {
        // Update successful, set success message
        $_SESSION['update_success'] = true;
    } else {
        // Update failed, set error message
        $_SESSION['update_error'] = "Error updating user information.";
    }

    // Redirect back to accountinfo.php
    header("Location: accountinfo.php");
    exit;
}

// Close connection
$conn->close();
?>
