@extends('layouts.site')

@section('content')
 
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url({{asset('site-assets/images/slider/5.jpg')}});">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Our Packages</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li>
              <a href="#">
                <i class="fa fa-home"></i> Home
              </a> 
              <i class="fa fa-angle-double-right"></i>
            </li>
            <li><span>Available Packages</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>


<section class="service white-bg page-section-ptb">
  <div class="container">
    <div class="row">
         <div class="col-lg-8 col-md-8 col-md-offset-2">
            <div class="section-title text-center">
            {{-- <h6>We're Good At </h6> --}}
            <h2 >Our Available Packages</h2>
            <p>Please review and proceed with one of our base packages</p>
          </div>
      </div>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
     <div class="offer-banner-1 text-center sm-mt-40">
        <div class="banner-image bg-overlay-black-50">
         <div class="line-effect">
          <img class="img-responsive" src="{{asset('site-assets/images/slider/2.jpg')}}" alt="">
          <div class="overlay"></div>
         </div>
        </div>
        <div class="banner-content">
          <h1 class="uppercase text-white">Photo Portfolio</h1>
          <strong class="text-white">Having more than 5000+ New Exclusive Men & Women products</strong>
          <a class="button" href="#">view more <i class="fa fa-angle-right"></i></a>
        </div>
     </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
     <div class="offer-banner-1 text-center sm-mt-40">
        <div class="banner-image bg-overlay-black-50">
         <div class="line-effect">
          <img class="img-responsive" src="{{asset('site-assets/images/slider/2.jpg')}}" alt="">
          <div class="overlay"></div>
         </div>
        </div>
        <div class="banner-content">
          <h1 class="uppercase text-white">Video Portfolio</h1>
          <strong class="text-white">Having more than 5000+ New Exclusive Men & Women products</strong>
          <a class="button" href="#">view more <i class="fa fa-angle-right"></i></a>
        </div>
     </div>
    </div>
   
  </div>
</section>




@endsection
