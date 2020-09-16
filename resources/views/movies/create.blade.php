 @extends('layout')



@section('content')

<section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Register for Driver license</h2>
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
<form method="POST" action="/members/successlogin" enctype="multipart/form-data" class="mc-trial row">
       {{csrf_field()}}
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <h3><b>Demographic Details</b></h3>
          <div class=" controls">
            <label for="name"><b>Full Name</b></label>
            <input name="name" placeholder="Full Name" class="form-control" type="text" required>

            <label for="age"><b>Age</b></label>
            <input name="age" placeholder="Age" class="form-control" type="text" required>

            <label for="gender"><b>Gender</b></label>
            <input name="gender" placeholder="Gender" class="form-control" type="text" required>

            <label for="occupation"><b>Occupation</b></label>
            <input name="occupation" placeholder="" class="form-control" type="text" required>

            <label for="education"><b>Education</b></label>
            <input name="education" placeholder="" class="form-control" type="text" required>

            <label for="blood"><b>Blood Group</b></label>
            <input name="blood" placeholder="" class="form-control" type="text" required>

            <label for="citizenship"><b>Citizenship No.</b></label>
            <input name="citizenship" placeholder="" class="form-control" type="text" required>

            <label for="citizenship issue"><b>Citizenship Issue District</b></label>
            <input name="citizenship_issue" placeholder="" class="form-control" type="text" required>

            <label for="passport"><b>Passport No.</b></label>
            <input name="passport" placeholder="" class="form-control" type="text" required>
            <br/>
            <label for="passport"><b>Upload document: Passport/Citizenship -></b></label>

          </div>
        </div>

        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <h3><b>Address Details</b></h3>
          <div class=" controls">
            <label for="pad"><b>Permanent add. district</b></label>
            <input name="pad" placeholder="" class="form-control" type="text" required>

            <label for="pav"><b>Permanent add. vdc</b></label>
            <input name="pav" placeholder="" class="form-control" type="text" required>

            <label for="paw"><b>Permanent add. ward no.</b></label>
            <input name="paw" placeholder="" class="form-control" type="text" required>

            <label for="tad"><b>Temporary add. district</b></label>
            <input name="tad" placeholder="" class="form-control" type="text" required>

            <label for="tavt"><b>Temporary add. vdc</b></label>
            <input name="tavt" placeholder="" class="form-control" type="text" required>

            <label for="taw"><b>Temporary add. ward no.</b></label>
            <input name="taw" placeholder="" class="form-control" type="text" required>

            <label for="email"><b>Email</b></label>
            <input name="email" placeholder="Email" class="form-control" type="text" required>

            <label for="phone number"><b>Phone number</b></label>
            <input name="phone" placeholder="Phone Number" class="form-control" type="text" required>

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
                <br/>
                <br/>

                <input type="file" name="document"/>

          </div>
        </div>
        
<div class="form-group col-md-3 col-sm-4">
          <div class=" controls">

<h2>Advertisements</h2>
<p>&nbsp</p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="https://siddharthainsurance.com/calculate" target="_blank">
  <img src="/img/safe.jpg" style="width:100%">
</a>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
   <a href="https://sds.org.np/" target="_blank">
  <img src="/img/driving.jpg" style="width:100%">
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a href="http://www.iginepal.com/blog/product/motor-vehicle-insurance/" target="_blank">
  <img src="/img/covered.jpg" style="width:100%">
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
            Register for License <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
 <br/>
<br/>



@endsection



