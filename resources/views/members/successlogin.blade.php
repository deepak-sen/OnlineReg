<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OnlineReg</title>
  <link rel="shortcut icon" type="image/png" href="/img/favicons.png">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
 
</head>

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
        <a class="navbar-brand" href="">Online<span>Reg</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ url ('/members/vehiclelogin')}}">Vehicle Reg.</a></li>
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
              
             <p align=”justify” class="small-text">We also have provisons for road tax payment, license, bluebook renewal. <br>Click the links below or go through our tabs for our different services</p>          
            </div>
             <div class="intro-para text-center quote">
              <p class="big-text">Navigate below for Facilities</p>     
            </div>
            @if (session('Status'))
              <p style="color:#50E83B;" class="big-text">{{session('Status')}}</p>
              @endif
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
    <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Welcome</h2>
          <p>Welcome to your very own account where you can store your credentials and see your regestration process.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Register</h4>
                <p align=”justify” >You will get the ability to register for a license filling out our forms online, the process is automatic and you can also apply for vehicle registration.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-align-justify"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Manage</h4>
                <p align=”justify” >You can see the current status of you application here and gat informatuion on how your registration is being handled, You can also manage the different registration and tax payments.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-cog"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Pay</h4>
                <p>We have set up the ways for you to pay for you renewal fees, processing fees, revenew fees that you will face when regestrating. You will be able to get it done online with out worring of stand in line.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-money"></i>
              </div>
               
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 
   <section id="testimonial" class="section-padding">
      <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">License Registrations</h2>
           <p class="white">Saved Registrations</p>
           <hr class="bottom-line">
    <ul class="tilesWrap">
      
       @foreach ($online as $online)
             
             
  <li>
    
   {{-- By: {{ $online->owners }} --}}
    <h3><u>{{$online->name}}</u></h3>

    <p>
     • Age: {{$online->age}}
    </p>
    <p>
     • {{$online->gender}}
    </p>
    <p>
     • {{$online->citizenship}}
    </p>
    <p>
     • Category: {{$online->vehicle}}
    </p>
  {{--   Rating: {{$online->rating}} <b class="fa fa-star"></b> --}}
    
    <form method="get" action="/members/successlogin/{{ $online->id }}/edit">
    <button type="submit">Edit Info</button>
    <br/><br/>
   
</form>

  </li>

  @endforeach
</ul>
<div id="app">
<posts></posts>
     </div>  
     <br/><br/> 
    <form method="get" action="/members/successlogin/create">
    <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">New License Registration</button>
</form>
 
 </div>
    </div>
    </div>
    </section>



  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contact Us</h2>
          <p>Our Support services are the best in the business, with a high customer satisfaction rating<br> We'll always be there to help you.</p>
          <hr class="bottom-line">
        </div>
        <p>Telephone no. : 9884978154</p>
        Send Mail : <a style="color: #717f86;" href = "mailto: abc@example.com">contact_us@onlinereg.io</a>
        <p>Location:</p>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7067.196664037762!2d85.30578117471353!3d27.66789638123292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb182dba5f7915%3A0xfdfcfd4edc7ed086!2sEkantakuna%2C%20Lalitpur%2044600!5e0!3m2!1sen!2snp!4v1591522547745!5m2!1sen!2snp" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </section>
  <!--/ Contact-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <script src="{{ asset('/js/app.js')}}" type="text/javascript"></script>
    <div class="container text-center">

      <h3>Social Sites</h3>
      <!-- End newsletter-form -->
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

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
