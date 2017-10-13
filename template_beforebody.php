<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<style>


</style>
<body>
<div id="container">

<!-- Navbar (sit on top) -->
<div id="header">
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card-2" id="myNavbar">
      <a href="index.php" class="w3-bar-item w3-button w3-wide">Machine Learning</a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
        <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  </nav>
</div>

<div id="body">
  <div class="w3-container" style="padding:128px 16px">
    <div class="w3-row">

        <div class="w3-col l3 m12 w3-padding">
          <a href="GradientDescent.php" style="text-decoration:none;"><div class="w3-card w3-cyan w3-btn" style="display:block">
              <div class="w3-xlarge w3-padding-32 w3-center">
                  Gradient Descent
              </div>
          </div></a>
        </div>

        <div class="w3-col l3 m12 w3-padding">
          <a href="Normalization.php" style="text-decoration:none;"><div class="w3-card w3-green w3-btn" style="display:block">
              <div class="w3-xlarge w3-padding-32 w3-center">
                  Normalization
              </div>
          </div></a>
        </div>

        <div class="w3-col l6 m12 w3-padding">
          <a href="#" style="text-decoration:none;"><div class="w3-card w3-red w3-btn" style="display:block">
              <div class="w3-xlarge w3-padding-32 w3-center">
                  As I learn more Machine Learning, I'll post more stuff ...
              </div>
          </div></a>
        </div>

    </div>
  </div>
