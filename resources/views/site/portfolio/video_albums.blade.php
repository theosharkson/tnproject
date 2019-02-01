@extends('layouts.site')

@section('content')
 
<section class="page-title bg-overlay-black-60 parallax" style="background-image: url({{asset('site-assets/images/site/4.jpg')}});" data-jarallax-video="mp4:{{asset('site-assets/video/video.mp4')}},webm:{{asset('site-assets/video/video.webm')}},ogv:{{asset('site-assets/video/video.ogv')}}">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Video Albums</h1>
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
              <a href="{{route('site.portfolio.select-type')}}">
                 Portfolio
              </a> 
              <i class="fa fa-angle-double-right"></i>
            </li>
            <li><span>Video Albums</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>


<section class="white-bg masonry-main mt-10">
 <div class="container-fluid"> 
  <div class="row"> 
   <div class="col-lg-12 col-md-12"> 
    {{-- <div class="isotope-filters">
      <button data-filter="" class="active">All</button>
      <button data-filter=".photography">photography</button>
      <button data-filter=".illustration">illustration</button>
      <button data-filter=".branding">branding</button>
      <button data-filter=".web-design">web-design</button>
    </div> --}}
  <div class="masonry columns-3 popup-gallery">
   <div class="grid-sizer"></div>
    
    @foreach($video_albums as $album)
      <div class="masonry-item photography illustration">
        <div class="portfolio-item">
           <img src="{{route('portfolios.images.large',['image'=>$album->image]) }}" alt="">
            <div class="portfolio-overlay">
              <h4 class="text-white">
                <i class="ti-camera"></i>
                {{$album->name}} 
              </h4>
              <span class="text-white"> 
                <a href="{{route('site.video-albums.show',['portfolio'=>$album->id]) }}"> See Videos </a> 
              </span>            
            </div>
            <a class="popup" 
              href="{{route('site.video-albums.show',['portfolio'=>$album->id]) }}">
              {{-- <i class="fa fa-arrows-alt"></i> --}}
            </a>  
        </div>
      </div>
    @endforeach
  
    </div>
   </div>
  </div>
 </div>
</section>



@endsection
