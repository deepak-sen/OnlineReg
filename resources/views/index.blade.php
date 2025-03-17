<!DOCTYPE html>
<html lang="en">
{{--Check commit--}}
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OnlineReg</title>
  <link rel="shortcut icon" type="image/png" href="img/favicons.png">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

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
        </button> &nbsp
    <img  src="img/favicons.png" >
        <a class="navbar-brand" href="/">Online<span>Reg</span></a>

      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Facilities</a></li>
          <li><a href="#organisations">Vehicles</a></li>
          <li><a href="#courses">Notices</a></li>
          <li><a href="#pricing">Contact</a></li>
          <li class="btn-trial"><a href="/members-login">Login</a></li>
          <!-- <li class="btn-trial"><a href="#footer">Free Trail</a></li> -->
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
              <h2 class="text-dec">Registration made Easier</h2>
            </div>
            <div class="intro-para text-center quote">
              @if (session('Status'))
              <p style="color:#48C836;">{{session('Status')}}</p>
              @endif
              <p class="big-text">Manage, Pay and Register License and Vehicle.</p>
              <p class="small-text">We also have provisons for road tax payment, license, bluebook renewal. <br>Click the links below or go through our tabs for our different services.</p>
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
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Facilities</h2>
          <p>We provide various facilities for you to go through out the process of applying, payment and registering license.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Register</h4>
                <p>You will get the ability to register for a license filling out our forms online, the process is automatic and you can also apply for vehicle registration.</p>
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
                <p>You can see the current status of you application here and gat informatuion on how your registration is being handled, You can also manage the different registration and tax payments.</p>
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
  <!--/ feature-->
  <!--Organisations-->
 <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="../img/line.jpg" alt="Smiley face" height="390" width="542">
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h1 class="det-txt"> Useful Links To Important Sites</h1>
              {{-- <h4 class="sm-txt">(Revised and Updated for 2016)</h4> --}}
            </hgroup>
            <button onclick="window.location.href='https://onlineedlreg.dotm.gov.np/';" name="submit" type="submit" class="btn btn-block btn-submit">
            Online Driver License <i class="fa fa-arrow-right"></i></button>
            <button onclick="window.location.href='https://www.autoncell.com/detail/news/tax-rate-vehicles-fiscial-year-2075-76';" name="submit" type="submit" class="btn btn-block btn-submit">
            Tax Rates <i class="fa fa-arrow-right"></i></button>
            <button onclick="window.location.href='http://www.lawcommission.gov.np/en/archives/category/documents/prevailing-law/statutes-acts/motor-vehicles-and-transport-management-act-2049-1993';" name="submit" type="submit" class="btn btn-block btn-submit">
            laws, Acts <i class="fa fa-arrow-right"></i></button>
            <button onclick="window.location.href='https://www.researchgate.net/figure/Vehicle-registration-in-Bagmati-zone-DoTM-2013_fig1_272389492';" name="submit" type="submit" class="btn btn-block btn-submit">
            Vehicle registrations <i class="fa fa-arrow-right"></i></button>
            <button onclick="window.location.href='http://www.lawcommission.gov.np/en/archives/20343';" name="submit" type="submit" class="btn btn-block btn-submit">
            Vehicle Category <i class="fa fa-arrow-right"></i></button>
          </div>
        </div>
      </div>
    </div>
  </section>

 <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Sample Forms and Photos</h2>
          <p>Some sample froms and documents that will be seen here.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <img src="../img/sample1.png" alt="Smiley faces" height="290" width="350">
        </div>
        <div class="col-md-4 col-sm-6">
          <img src="../img/sample2.jpg" alt="Smiley faces" height="290" width="350">
        </div>
        <div class="col-md-4 col-sm-6">
          <img src="../img/sample3.jpg" alt="Smiley faces" height="290" width="350">
        </div>
      </div>
    </div>
  </section>
  <!--/ work-shop-->
  <!--/ Faculity member-->

  <!--Testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">Customer's Response</h2>
          <p class="white">Customer's thoughts on this website</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
         <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Great website to go to, makes filling forms out easier, faster. Will recommend to everyone</p>&mdash; Dean Cooper (@zdanganronpa) <a href="https://twitter.com/zdanganronpa/status/1269561999005868034?ref_src=twsrc%5Etfw">June 7, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-md-6 col-sm-6">
          <blockquote class="twitter-tweet"><p lang="en" dir="ltr">This website is easier than standing in long lines in the department. Very responsive and delivers results.</p>&mdash; Dexter (@BittenRice) <a href="https://twitter.com/BittenRice/status/1269562376963031041?ref_src=twsrc%5Etfw">June 7, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonial-->
  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Notices</h2>

          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Notice!!</h3>
              <p>2020/04/20</p>
            </figcaption>
            {{-- <a href="#"></a> --}}
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course02.jpg" class="img-responsive">
            <figcaption>
              <h3>Notice!!</h3>
              <p>2020/01/06</p>
            </figcaption>
      {{--       <a href="#"></a> --}}
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course03.jpg" class="img-responsive">
            <figcaption>
              <h3>Notice!!</h3>
              <p>2020/05/08</p>
            </figcaption>
           {{--  <a href="#"></a> --}}
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course04.jpg" class="img-responsive">
            <figcaption>
              <h3>Notice!!</h3>
              <p>2020/04/12</p>
            </figcaption>

          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course05.jpg" class="img-responsive">
            <figcaption>
              <h3>Notice!!</h3>
              <p>2020/02/13</p>
            </figcaption>
           {{--  <a href="#"></a> --}}
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course06.jpg" class="img-responsive">
            <figcaption>
              <h3>Notice!!</h3>
              <p>2020/03/29</p>
            </figcaption>
           {{--  <a href="#"></a> --}}
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->
  <!--Pricing-->
    <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Current Tax & Renewal Rates</h2>
          <p>here are the current tax rates on different transportation sector. The information provided here are current and updated regularly.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h5>Heavy vehicles/Light Vehicles</h5>
              <span class="fa fa-inr"></span> <span class="amount">3000/2500</span>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg green btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h5>License Revenue charge 2 wheeler</h5>
              <span class="fa fa-inr"></span> <span class="amount">1500</span>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h5>Blue book renew charge</h5>
              <span class="fa fa-inr"></span> <span class="amount">1707/2159</span>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg red btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Pricing-->
  <!--Contact-->
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
    <div class="container text-center">

      <h3>Our Social Sites</h3>


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

  <!-- <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script> -->

</body>

</html>
