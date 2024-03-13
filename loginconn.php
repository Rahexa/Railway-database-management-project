<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    require_once 'db_connection.php';

    // Get input data from the login form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query to fetch user details based on email
    $sql = "SELECT user_id, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the provided email exists
    if ($result->num_rows == 1) {
        // Fetch user data from the result set
        $row = $result->fetch_assoc();
        $user_id = $row['user_id'];
        $stored_password = $row['password'];

        // Verify the password
        if ($password === $stored_password) {
            // Password is correct, set session variables and redirect to home page
            $_SESSION['user_id'] = $user_id;
            header("Location: home.php");
            exit;
        } else {
            // Password is incorrect, set login error message in session
            $_SESSION['login_error'] = "Incorrect email or password.";
            header("Location: login.php");
            exit;
        }
    } else {
        // User with the provided email doesn't exist, set login error message in session
        $_SESSION['login_error'] = "Incorrect email or password.";
        header("Location: login.php");
        exit;
    }
} else {
    // If the form is not submitted, redirect to the login page
    header("Location: login.php");
    exit;
}
?>
