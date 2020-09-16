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
table, th, td {
  border: 1px solid black;
  padding-left: 70px;
  border-collapse: collapse;
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
              <p class="big-text">Manage, Pay and Register your License and vehicle </p>
              <p class="small-text">We also have provisons for road tax payment, license, bluebook renewal. <br>Click the links below or go through our tabs for our different services</p>             
            </div>
             <div class="intro-para text-center quote">
              <p class="big-text">Here are your personal prefrences.</p>     
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

<div>
		<section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Edit</h2>
          <p>Edit update and delete the movies you have saved and change their state as you wish. Then hit update or delete</p>
          <hr class="bottom-line">
        </div>
        
      </div>
    </div>
  <br/>


<form method="POST" action="/members/successlogin/{{ $online->id}}">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}

        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            
            <label for="name"><b>Full Name</b></label>
            <input name="name" placeholder="Full Name" class="form-control" type="text" value="{{ $online->name}}">

            <label for="age"><b>Age</b></label>
            <input name="age" placeholder="Age" class="form-control" type="text" value="{{ $online->age}}">

            <label for="gender"><b>Gender</b></label>
            <input name="gender" placeholder="Gender" class="form-control" type="text" value="{{ $online->gender}}">

            <label for="occupation"><b>Occupation</b></label>
            <input name="occupation" placeholder="" class="form-control" type="text" value="{{ $online->occupation}}">

            <label for="education"><b>Education</b></label>
            <input name="education" placeholder="" class="form-control" type="text" value="{{ $online->education}}">

            <label for="blood"><b>Blood Group</b></label>
            <input name="blood" placeholder="" class="form-control" type="text" value="{{ $online->blood}}">

            <label for="citizenship"><b>Citizenship No.</b></label>
            <input name="citizenship" placeholder="" class="form-control" type="text" value="{{ $online->citizenship}}">

            <label for="citizenship issue"><b>Citizenship Issue District</b></label>
            <input name="citizenship_issue" placeholder="" class="form-control" type="text" value="{{ $online->citizenship_issue}}">

            <label for="passport"><b>Passport No.</b></label>
            <input name="passport" placeholder="" class="form-control" type="text" value="{{ $online->passport}}">

          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <label for="pad"><b>Permanent add. district</b></label>
            <input name="pad" placeholder="" class="form-control" type="text" value="{{ $online->pad}}">

            <label for="pav"><b>Permanent add. vdc</b></label>
            <input name="pav" placeholder="" class="form-control" type="text" value="{{ $online->pav}}">

            <label for="paw"><b>Permanent add. ward no.</b></label>
            <input name="paw" placeholder="" class="form-control" type="text" value="{{ $online->paw}}">

            <label for="tad"><b>Temporary add. district</b></label>
            <input name="tad" placeholder="" class="form-control" type="text" value="{{ $online->tad}}">

            <label for="tavt"><b>Temporary add. vdc</b></label>
            <input name="tavt" placeholder="" class="form-control" type="text" value="{{ $online->tavt}}">

            <label for="taw"><b>Temporary add. ward no.</b></label>
            <input name="taw" placeholder="" class="form-control" type="text" value="{{ $online->taw}}">

            <label for="email"><b>Email</b></label>
            <input name="email" placeholder="" class="form-control" type="text" value="{{ $online->email}}">

            <label for="phone number"><b>Phone number</b></label>
            <input name="phone" placeholder="" class="form-control" type="text" value="{{ $online->phone}}">

            <label for="vehicle">Choose a category:</label>
            <br/>
                <select name="vehicle" id="cars">
                   <option value="A">A - Motorcycle, Scooter, Moped</option>
                   <option value="B">B - Car, Jeep, Delivery Van</option>
                   <option value="C">C - Tempo, Autorickshaw</option>
                   <option value="D">D - Powerlifter</option>
                   <option value="E">E - Tractor, Trailer</option>
                   <option value="H">H - Road Roller, Dozer</option>
                   <option value="I">I - Crane</option>
                   <option value="J">J - Excavator, Grader, Forklift</option>
                   <option value="K">K - Scooter, Moped</option>
                </select>
          </div>
        </div>
        <!-- End email input -->
        <div class="">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Update Info <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>

      <form method="POST" action="/members/successlogin/{{ $online->id}}">
	{{ method_field('DELETE') }}
	{{ csrf_field() }}

        <div>
          
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Delete Info <i class="fa fa-arrow-right"></i></button>
          
        </div>
      </form>
 <br/>
<br/>


     
</section>
</div>




