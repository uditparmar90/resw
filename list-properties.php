<?php
include_once "connection.php";
session_start();
// echo $_SESSION["user_email"];
$query = "select * from properties";
$result = mysqli_query($con, $query);

if (!$result) {
  echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <title>All Listing Properties - Real Estate Management System</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/jquery-1.9.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>
  <script src="https://kit.fontawesome.com/2e45d17cb8.js" crossorigin="anonymous"></script>



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

  <!-- #Header Starts -->
  <?php include_once("navbar.php") ?>

  <div class="container">
    <!-- Header Starts -->
    <div class="header">
      <!-- <a href="index.php"><img src="images/header.png" alt="Realestate"></a> -->
      <div class="menu">
        <ul class="pull-right">
          <li><select id="sort-options" style="padding:7px; border:1px solid #cfcfcf;;    border-radius: 4px;">
              <option value="low-to-high">Price : Low to High</option>
              <option value="high-to-low">Price : High to Low</option>
            </select>
          </li>
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
      <h2>Listing All Properties</h2>
    </div>
  </div>

  <!-- banner -->


  <div class="container">
    <div class="properties-listing spacer">

      <div class="row">
        <div class="col-lg-3 col-sm-4 ">

          <div class="search-form">
            <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
            <form action="search.php" method="post" name="search">
              <input type="text" class="form-control" name="search" placeholder="Search of Properties">
              <div class="row">
                <div class="col-lg-5">
                  <select name="delivery_type" class="form-control">
                    <option value="Rent">Rent</option>
                    <option value="Sale">Sale</option>
                  </select>
                </div>
                <div class="col-lg-7">
                  <select name="search_price" class="form-control">
                    <option>Price</option>
                    <option value="1">$5000 - $50,000</option>
                    <option value="2">$50,000 - $100,000</option>
                    <option value="3">$100,000 - $200,000</option>
                    <option value="4">$200,000 - above</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <select name="property_type" class="form-control">
                    <option>Property Type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Building">Building</option>
                    <option value="Office-Space">Office-Space</option>
                  </select>
                </div>
              </div>
              <button name="submit" class="btn btn-primary">Find Now</button>
            </form>
          </div>

        </div>

        <div class="col-lg-9 col-sm-8">
          <div class="sortby clearfix">
            <div class="pull-left result">Showing: All Listing Properties </div>
            <div class="pull-right">
            </div>

          </div>
          <div class="row">

            <!-- properties -->
            <div class="property-listings">
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
                <div class="col-lg-4 col-sm-6">
                  <div class="properties">
                    <div class="image-holder"><img src="<?php echo $property_img; ?>" class="img-responsive" alt="properties">
                      <?php if ($availablility == 0) { ?><div class="status sold">Available</div> <?php } else { ?>
                        <div class="status new">Not Available</div>
                      <?php } ?>
                    </div>
                    <h4><a href="property-detail.php?id=<?php echo $id; ?>"><?php echo $property_title;  ?></a></h4>
                    <p class="price">Price: $<?php echo $price; ?></p>
                    <p class="delivery_type">Delivery Type: <?php echo $delivery_type; ?></p>
                    <p class="utility">Utilities: <?php echo $utility; ?></p>
                    <div class="listing-detail">
                      <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span>
                      <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span>
                      <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $parking; ?></span>
                      <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span>
                    </div>
                    <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
                  </div>
                </div>
              <?php } ?>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <?php include_once("footer.php") ?>
  <div id="loginpop" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="row">
          <div class="col-sm-6 login">
            <h4>Login</h4>
            <form class="" role="form">
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
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
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const propertyListings = document.querySelector('.property-listings');
      const sortOptions = document.getElementById('sort-options');

      sortOptions.addEventListener('change', function() {
        const sortBy = this.value;
        sortProperties(sortBy);
      });

      function sortProperties(sortBy) {
        const propertyItems = Array.from(propertyListings.querySelectorAll(".properties"));
        propertyItems.sort(function(a, b) {
          const priceA = parseFloat(a.querySelector(".price").textContent.replace("$", ""));
          const priceB = parseFloat(b.querySelector(".price").textContent.replace("$", ""));
          if (sortBy === "low-to-high") {
            return priceA - priceB;
          } else if (sortBy === "high-to-low") {
            return priceB - priceA;
            s
          }
        });
        propertyListings.innerHTML = "";
        propertyItems.forEach(function(item) {
          propertyListings.appendChild(item);
        });
      };
    });
  </script>
</body>

</html>