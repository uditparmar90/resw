<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

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

  <!-- slitslider -->
  <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
  <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
  <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
  <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
  <!-- slitslider -->
  <script src='assets/google_analytics_auto.js'></script>

  <!-- font awersome -->
  <script src="https://kit.fontawesome.com/2e45d17cb8.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  include_once "connection.php";
  session_start();
  // Check if there are any session variables set
  if (!empty($_SESSION)) {
    $status = "";
    // Loop through each session variable and echo its key-value pair
    // foreach ($_SESSION as $key => $value) {
    //   echo $key . ': ' . $value . '<br>';
    // }
  } else {
    // If no session variables are set
    $status = "New user";
    // echo $status;
  }

  // require_once('route.php');

  function home()
  {
    // echo 'home';
    // header("Location:index.php");
  }

  function about_us()
  {
    header("Location: about.php");
  }

  function contact_us()
  {
    header("Location: contact.html");
  }

  function page404()
  {
    header("Location: 404.php");
  }

  //If url is http://localhost/route/home or user is at the maion page(http://localhost/route/)
  if ($request == 'home' or $request == '')
    home();
  //If url is http://localhost/route/about-us
  else if ($request == 'about-us')
    about_us();
  //If url is http://localhost/route/contact-us
  else if ($request == 'contact-us')
    contact_us();
  //If user entered something else
  else
    page404();

  //print database
  $query = "select * from properties";
  $result = mysqli_query($con, $query);

  if (!$result) {
    echo "Error Found!!!";
  }
  ?>

  <?php
  if ($status !== "") {
    echo "
  <div class='alert alert-primary .alert-dismissible' role='alert' style='color:gray;'>
  {$status} !!! <a  href='login.php'>Let's Login</a>.
</div>";
  }
  ?>

  <!-- Header Starts -->
  <?php include_once('navbar.php'); ?>

  <div class="container">
    <!-- Header Starts -->
    <div class="header">
      <!-- <a href="index.php"><img src="images/header.png" alt=" SLNP Realestate"> --><!-- </a> -->
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
  </div>
  <div class="">
    <div id="slider" class="sl-slider-wrapper">
      <div class="sl-slider" style="background:red;">
        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-1"></div>
            <h2><a href="#"> See the Latest 2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Ghogha circle,Bhavnagar</p>
              <!-- <p>Developed by Abdul Rahman Al-Harbi &&& Until he extends the circle of his compassion to all living things, man will not himself find peace.</p> -->
              <cite>100,00,000 Rs.</cite>
            </blockquote>
          </div>
        </div>

        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-2"></div>
            <h2><a href="#"> Developed by AA devlopers 2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Ghogha circle,Bhavnagar</p>
              <!-- <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p> -->
              <cite>20,000,000 Rs.</cite>
            </blockquote>
          </div>
        </div>

        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-3"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> near sarkhej hotel-Surat</p>
              <!-- <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p> -->
              <cite>20,000,000 Rs.</cite>
            </blockquote>
          </div>
        </div>

        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-4"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>abc flats, sidsar road, Bhavnagar</p>
              <!-- <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p> -->
              <cite>20,000,000 Rs.</cite>
            </blockquote>
          </div>
        </div>

        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-5"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Hinigaran, Negros Occidental</p>
              <!-- <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p> -->
              <cite>7,000,000 Rs.</cite>
            </blockquote>
          </div>
        </div>
      </div><!-- /sl-slider -->



      <nav id="nav-dots" class="nav-dots">
        <span class="nav-dot-current"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </nav>

    </div><!-- /slider-wrapper -->
  </div>



  <div class="banner-search">
    <div class="container">
      <!-- banner -->
      <h3>Buy, Sale & Rent</h3>
      <div class="searchbar">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <form action="search.php" method="post">
              <input name="search" type="text" class="form-control" placeholder="Search of Properties">
              <div class="row">
                <div class="col-lg-3 col-sm-3 ">
                  <select name="delivery_type" class="form-control">
                    <option value="Rent">Rent</option>
                    <option value="Sale">Sale</option>
                  </select>
                </div>
                <div class="col-lg-3 col-sm-4">
                  <select name="search_price" class="form-control">
                    <option>Price</option>
                    <option value="1">5000 - 50,000</option>
                    <option value="2">50,000 - 100,000</option>
                    <option value="3">100,000 - 200,000</option>
                    <option value="4">200,000 - above</option>
                  </select>
                </div>
                <div class="col-lg-3 col-sm-4">
                  <select name="property_type" class="form-control">
                    <option>Property Type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Building">Building</option>
                    <option value="Office-Space">Office-Space</option>
                  </select>
                </div>
                <div class="col-lg-3 col-sm-4">
                  <button name="submit" class="btn btn-success" onclick="window.location.href='buysalerent.html'">Find Now</button>
            </form>
          </div>
        </div>


      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
        <p>Join now and get updated with all the properties deals.</p>
        <!-- <button class="btn btn-info" data-toggle="modal" data-target="#loginpop">Login</button> -->
        <button class="btn btn-info"><a href="login.php">Login</a></button>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- banner -->
  <div class="container">
    <div class="properties-listing spacer"> <a href="list-properties.php" class="pull-right viewall">View All Listing</a>
      <h2>Properties</h2>
      <div id="owl-example" class="owl-carousel">



        <?php
        while ($property_result = mysqli_fetch_assoc($result)) {
          $id = $property_result['property_id'];
          $property_title = $property_result['property_title'];
          $delivery_type = $property_result['delivery_type'];
          $availablility = $property_result['availablility'];
          $price = $property_result['price'];
          $property_img = $property_result['property_img'];
          $bed_room = $property_result['bed_room'];
          $liv_room = $property_result['liv_room'];
          $parking = $property_result['parking'];
          $kitchen = $property_result['kitchen'];
          $utility = $property_result['utility'];
        ?>
          <div class="properties">
            <div class="image-holder"><img src="<?php echo $property_img; ?>" class="img-responsive" alt="properties">
              <?php if ($availablility == 0) { ?><div class="status sold">Available</div> <?php } else { ?>
                <div class="status new">Not Available</div>
              <?php } ?>
            </div>
            <h4><a href="property-detail.php?id=<?php echo $id; ?>"><?php echo $property_title;  ?></a></h4>
            <p class="price">Price: $<?php echo $price; ?></p>
            <p class="price">Delivery Type: <?php echo $delivery_type; ?></p>
            <p class="price">Utilities: <?php echo $utility; ?></p>
            <div class="listing-detail">
              <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span>
              <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span>
              <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $parking; ?></span>
              <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span>
            </div>
            <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
          </div>

        <?php } ?>

      </div>
    </div>
    <div class="spacer">
      <div class="row">
        <div class="col-lg-12 col-sm-12 recent-view">
          <h3>About Us</h3>
          <p>At SLNP Real Estate, you are number one. Whether you are a property owner, tenant, or buyer, we value your business and will provide you with the individual attention and service you deserve. We believe in a strict Code of Ethics. We believe in integrity, commitment to excellence, a professional attitude, and personalized care.<br><a href="about.html">Learn More</a></p>
          <p>At SLNP Real Estate, you are number one. Whether you are a property owner, tenant, or buyer, we value your business and will provide you with the individual attention and service you deserve. We believe in a strict Code of Ethics. We believe in integrity, commitment to excellence, a professional attitude, and personalized care.<br><a href="about.html">Learn More</a></p>
          <p>At SLNP Real Estate, you are number one. Whether you are a property owner, tenant, or buyer, we value your business and will provide you with the individual attention and service you deserve. We believe in a strict Code of Ethics. We believe in integrity, commitment to excellence, a professional attitude, and personalized care.<br><a href="about.html">Learn More</a></p>

        </div>

      </div>
    </div>
  </div>
  <?php include_once('footer.php'); ?>


</body>

</html>