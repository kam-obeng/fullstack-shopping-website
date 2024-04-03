<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Hardcoded check for username and password (for testing purposes)
        if ($username === "1234" && $password === "1234") {
            // Authentication successful, redirect to the desired page
            header("Location: /websites/default/public/admin_home_page.html");
            exit();
        } else {
            // Authentication failed, display an error message
            $error_message = "Invalid username or password.";
        }
    } else {
        // If either username or password is not provided, display an error message
        $error_message = "Please enter both username and password.";
    }
}
?>
