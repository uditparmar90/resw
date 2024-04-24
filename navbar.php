  <!-- Header Starts -->
  <style>
      a:hover {
          color: black !important;
      }

      #logo {
          height: 40px;
          border-radius: 128px;
      }

      /* Custom CSS for sticky navbar */
      .navbar-wrapper {
          position: sticky;
          top: 0;
          z-index: 1000;
          background: whitesmoke;
          box-shadow: 0px 1px 2px;

      }
  </style>
  <div class="navbar-wrapper">
      <div class="navbar" style="color: whitesmoke !important;">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>

              <!-- Nav Starts -->
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-left">
                      <li>
                          <!-- <img src="images/logo.png" id="logo"> -->
                          <h4 class="m-0 p-0" style="font-weight: 900; color:#83D211;"><b>Real estate software</b></h4>
                      </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <!-- <li><a href="userDetails.php"><i class="fa-solid fa-user"></i></a></li> -->
                      <li>
                          <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" style="margin-top:7px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <a href="userDetails.php"><i class="fa-solid fa-user"></i></a>
                              </button>
                              <div class="dropdown-menu" style="padding: 10px; width: max-content;" aria-labelledby="dropdownMenuButton">
                                  <form action="logout.php" method="post">
                                      <button type="submit" class="btn btn-light">Logout</button>
                                  </form>
                                  <a class="dropdown-item m-2" href="userDetail.php">View & Update your details</a>
                                  <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
              <!-- #Nav Ends -->

          </div>
      </div>
  </div>