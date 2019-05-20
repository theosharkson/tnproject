
@extends('layouts.site')

@section('content')

<section class="page-title smaller-title bg-overlay-black-60 parallax"  style="background: url({{asset('site-assets/images/slider/2.jpg')}})"
  data-jarallax='{"speed": 0.5}'>
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>How To Complete Payment</h1>
          <p>Please read and follow payment process to complete your Order</p>
        </div>


        <ul class="page-breadcrumb">
          <li>
            <a href="{{route('site')}}">
              <i class="fa fa-home"></i> Home
            </a> 
            <i class="fa fa-angle-double-right"></i>
          </li>
          <li><span>Payment Steps</span> </li>
       </ul>

     </div>
    </div> 
  </div>
</section>



<section class="process-list white-bg page-section-pt">
  <div class="container">
    <div class="row ">
      <div class="col-sm-12"> 
       <div class="process left">
           <div class="process-step">
            <strong>01</strong>
           </div>
           <div class="process-content">
            <div class="process-icon">
              <span class="flaticon-line"></span>
            </div>  
            <div class="process-info">
              <h5 class="mb-20"> <i class="ti-shopping-cart-full"></i> Place Order</h5>
               <p>At the bottom of this page is a <strong>PLACE ORDER NOW</strong> button, Click that to submit your order to Team Nhyira.</p>
            </div>
           </div>
           <div class="border-area left-bottom"></div>
         </div>
       <div class="process right">
           <div class="process-step">
             <strong>02</strong>
           </div>
           <div class="process-content text-right">
             <div class="process-icon">
              <span class="flaticon-technology-1"></span>
             </div> 
             <div class="process-info">
              <h5 class="mb-20"> <i class="icon-download"></i> Download Payment Details</h5>
               <p>After successfully submitting your order, you will be redirected to a temporal dashboard showing you your orders that are pending payment. On top of that page is a button to download our payment details. Click that to download the payment details as shown in the image below. </p>
               <div>
                 <img style="width:100%" src="{{asset('site-assets/images/payment-steps/download-details.png')}}">
               </div>
             </div>
           </div>
             <div class="border-area right-top"></div>
             <div class="border-area right-bottom"></div>
         </div>
         <div class="process left">
           <div class="process-step">
             <strong>03</strong>
           </div>
           <div class="process-content">
               <div class="process-icon">
                <span class="flaticon-computer"></span>
               </div> 
               <div class="process-info">
                <h5 class="mb-20"> <i class="icon-wallet"></i> Make Payment</h5>
                 <p>After Downloading our payment details, Please choose any of the payment platforms stated in the downloaded pdf.</p>

                 <div class="alerts-and-callouts">
                   <div class="bs-callout bs-callout-default">
                     {{-- <h4>NB:</h4> --}}
                     In the <strong>REFERENCE</strong> part when making the payment, please  Input your name , then hyphen(-) and the order code shown on your dashboard. <br>
                     <strong>E.g.</strong> REF: <strong>Chris Newton-M4K6YS</strong>
                   </div>
                 </div>
                 <p>You can find your order code on your dashboard like the image below</p>
                 <div>
                   <img style="width:100%" src="{{asset('site-assets/images/payment-steps/code.png')}}">
                 </div>
               </div>
             </div>
             <div class="border-area left-bottom"></div>
             <div class="border-area left-top"></div>
         </div>
  
       <div class="process right">
           <div class="process-step">
             <strong>04</strong>
           </div>
           <div class="process-content text-right">
             <div class="process-icon">
              <span class="flaticon-stopwatch-tool-to-control-test-time"></span>
             </div> 
           <div class="process-info">
              <h5 class="mb-20"> <i class="icon-upload"></i> Upload Proof Of Payment</h5>
               <p>After you complete the payment using any of out payment details provided in the pdf, you will have to upload a proof of the payment you made. It could be an image of the receipt or a screenshot of any digital payment.</p>

                <p>You can upload the image using the button to the right as shown in the image in <strong>setp 3</strong> above</p>
             </div>
           </div>
            <div class="border-area right-top"></div>
           <div class="border-area right-bottom"></div>
         </div>
      
       <div class="process left">
           <div class="process-step">
             <strong>05</strong>
           </div>
           <div class="process-content">
           <div class="process-icon">
            <span class="flaticon-rocket-launch"></span>
            </div>
            <div class="process-info">
              <h5 class="mb-20"> <i class="ti-dashboard"></i> Access Our Full Dashboard</h5>
               <p>After all the quality checks, your order will be Approved which gives you access to your Full Dashboard Features. You may now access all the cool features Team Nhyira Has to offer as part of our services.</p>

               <div class="mt-50">
                 <form method="POST" id="order_form" action="{{ route('checkout') }}" >
                   @csrf

                    <button type="submit" class="button large">
                      <i class="ti-shopping-cart-full"></i> Place Order Now
                    </button>

                 </form>
               </div>

             </div>
             </div>
           <div class="border-area left-bottom"></div>
           <div class="border-area left-top"></div>
         </div>
        </div>
     </div>
    </div>
  </section>


@endsection


@section('scripts')

  <script type="text/javascript">
    
  </script>
@endsection
