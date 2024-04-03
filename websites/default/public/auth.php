<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hardcoded username and password for demonstration purposes
    $expectedUsername = "1234";
    $expectedPassword = "1234";

    // Retrieve values from the submitted form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the provided username and password match the expected values
    if ($username == $expectedUsername && $password == $expectedPassword) {
        // Authentication successful - redirect to the admin panel or perform further actions
        header("Location: admin_panel.php");
        exit();
    } else {
        // Authentication failed - display an error message or redirect to a login page
        echo "Invalid username or password";
    }
}
?>
