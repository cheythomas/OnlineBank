<!DOCTYPE html>
<html>
<title>Online Bank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/home.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("http://www.cloudnifier.com/wp-content/uploads/2015/12/WDF_836559.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="account.php" class="w3-bar-item w3-button w3-wide"><img src="https://s14.postimg.org/p6hvz5tg1/3420logo.png" height="40" width="40" >
Online Bank</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="login.php" class="w3-bar-item w3-button">Sign In</a>
      <a href="#about" class="w3-bar-item w3-button">ABOUT US</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT US</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">Sign In</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT US</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT US</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-topleft w3-text-white" style="padding:48px">
  <br>
  <br>
    <span class="w3-jumbo w3-hide-small">Welcome!</span><br>
    <span class="w3-large">Choose the bank that's right for you</span>
  </div>
  <div class="w3-display-middle w3-text-white" style="padding:48px">
    <p><a href="login.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Get Started Today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">About Online Banking</h3>
  <p class="w3-center w3-large">Investing in our customers, communities, and employees</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class=""></i>
      <p class="w3-large"></p>
      <p></p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">With Online Banking</p>
      <p>Use your computer, smartphone, or tablet to bank on the go.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>We are committed to making our customers happy with all the banking and financial services they need.</p>
    </div>
    <div class="w3-quarter">
      <i class=""></i>
      <p class="w3-large"></p>
      <p></p>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" align="middle" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Contact US bank Customer Service</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-center" align="middle">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Bakersfield, US</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 661-555-1123</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: OnlineBank@mail.com</p>
      <br>
    </div>
    
  </div>
</div>

</html>
