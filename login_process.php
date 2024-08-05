<?php
session_start();

// Include the database connection file
include_once 'dbcon.php'; // Assuming dbcon.php contains your database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to fetch user from database based on email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    // Check if user exists
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verify password
        if(password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['email'] = $row['email'];
            // Redirect to dashboard or any other page after successful login
            header("Location: ticket.php");
            exit();
        } else {
            // Incorrect password
            $_SESSION['error'] = "Incorrect password!";
            header("Location: login.php");
            exit();
        }
    } else {
        // User not found
        $_SESSION['error'] = "User not found!";
        header("Location: login.php");
        exit();
    }
}

// Close the database connection
mysqli_close($con);
?>
