<?php
// Start the session
session_start();
echo 'llllll';

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
if (session_destroy()) {
    // Redirect to login page or any other page
    header("Location: login.php");
    exit();
} else {
    // If session destruction fails
    echo 'Session destruction failed.';
}
