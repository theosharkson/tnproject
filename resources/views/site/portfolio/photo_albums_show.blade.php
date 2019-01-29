@extends('layouts.site')

@section('content')
 
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url({{route('portfolios.images.raw',['image'=>$portfolio->image]) }});">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Album</h1>
          <p>{{$portfolio->name}}</p>
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
            <li>
              <a href="{{route('site.photo-albums')}}">
                 Photo Albums
              </a> 
              <i class="fa fa-angle-double-right"></i>
            </li>
            <li><span>Albums</span> </li>
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
  <div class="masonry columns-5 popup-gallery">
   <div class="grid-sizer"></div>
    
    @foreach($portfolio->items as $media)
      <div class="masonry-item photography illustration">
        <div class="portfolio-item">
           <img src="{{route('portfolio-items.images.large',['image'=>$media->resource]) }}" alt="">
            {{-- <div class="portfolio-overlay">
              <h4 class="text-white">
                <a href=""> {{$media->name}} </a> 
              </h4>
              <span class="text-white"> 
                <a href="#"> View Gallery </a> 
              </span>            
            </div> --}}
            <a class="popup portfolio-img" 
              href="{{route('portfolio-items.images.raw',['image'=>$media->resource]) }}">
              <i class="fa fa-arrows-alt"></i>
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
