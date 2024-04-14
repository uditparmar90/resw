<?php
session_start();
include_once "connection.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password
        // echo "DB pass-" . $row['password'] . "    Entered pass-" . $password;
        // exit;
        if ($row['password'] == $password) {
            echo 'pass';
            //Password is correct, create session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_fullname'] = $row['full name'];
            $_SESSION['user_address'] = $row['address'];
            echo "_SESSION['user_email'] ";

            // Redirect to dashboard or any other page
            header("Location: index.php");
            exit();
            echo 'password verify';
        } else {
            // Password is incorrect
            $error = "Incorrect password";
        }
    } else {
        // Email not found in database
        $error = "Email not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* CSS styles */
    </style>
</head>

<body>

    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>

</body>

</html>