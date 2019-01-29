@extends('layouts.site')

@section('content')
 
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url({{asset('site-assets/images/slider/5.jpg')}});">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Our Portfolio</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li>
              <a href="{{route('site')}}">
                <i class="fa fa-home"></i> Home
              </a> 
              <i class="fa fa-angle-double-right"></i>
            </li>
            <li><span>Portfolio</span> </li>
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
            <h2 >Our Available Portfolios</h2>
            <p>Please pick one of our available portfolios to proceed.</p>
          </div>
      </div>

    </div>

  

    <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-2 mt-10">
      <a href="{{route('site.photo-albums')}}" style="margin: 0px; padding: 0px;">
        <div class="feature-box active">
          <div class="feature-box-content">
          <i class="ti-image"></i>
          <h4>Photo Albums</h4>
          <p>View a collection of some of our finest photo albums.</p>
          </div>
          <a href="{{route('site.photo-albums')}}">View Albums</a>
          <div class="feature-box-img" style="background-image: url('{{asset('site-assets/images/slider/2.jpg')}}');"></div>
          <span class="border"></span>
        </div>
      </a>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 mt-10">
      <a href="{{route('site.video-albums')}}" style="margin: 0px; padding: 0px;">
        <div class="feature-box  active">
          <div class="feature-box-content">
          <i class="ti-camera"></i>
          <h4>Video Portfolio</h4>
          <p>See some of our video productions for all kinds of events.</p>
          </div>
          <a href="{{route('site.video-albums')}}">See Video Collections</a>
          <div class="feature-box-img" 
            style="background-image: url({{asset('site-assets/images/site/4.jpg')}});" 
            data-jarallax-video="mp4:{{asset('site-assets/video/video.mp4')}},webm:{{asset('site-assets/video/video.webm')}},ogv:{{asset('site-assets/video/video.ogv')}}"></div>
          <span class="border"></span>
        </div>
      </a>
    </div>



   
  </div>
</section>




@endsection
