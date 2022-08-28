<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welfare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Welfare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="joinus.php" class="nav-link">Join Us</a></li>
          <li class="nav-item"><a href="donate.html" class="nav-link">Donate</a></li>
          <li class="nav-item"><a href="event.html" class="nav-link">Events</a></li>
          <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="faq.html" class="nav-link">FAQ's</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>
          <li class="nav-item"><a href="livechat.php" class="nav-link">Live Chat</a></li>
          <li class="nav-item"><a href="NGOLoginForm.php" class="nav-link">NGO Login</a></li>
          <li class="nav-item"><a href="active_disaster.php?flag=0&change=0" class="nav-link">Disasters</a></li>
        </ul>
      </div>
    </div>
  </nav>
   <div class="hero-wrap" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Join Us</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- END nav -->
    	
<br/><br />
 <section class="ftco-counter ftco-intro ftco-intro-2" id="section-counter">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
                <?php 
                      $servername = "localhost:3306";
                      $username = "root";
                      $password = "";
                      $dbname = "hack";

                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      }
                      $sql="SELECT COUNT(*) AS ngo FROM `ngo` ";
                      $num_vol;
                      $num_ngo;
                      $result = $conn->query($sql);
                      $row = $result->fetch_assoc();
                      $num_ngo = "\"".$row["ngo"]."\"";    

                      $sql="SELECT COUNT(*) AS user FROM `user` ";
                      $result = $conn->query($sql);
                      $row = $result->fetch_assoc();
                      $num_vol = "\"".$row["user"]."\"";                 
                ?>
                <strong class="number" data-number=<?php echo $num_vol; ?>>0</strong>
                <span>VOLUNTEER WITH US</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
                <strong class="number" data-number=<?php echo $num_ngo; ?>>0</strong>
                <span>NGO'S WITH US</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
                <h3 class="mb-4">Be a Volunteer</h3>
                <p>Be a volunteer and give your essential contribution to make the world better.</p>
                <p><a href="VolunterSignupForm.php" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
                <p><a href="VolunterLoginForm.php" class="btn btn-white px-3 py-2 mt-2">Volunter Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    
<br /><br />





    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-1">
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>I cannot get any sense of an enemy - only of a disaster </p><p>I always tried to turn every disaster into an opportunity.</p>
            </div>
          </div>
          <div class="col-md-3 offset-md-1">
             <div class="ftco-footer-widget mb-1 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="joinus.html" class="py-2 d-block">Join Us</a></li>
                <li><a href="donate.html" class="py-2 d-block">Donate</a></li>
                <li><a href="event.html" class="py-2 d-block">Event</a></li>
                <li><a href="contact.html" class="py-2 d-block">Contact Us</a></li>
                <li><a href="livechat.html" class="py-2 d-block">Live Chat</a></li>  
              </ul>
            </div>
          </div>
          <div class="col-md-3 offset-1">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Shri Bhagubhai Mafatlal Polytechnic
Irla, N. R. G Marg,
Opposite Cooper Hospital,
Vileparle (W),
Mumbai 400056
India</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">022-42336000 (Office)<br>
022-42336022 (Direct)</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

           <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Welfare</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>