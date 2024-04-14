<?php
include_once "connection.php";
session_start();
echo $_SESSION["user_email"];

// if ($con) {
if (isset($_POST['Submit'])) {

    try {
        // Set parameters and execute
        $fullname = $_POST['form_name'];
        $email = $_POST['form_email'];
        $password = password_hash($_POST['form_password'], PASSWORD_DEFAULT); // Hash the password for security
        $address = $_POST['form_address'];

        $sql = "INSERT INTO `users` (`id`, `full name`, `email`, `password`, `address`) VALUES (NULL, '$fullname', '$email', '$password', '$address')";

        if (mysqli_query($con, $sql)) {
            // echo "Record Created";
            header("Location: login.php");
        } else {
            echo "Error: " . mysqli_error($con);
        }

        // mysqli_query($con, $sql);
    } catch (Exception $e) {
        // Log error to file
        error_log("Error: " . $e->getMessage(), 0);
        // Display error message
        echo $e->getMessage();
    }
}
// }

// Check if the form is submitted
