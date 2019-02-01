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
              <a href="{{route('site.video-albums')}}">
                 Video Albums
              </a> 
              <i class="fa fa-angle-double-right"></i>
            </li>
            <li><span>Albums</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>


<section class="white-bg mt-20">
 <div class="container"> 
  <div class="row center"> 
    @foreach($portfolio->items as $media)
      <div class="col-md-6">
        <video 
          style="width:100%;height:100%;"  
          poster="{{route('portfolios.images.raw',['image'=>$portfolio->image]) }}" 
          controls 
          preload="none">
          <source type="video/mp4" src="{{route('portfolio_item_videos',['file'=>$media->resource]) }}" />
        </video>
      </div>
    @endforeach
  
    </div>
 </div>
</section>



@endsection
