<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OnlineReg</title>
  <link rel="shortcut icon" type="image/png" href="/img/favicons.png">

  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<style>

* {box-sizing: border-box;}

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 4.5s;
  animation-name: fade;
  animation-duration: 4.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: 1} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

table, th, td {
  border: 1px solid black;
  padding-left: 70px;
  border-collapse: collapse;
}
@import "compass/css3";

.box {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100vh;
}

.paypal {
  &-logo {
    font-family: Verdana, Tahoma;
    font-weight: bold;
    font-size: 26px;

    i:first-child {
      color: #253b80;
    }

    i:last-child {
      color: #179bd7;
    }
  }
  
  &-button {
    padding: 15px 30px;
    border: 1px solid #FF9933;
    border-radius: 5px;
    background-image: linear-gradient(#FFF0A8, #F9B421);
    margin: 0 auto;
    display: block;
    min-width: 138px;
    position: relative;
    
    &-title {
      font-size: 14px;
      color: #505050;
      vertical-align: baseline;
      text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.6);
    }
    
    .paypal-logo {
      display: inline-block;
      text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.6);
      font-size: 20px;
    }
  }
}

</style>
<body>
  <!--Navigation bar-->
   <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        &nbsp
    <img  src="/img/favicons.png" >
        <a class="navbar-brand" href="/members/successlogin">Online<span>Reg</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Create or Edit</a></li>
          <li><a href="{{ url ('/members/successlogin/create')}}">Driver's License Reg.</a></li>
          <li><a href="/pay">Tax Pay</a></li>
          <li><a href="/exam">License Exam</a></li>
          <li><a href="/lesson">Rules and info</a></li>
          <li><a href="/tax">Tax Information</a></li>
          <li class="btn-triala"><a href="{{ url ('/logout')}}">Logout</a></li>
          
          <li>
          
                </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
  
  <!--/ Modal box-->
  <!--Banner-->
   <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec"><div>
                @if(isset(Auth::user()->name))
                <div>
                    {{ Auth::user() -> name}}
                </div>
                @else
                <script>window.location = "/";</script>
                @endif
            </div></h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Manage, Pay and Register License and Vehicle </p>
              <p class="small-text">We also have provisons for road tax payment, license, bluebook renewal. <br>Click the links below or go through our tabs for our different services</p>             
            </div>
             <div class="intro-para text-center quote">
              <p class="big-text">Navigate below for Facilities.</p>     
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Feature-->

  
  <!--/ feature-->
 @yield('content')
      <!-- End newsletter-form -->
      <footer id="footer" class="footer">
    <div class="container text-center">
      <ul class="social-links">
        <li><a href="https://twitter.com/"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="https://myaccount.google.com/"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2020 Deepak Sen. All rights reserved
      <div class="credits">
       
        Designed by <a href="">Deepak Sen</a>
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <!-- <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script> -->

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

</body>

</html>
