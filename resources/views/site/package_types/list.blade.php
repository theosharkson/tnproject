@extends('layouts.site')

@section('content')
 
<section 
  class="page-title bg-overlay-black-60 parallax"
  @if($type == getPhotoType())
    style="background-image: url({{asset('site-assets/images/site/1.jpg')}});"
    data-jarallax='{"speed": 0.6}' 
  @endif
  @if($type == getVideoType())
    style="background-image: url({{asset('site-assets/images/site/4.jpg')}});" 
    data-jarallax-video="mp4:{{asset('site-assets/video/video.mp4')}},webm:{{asset('site-assets/video/video.webm')}},ogv:{{asset('site-assets/video/video.ogv')}}"
  @endif
  >
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
        <div class="page-title-name">
          @if($type == getPhotoType())
            <h1>Our Photography Package Groups</h1>
          @endif
          @if($type == getVideoType())
            <h1>Our Videography Package Groups</h1>
          @endif
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
            @if($type == getPhotoType())
              <span>Photograhpy Package Groups</span>
            @endif
            @if($type == getVideoType())
              <span>Videography Package Groups</span>
            @endif
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
            <h2 >Our Available Groups</h2>
            <p>Please review and proceed with one of our base collections</p>
          </div>
      </div>

    </div>
    <!-- ============================================ -->
   <div 
   class="service-3 @if($type == getPhotoType()) text-center @endif">

    @foreach($package_types->where('category',$type) as $index => $package_type)
      <div class="col-lg-4 col-md-4 col-sm-4">
        <a href="{{route('site.photo-packages-list',['packageType'=>$package_type->id])}}">
          <div class="feature-box active">
            <div class="feature-box-content">
            <i class="ti-heart"></i>
            <h4>{{$package_type->name}}</h4>
            {{-- <p>{{$package_type->description}}</p> --}}
            </div>
            <a href="{{route('site.photo-packages-list',['packageType'=>$package_type->id])}}">
              <i class="fa fa-gift"></i>
              See Packages
            </a>
            <div class="feature-box-img" style="background-image: url('{{route('package-type.images.large',['image'=>$package_type->image]) }}');" ></div>
            <span class="border"></span>
          </div>
        </a>
      </div>
  
    @endforeach
    
  </div>
  </div>
</section>


@endsection
