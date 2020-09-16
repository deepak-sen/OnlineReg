 @extends('layout')



@section('content')

<section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Vehicle Regestration</h2>
          <p>Fillout the forms below to register for the drivers license of different category</p>       
          <hr class="bottom-line">
        </div>
        
      </div>
    </div>
  </section>



  @if (count($errors) > 0)
  @foreach ($errors->all() as $error)
  <p class="alert alert-danger">{{$error}}</p>
  @endforeach
  @endif
<form method="POST" action="/members/vehiclelogin" enctype="multipart/form-data" class="mc-trial row">
       {{csrf_field()}}
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <h3><b>Owner Information</b></h3>
          <div class=" controls">
            <label for="name"><b>Owner's Full Name</b></label>
            <input name="name" placeholder="Full Name" class="form-control" type="text" required>

            <label for="age"><b>Age</b></label>
            <input name="age" placeholder="Age" class="form-control" type="text" required>

            <label for="gender"><b>Gender</b></label>
            <input name="gender" placeholder="Gender" class="form-control" type="text" required>

            <label for="address"><b>Address</b></label>
            <input name="address" placeholder="" class="form-control" type="text" required>
          

          </div>
        </div>

        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <h3><b>Vehicle Details</b></h3>
          <div class=" controls">
            <label for="vps"><b>Vehicle Purchase State</b></label>
            <input name="vps" placeholder="" class="form-control" type="text" required>

            <label for="cn"><b>Company Name</b></label>
            <input name="cn" placeholder="" class="form-control" type="text" required>

            <label for="vm"><b>Vehicle model</b></label>
            <input name="vm" placeholder="" class="form-control" type="text" required>

            <label for="vmy"><b>Vehicle manufacture year</b></label>
            <input name="vmy" placeholder="" class="form-control" type="text" required>

            <label for="vhp"><b>Vehicle Horse power/cc</b></label>
            <input name="vhp" placeholder="" class="form-control" type="text" required>

            <label for="vcn"><b>Vehicle chasis no.</b></label>
            <input name="vcn" placeholder="" class="form-control" type="text" required>

            <label for="ven"><b>Vehicle engine no.</b></label>
            <input name="ven" placeholder="" class="form-control" type="text" required>

            <label for="vpc"><b>Vehicle paint color</b></label>
            <input name="vpc" placeholder="" class="form-control" type="text" required>

            <label for="vw"><b>Vehicle 2 Wheeler/Multiple Wheeler</b></label>
            <input name="vw" placeholder="" class="form-control" type="text" required>

            <label for="vu"><b>Vehicle Usage Private/Public</b></label>
            <input name="vu" placeholder="" class="form-control" type="text" required>

            <label for="fuel">Fuel:</label>
            <br/>
                <select name="fuel" id="cars">
                   <option value="P">Petrol</option>
                   <option value="D">Diesel</option>                  
                   
                </select>
                <br/>
               <br/>             

          </div>
        </div>
        
<div class="form-group col-md-3 col-sm-4">
          <div class=" controls">

<h2>Advertisements</h2>
<p>&nbsp</p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="https://nepalinsurance.com.np/motor-ins" target="_blank">
  <img src="/img/insurance.jpg" style="width:100%">
</a>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="http://www.dealgara.com/" target="_blank">
  <img src="/img/sale.jpg" style="width:100%">
</a>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a href="http://www.sagarautoworks.com.np/" target="_blank">
  <img src="/img/repair.jpg" style="width:100%">
</a>

  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

          </div>
        </div>

 <br/>
 <br/>
        <div class="container text-center">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Register Vehicle <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
 <br/>
<br/>



@endsection



