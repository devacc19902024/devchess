<?php
// Set the correct password
$correct_password = "yourpassword";

// Check if the form was submitted and if the password matches
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered_password = $_POST['password'];
    
    // Validate the entered password
    if ($entered_password === $correct_password) {
        // Password is correct, show the protected content
        echo "<h1>Access Granted</h1>";
        echo "<p>Welcome to the protected area!</p>";
    } else {
        // Password is incorrect, show an error message
        echo "<h1>Access Denied</h1>";
        echo "<p>Incorrect password. Please try again.</p>";
    }
} else {
    // Redirect to login page if the request is not a POST
    header('Location: index.html');
    exit;
}
?>
