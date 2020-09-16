 @extends('layout')



@section('content')

<section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Tax Information Check</h2>
          <p>Welcome to your account where you can store your credentials and see your regestration process.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4></h4>
               <h3>Calculate total tax to be paid:</h3>
              <label for="email"><b>Vehicle's Tax Price:</b></label>
               <input type="text" id="n1"/><br/><br/>
               <label for="email"><b>Years left Unpaid:</b></label>
        <input type="text" id="n2"/><br/><br/>
        
        <select id="operators">
            
            <option value="X">X</option>
        </select>
        <br/>
        <br/>
        <label for="email"><b>Total Tax that should be paid is:</b></label><br/>
        <button onclick="calc();">=</button>
        <input type="text" id="result"/>

              </div>
              <div class="fea-img pull-left">
                
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-5">
              <div class="heading pull-right">
                <h3>To Check Tax Information</h3>
                <h4>(i) Use our SMS Service.</h4>
                <h4>(ii) Send SMS to <span style="color: #ff0000">4321</span></h4>
                <h4>(iii) And Type Message <span style="color: #ff0000">VTAX VehicleNumber</span></h4>
<img src="../img/smstax.jpg" alt="Smiley face" height="512" width="288">

              </div>

              <div class="fea-img pull-left">
                <i class="fa fa-cog"></i>

              </div>

            </div>
          </div>
          

          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
              
               
              </div>
              <div class="fea-img pull-left">
                
              </div>
               
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

 <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Current Tax & Renewal Rates</h2>
          <p>The Tax rates may change without prior notification.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-5 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h3>Two Wheelers</h3>
              <table class="w3-table">
    <tr>
      <th>Engine (in cc)</th>
      <th>Price (in NRs.)</th>
      
    </tr>
    <tr>
      <td>Up till 125</td>
      <td>2750</td>
      
    </tr>
    <tr>
      <td>126 - 250</td>
      <td>4400</td>
      
    </tr>
    <tr>
      <td>251- 400</td>
      <td>8800</td>
      
    </tr>
    <tr>
      <td>400 and higher</td>
      <td>16500</td>
      
    </tr>
  </table>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              {{-- <a href="#" class="btn btn-bg green btn-block">PURCHACE</a> --}}
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              
              <h4>Tax rates</h4>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h3>Four wheelers</h3>
              <table class="w3-table">
    <tr>
      <th>Engine (in cc)</th>
      <th>Price (in NRs.)</th>
      
    </tr>
    <tr>
      <td>Up till 1000</td>
      <td>20900</td>
      
    </tr>
    <tr>
      <td>1001-1500</td>
      <td>23100</td>
      
    </tr>
    <tr>
      <td>1501-2000</td>
      <td>25300</td>
      
    </tr>
    <tr>
      <td>2001-2500</td>
      <td>35200</td>
      
    </tr>
    <tr>
      <td>2051-2900</td>
      <td>40700</td>
      
    </tr>
    <tr>
      <td>2901 and higher</td>
      <td>58300</td>
      
    </tr>
  </table>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              {{-- <a href="#" class="btn btn-bg red btn-block">PURCHACE</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <script>
            
            function calc()
            {
                var n1 = parseFloat(document.getElementById('n1').value);
                var n2 = parseFloat(document.getElementById('n2').value);
                
                var oper = document.getElementById('operators').value;               
                
                if(oper === 'X')
                {
                    document.getElementById('result').value = n1*n2;
                }
            }
            
        </script>


@endsection