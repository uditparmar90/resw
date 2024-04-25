<?php

include_once("connection.php");
session_start();
if (!empty($_SESSION)) {
    $status = "";
    print_r($_SESSION);
    //  Loop through each session variable and echo its key-value pair
    foreach ($_SESSION as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
} else {
    // If no session variables are set
    $status = "New user";
}
if (!empty($_SESSION)) {
    $query2 = "SELECT * FROM users WHERE id = '{$_SESSION['user_id']}'";
    // print_r($query2);
    $result2 = mysqli_query($con, $query2);
    // print($result2);

    if (!$result2) {
        echo "Error : " . mysqli_error($con);
    } else {
        $row2 = mysqli_fetch_assoc($result2);
        // print_r($row2);
        if ($row2) {
        } else {
            echo "<p>No user found.</p>";
        }
    }
}

if (isset($_POST['submit'])) {
    echo "updated";
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $update_query = "UPDATE users SET full_name='$full_name', password='$password', email='$email', address='$address' WHERE id={$_SESSION['user_id']}";
    // print_r($update_query);
    if (mysqli_query($con, $update_query)) {
        echo "<h4 style='color:red;'>data updated sucessfully</h4>";
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert' style='background:red;'>
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    } else {
        echo "Updating Error : " . mysqli_error($con);
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
    <script src="https://kit.fontawesome.com/2e45d17cb8.js" crossorigin="anonymous"></script>
</head>
<style>
    #form-container {
        /* display: flex; */
        align-items: center;
        justify-content: center;
        padding: 40px 30px;
        margin: 20px auto;
        width: 30%;
        box-shadow: 0px 0px 10px 2px gray;
    }
</style>


<body>
    <?php include_once("navbar.php") ?>
    <div class="inside-banner">
        <div class="container">
            <h2>Update your details here !</h2>
        </div>
    </div>

    <!-- <div class="container" id="form-container"> -->
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <?php
    // echo $result2;
    if (!$result2) {
        echo "Error : " . mysqli_error($con);
    } else {
        $query2 = "SELECT * FROM users WHERE id = '{$_SESSION['user_id']}'";
        // print_r($query2);
        $result2 = mysqli_query($con, $query2);
        // print($result2);

        if (!$result2) {
            echo "Error : " . mysqli_error($con);
        } else {
            $row2 = mysqli_fetch_assoc($result2);
            // print_r($row2);
            if ($row2) {
                // print_r($row2);
                echo "<ul>";
                // foreach ($row2 as $key => $value) {
                // echo "<li>$key: $value</li>";
                // }
                echo "</ul>";

                echo "<div class='container' id='form-container'>";
                echo "<form action='#' method='post'>";
                echo "<div class='form-group'>";
                // </div>";
                echo "<div class=''>
                    <h4>Your Unique id is : {$row2['id']}</h4>
                </div>";

                echo "<input
                type='text'
                class='form-control'
                placeholder='Enterfull_name'
                name='full_name' value='{$row2['full_name']}';
              />";

                echo "<input
                    type='email'
                    class='form-control'
                    id='exampleInputEmail2'
                    placeholder='Enter email' name='email' value='{$row2['email']}'
                  />";
                echo "
                  <div class='form-group'>
                  <label class='sr-only' for='exampleInputPassword2'
                    >Password</label
                  >
                  <input
                    type='password'
                    class='form-control'
                    id='exampleInputPassword2'
                    placeholder='Password'  name='password' value='{$row2['password']}'
                  />
                </div>";

                echo "<div class='form-group'>
                <label class='sr-only' for='exampleInputPassword2'>Address</label>
                <input type='text' id='address' class='form-control' required placeholder='Enter Address' name='address' value='{$row2['address']}'>
            </div>";

                echo "<div class='form-group'>
                <button type='submit' name='submit' class='btn btn-success'>Update details</button>
            </div>";
                echo "</form>";
            } else {
                echo "<p>No user found.</p>";
            }
        }
    }


    echo "</div>";
    echo "</div>";
    ?>

    <?php include_once("footer.php") ?>
</body>

</html>