<?php
include_once "connection.php";
session_start();
if (!empty($_SESSION)) {
  // echo "session.length()";
  // Loop through each session variable and echo its key-value pair
  foreach ($_SESSION as $key => $value) {
    echo $key . ': ' . $value . '<br>';
  }
} else {
  // If no session variables are set
  echo 'No session variables set.';

  $query = "select * from properties";
  $result = mysqli_query($con, $query);
}
if (!$result) {
  echo "Error Found!!!";
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title>About us - Real Estate Management System</title>
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
  <script src="https://kit.fontawesome.com/2e45d17cb8.js" crossorigin="anonymous"></script>

  <script src='assets/google_analytics_auto.js'></script>
</head>

<body>
  <?php include_once('navbar.php') ?>
  <!-- #Header Starts -->
  <div class="container">
    <!-- Header Starts -->
    <div class="header">
      <!-- <a href="index.php"><img src="images/header.png" alt="Realestate"></a> -->

      <div class="menu">
        <ul class="pull-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="list-properties.php">List Properties</a>
            <ul class="dropdown">
              <li><a href="sale.php">Properties on Sale</a></li>
              <li><a href="rent.php">Properties on Rent</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
    <!-- #Header Starts -->
  </div><!-- banner -->
  <div class="inside-banner">
    <div class="container">
      <h2>About Us</h2>
    </div>
  </div>
  <!-- banner -->


  <div class="container">
    <div class="spacer">
      <div class="row">
        <div class="col-lg-8  col-lg-offset-2">
          <img src="images/about.jpg" class="img-responsive thumbnail" alt="realestate">
          <h3>Business Background</h3>
          <p> A Tradition of Excellence, Integrity, Knowledge and Service for over 10 years.</p>
          <h3>Company Profile</h3>
          <p>At SLNP Real Estate, you are number one. Whether you are a property owner, tenant, or buyer, we value your business and will provide you with the individual attention and service you deserve. We believe in a strict Code of Ethics. We believe in integrity, commitment to excellence, a professional attitude, and personalized care.</p>
          <p>SLNP provides a wide variety of real estate services to investors. We understand that you do not want to be in the business of real estate and property management.</p>
        </div>

      </div>
    </div>
  </div>


  <?php include_once('footer.php') ?>
</body>

</html>