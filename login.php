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
    <title>All Listing Properties - Real Estate Management System</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/jquery-1.9.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/script.js"></script>

    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <!-- Owl stylesheet -->

    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
    <!-- slitslider -->

    <script src='assets/google_analytics_auto.js'></script>
</head>
<style>
    #form-container {
        /* display: flex; */
        align-items: center;
        justify-content: center;
        padding: 40px 30px;
        margin: 20px auto;
        width: 30%;
    }
</style>

<body>
    <!-- 
    <div id="loginpop" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-6 login">
                        <h4>Login</h4>
                        <form class="" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Sign in</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h4>New User Sign Up</h4>
                        <p>Join today and get updated with all the properties deal happening around.</p>
                        <button type="submit" class="btn btn-info" onclick="window.location.href='register.html'">Join Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div> -->




    <?php include_once("navbar.php") ?>
    <div class="inside-banner">
        <div class="container">
            <h2>Login here !</h2>
        </div>
    </div>
    <div class="container" id="form-container">
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        <form action="#" method="post">
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password</label>
                <input type="password" id="password" name="password" class="form-control" required placeholder="Enter Password">
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success">Login</button>
            </div>
        </form>
    </div>

    <?php include_once("footer.php") ?>

</body>

</html>