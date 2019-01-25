@extends('layouts.site')

@section('content')
 
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(http://teamnhyira.com/wp-content/uploads/2018/03/09-1.jpg);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Our Packages</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li>
              <a href="{{route('site')}}">
                <i class="fa fa-home"></i> Home
              </a> 
              <i class="fa fa-angle-double-right"></i>
            </li>
            <li>
              
              @if($packageType->category == getPhotoType())
                <a href="{{route('site.photo-packages')}}">
                  Photograhpy
                </a> 
              @endif
              @if($packageType->category == getVideoType())
                <a href="{{route('site.video-packages')}}">
                  Videography
                </a> 
              @endif
              <i class="fa fa-angle-double-right"></i>
            </li>
            <li>
              <span>Available Packages</span> 
            </li>
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
            <h4 >Our Available Packages For</h4>
            <h2 >{{$packageType->name}}</h2>
            <p>Please review and proceed with one of our base packages</p>
          </div>
      </div>

    </div>
    <!-- ============================================ -->
    <div class="service-3">
     @php
       $img_right = true;
     @endphp
     @foreach($packageType->packages as $index => $package)
       <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 {{$img_right?'col-md-push-6':''}}" >
            <img class="img-responsive full-width" src="{{route('packages.images.large',['image'=>$package->image]) }}" alt=""> 
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 sm-mt-30 sm-mb-30 {{!empty($img_right)?'col-md-pull-6':''}}">
           <div class="service-blog text-right"> 
               <h3 class="theme-color">{{$package->name}}</h3>
               {{-- <p>{{$package->description}}</p> --}}
               <b>{{$package->name}}</b>
               <h4>
                 <i class="fa fa-gift"></i>
                 Package Includes
               </h4>
               <ul class="list list-unstyled list-compact">
                 @php
                   $products = preg_split('/\n|\r\n?/', $package->description);
                   // dd($options);
                 @endphp
                 @foreach($products as $product)
                   <li>{{$product}}</li>
                 @endforeach
               </ul>

               <a class="button border" href="#">
                 Choose This
                 <i class="fa fa-long-arrow-right"></i>
               </a>
           </div>
         </div>
       </div>
       @php
         $img_right = !$img_right;
       @endphp
     @endforeach
     
   </div>
  </div>
</section>


@endsection
