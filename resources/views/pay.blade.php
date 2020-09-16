 @extends('layout')



@section('content')

<section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>License exam result</h2>
          <p>Welcome to your very own account where you can store your credentials and see your regestration process.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4></h4>
               
              </div>
              <div class="fea-img pull-left">
                
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-5">
              <div class="heading pull-right">
                <h3>Pay taxes here</h3>

 <div class="w3-container">
        @if ($message = Session::get('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('success');?>
        @endif

        @if ($message = Session::get('error'))
        <div class="w3-panel w3-red w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('error');?>
        @endif

      <form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
          action="{!! URL::to('paypal') !!}">
        <div class="w3-container w3-teal w3-padding-16">Paywith Paypal</div>
        {{ csrf_field() }}
        <h2 class="w3-text-blue">Payment Form</h2>
        <label class="w3-text-blue"><b>Vehicle Owner's Name:</b></label>
        <input class="w3-input w3-border" id="name" type="text" name="name"></p>
        <label class="w3-text-blue"><b>Vehicle's no. Plate:</b></label>
        <input class="w3-input w3-border" id="vehicle" type="text" name="vehicle"></p>
        <label class="w3-text-blue"><b>Enter Amount</b></label>

        <input class="w3-input w3-border" id="amount" type="text" name="amount"></p>
        
          <button type="submit" class="paypal-button">
    <span class="paypal-button-title">
      Pay now with
    </span>
    <span class="paypal-logo">
      <i>Pay</i><i>Pal</i>
    </span>
  </button>
      </form>
    </div>

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

<script type="text/javascript">
  
$(document).ready(function () {

    $('#payment-form').validate({ // initialize the plugin
        rules: {
            name1: {
                required: true,
                email: true
            },
            vehicle: {
                required: true,
                minlength: 5
            }
        }
    });

});
</script>
@endsection