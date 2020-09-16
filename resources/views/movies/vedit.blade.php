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


<form method="POST" action="/members/vehiclelogin/{{ $vehicle->id}}">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}

        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            
            <h3><b>Registration Information</b></h3>
          
            <label for="name"><b>Owner's Full Name</b></label>
            <input name="name" placeholder="Full Name" class="form-control" type="text" value="{{ $vehicle->name}}">

            <label for="age"><b>Age</b></label>
            <input name="age" placeholder="Age" class="form-control" type="text" value="{{ $vehicle->age}}">

            <label for="gender"><b>Gender</b></label>
            <input name="gender" placeholder="Gender" class="form-control" type="text" value="{{ $vehicle->gender}}">

            <label for="address"><b>Address</b></label>
            <input name="address" placeholder="" class="form-control" type="text" value="{{ $vehicle->address}}">
          

          </div>
        </div>

        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <h3><b>Vehicle Details</b></h3>
          <div class=" controls">
            <label for="vps"><b>Vehicle Purchase State</b></label>
            <input name="vps" placeholder="" class="form-control" type="text" value="{{ $vehicle->vps}}">

            <label for="cn"><b>Company Name</b></label>
            <input name="cn" placeholder="" class="form-control" type="text" value="{{ $vehicle->cn}}">

            <label for="vm"><b>Vehicle model</b></label>
            <input name="vm" placeholder="" class="form-control" type="text" value="{{ $vehicle->vm}}">

            <label for="vmy"><b>Vehicle manufacture year</b></label>
            <input name="vmy" placeholder="" class="form-control" type="text" value="{{ $vehicle->vmy}}">

            <label for="vhp"><b>Vehicle Horse power/cc</b></label>
            <input name="vhp" placeholder="" class="form-control" type="text" value="{{ $vehicle->vhp}}">

            <label for="vcn"><b>Vehicle chasis no.</b></label>
            <input name="vcn" placeholder="" class="form-control" type="text" value="{{ $vehicle->vcn}}">

            <label for="ven"><b>Vehicle engine no.</b></label>
            <input name="ven" placeholder="" class="form-control" type="text" value="{{ $vehicle->ven}}">

            <label for="vpc"><b>Vehicle paint color</b></label>
            <input name="vpc" placeholder="" class="form-control" type="text" value="{{ $vehicle->vpc}}">

            <label for="vw"><b>Vehicle 2 Wheeler/Multiple Wheeler</b></label>
            <input name="vw" placeholder="" class="form-control" type="text" value="{{ $vehicle->vw}}">

            <label for="vu"><b>Vehicle Usage Private/Public</b></label>
            <input name="vu" placeholder="" class="form-control" type="text" value="{{ $vehicle->vu}}">

            <label for="fuel">Fuel:</label>
            <br/>
                <select name="fuel" id="cars">
                   <option value="P">Petrol</option>
                   <option value="D">Diesel</option>                  
                   
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

      <form method="POST" action="/members/vehiclelogin/{{ $vehicle->id}}">
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




