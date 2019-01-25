@extends('layouts.site')

@section('content')
 
<!--=================================
 banner -->
 
<section class="rev-slider">
  <div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="webster-slider-1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
  <!-- START REVOLUTION SLIDER 5.4.5.2 fullwidth mode -->
   <div 
   	id="rev_slider_11_1" 
   	class="rev_slider fullwidthabanner" 
   	style="display:none;" 
   	data-version="5.4.5.2">
     <ul>  <!-- SLIDE  -->
        
        <li 
            data-index="rs-1" 
            data-transition="random-static,random-premium,random" 
            data-slotamount="default,default,default,default" 
            data-hideafterloop="0" 
            data-hideslideonmobile="off"  
            data-randomtransition="on" 
            data-easein="default,default,default,default" 
            data-easeout="default,default,default,default" 
            data-masterspeed="default,default,default,default"  
            data-thumb="{{asset('site-assets/images/slider/3.jpg')}}"  
            data-rotate="0,0,0,0"  
            data-saveperformance="off"  
            data-title="Slide" 
            data-description="">
          <!-- MAIN IMAGE -->
              <img 
                src="{{asset('site-assets/images/slider/3.jpg')}}"  
                alt=""  data-bgposition="center center" 
                data-bgfit="cover" 
                data-bgrepeat="no-repeat" 
                class="rev-slidebg" 
                data-no-retina>
          <!-- LAYERS -->
        </li>

        <li 
          data-index="rs-1" 
          data-transition="random-static,random-premium,random" 
          data-slotamount="default,default,default,default" 
          data-hideafterloop="0" 
          data-hideslideonmobile="off"  
          data-randomtransition="on" 
          data-easein="default,default,default,default" 
          data-easeout="default,default,default,default" 
          data-masterspeed="default,default,default,default"  
          data-thumb="{{asset('site-assets/images/slider/2.jpg')}}"  
          data-rotate="0,0,0,0"  
          data-saveperformance="off"  
          data-title="Slide" 
          data-description="">
        <!-- MAIN IMAGE -->
            <img 
              src="{{asset('site-assets/images/slider/2.jpg')}}"  
              alt=""  data-bgposition="center center" 
              data-bgfit="cover" 
              data-bgrepeat="no-repeat" 
              class="rev-slidebg" 
              data-no-retina>
        <!-- LAYERS -->
      </li>


      


    <li 
    	data-index="rs-2" 
    	data-transition="random-static,random-premium,random" 
    	data-slotamount="default,default,default,default" 
    	data-hideafterloop="0" 
    	data-hideslideonmobile="off"  
    	data-randomtransition="on" 
    	data-easein="default,default,default,default" 
    	data-easeout="default,default,default,default" 
    	data-masterspeed="default,default,default,default"  
    	data-thumb="{{asset('site-assets/images/slider/4.jpg')}}"  
    	data-rotate="0,0,0,0"  
    	data-saveperformance="off"  
    	data-title="Slide" 
    	data-description="">
    	<!-- MAIN IMAGE -->
        <img 
        	src="{{asset('site-assets/images/slider/4.jpg')}}"  
        	alt=""  data-bgposition="center center" 
        	data-bgfit="cover" 
        	data-bgrepeat="no-repeat" 
        	class="rev-slidebg" 
        	data-no-retina>
    	<!-- LAYERS -->
    </li>

        
      <!-- SLIDE  -->
        <li 
        	data-index="rs-3" 
        	data-transition="random-static,random-premium,random" 
        	data-slotamount="default,default,default,default" 
        	data-hideafterloop="0" 
        	data-hideslideonmobile="off"  
        	data-randomtransition="on" 
        	data-easein="default,default,default,default" 
        	data-easeout="default,default,default,default" 
        	data-masterspeed="default,default,default,default"  
        	data-thumb="{{asset('site-assets/images/slider/5.jpg')}}"  
        	data-rotate="0,0,0,0"  
        	data-saveperformance="off"  
        	data-title="Slide" 
        	data-description="">
        <!-- MAIN IMAGE -->
            <img 
            	src="{{asset('site-assets/images/slider/5.jpg')}}"  
            	alt=""  
            	data-bgposition="center center" 
            	data-bgfit="cover" 
            	data-bgrepeat="no-repeat" 
            	class="rev-slidebg" 
            	data-no-retina>
        <!-- LAYERS -->
        
      </li>
    </ul>
  <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
 </div>
</section>


<section class="about page-section-ptb">
  <div class="container">
    <div class="row">
       <div class="col-lg-8 col-md-8 col-md-offset-2">
       <div class="section-title text-center">
            <h6> WELCOME TO TEAM NHYIRA </h6>
            <h2 >Our Services </h2>
            <p>We believe in customer sovereignty and satisfaction .We capture memories that will perpetually last for a lifetime.</p>
          </div>
      </div>
    </div>
  </div>
</section>


  <section class="shop-split split-section white-bg page-section-ptb">
      <div class="side-background">
        <div class="col-md-6 img-side img-left">
             <div class="img-holder img-cover" data-jarallax='{"speed": 0.7}' style="background-image: url(site-assets/images/site/4.jpg);" data-jarallax-video="mp4:site-assets/video/video.mp4,webm:site-assets/video/video.webm,ogv:site-assets/video/video.ogv">
            </div>
          </div>
      </div>
      <div class="container">
        <div class="col-sm-12 col-md-5 col-md-offset-7">
           <div class="shop-split-content">
             <span>Explore our Special</span>
             <h1 class="mt-10">TEAM NHYIRA VIDEO PACKAGES </h1>
             <p>Feel free to explore our beautifully crafted video packages to suite your every need. Do you know our packages are customizable!!!??. </p>
             
             <a class="button black" href="{{route('site.video-packages')}}"> Explore Packages</a>  
           </div>
        </div>
      </div>
</section>

 <section class="shop-split split-section white-bg page-section-ptb">
      <div class="side-background">
        <div class="col-md-6 img-side img-right">
             <div class="img-holder img-cover" data-jarallax='{"speed": 0.6}' style="background-image: url(site-assets/images/site/1.jpg);">
            </div>
          </div>
      </div>
      <div class="container">
        <div class="col-sm-12 col-md-5">
           <div class="shop-split-content">
             <span>Explore our Special</span>
             <h1 class="mt-10">TEAM NHYIRA PHOTOGRAPHY PACKAGES </h1>
             <p>Explore our availabel photography packages and trst me, you are surely going to find what you need. Also very customizable to suite your extra needs.</p>
             
             <a class="button black" href="{{route('site.photo-packages')}}"> Explore Packages</a>  
           </div>
        </div>
      </div>
</section>



 <!--=================================
 Our Blog -->

 <!--=================================
raindrops -->

@endsection
