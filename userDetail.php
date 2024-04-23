<?php

include_once("connection.php");
session_start();
if (!empty($_SESSION)) {
    $status = "";
    // Loop through each session variable and echo its key-value pair
    foreach ($_SESSION as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
} else {
    // If no session variables are set
    $status = "New user";
}

if (!empty($SESSION)) {
    $query2 = "SELECT * FROM users WHERE email=={$_SESSION['User_email']}";
    $result2 = mysqli_query($con, $query2);

    if (!$result2) {
        echo "Error : " . mysqli_error($con);
    } else {
        $row2 = mysqli_fetch_assoc($result2);
        echo "<p>" . print_r($row2) . "</p>";
        // echo "<p>User details: " . $row['username'] . "," . $row['email'] . "</p>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Real Estate Management System</title>
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


<body>
    <?php include_once("navbar.php") ?>
    <?php echo "<p>User details: " . print_r($row2) . "</p>"; ?>

    <div class="container" id="form-container">
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        <!-- <form action="#" method="post">
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
        </form> -->
    </div>


    <?php include_once("footer.php") ?>
</body>

</html>