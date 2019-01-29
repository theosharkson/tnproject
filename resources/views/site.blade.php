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
          <!-- LAYER NR. 9 -->
          <div class="tp-caption   tp-resizeme" 
             id="slide-23-layer-2" 
             data-x="60" 
             data-y="340" 
             data-width="['auto']"
             data-height="['auto']"
             data-type="text" 
             data-responsive_offset="on" 
             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
             data-textAlign="['left','left','left','left']"
             data-paddingtop="[0,0,0,0]"
             data-paddingright="[0,0,0,0]"
             data-paddingbottom="[0,0,0,0]"
             data-paddingleft="[0,0,0,0]"
             style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 300; color: rgba(255,255,255,1); letter-spacing: px;font-family:Montserrat ;">Welcome. </div>
          <!-- LAYER NR. 10 -->
          <div class="tp-caption   tp-resizeme" 
             id="slide-23-layer-7" 
             data-x="60" 
             data-y="411" 
             data-width="['auto']"
             data-height="['auto']"
             data-type="text" 
             data-responsive_offset="on" 
             data-frames='[{"delay":1080,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
             data-textAlign="['left','left','left','left']"
             data-paddingtop="[0,0,0,0]"
             data-paddingright="[0,0,0,0]"
             data-paddingbottom="[0,0,0,0]"
             data-paddingleft="[0,0,0,0]"
             style="z-index: 7; white-space: nowrap; font-size: 24px; line-height: 28px; font-weight: 200; color: rgba(255,255,255,1); letter-spacing: px;font-family: Montserrat ;">What would you like to do first?</div>

        

          <!-- LAYER NR. 12 -->
          <div class="tp-caption rev-btn  tp-resizeme  rev-button" 
             id="slide-23-layer-12" 
             data-x="60" 
             data-y="480" 
             data-width="['auto']"
             data-height="['auto']"
             data-type="button" 
             data-responsive_offset="on" 
             data-frames='[{"delay":2090,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,0,0);bc:rgb(0,0,0);bs:solid;bw:0 0 0 0;"}]'
             data-textAlign="['inherit','inherit','inherit','inherit']"
             data-paddingtop="[12,12,12,12]"
             data-paddingright="[30,30,30,30]"
             data-paddingbottom="[12,12,12,12]"
             data-paddingleft="[30,30,30,30]"
             style="z-index: 8; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 700; color: #ffffff; letter-spacing: px;font-family:Montserrat ;text-transform:uppercase;background-color:#da9803;border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"
             onclick="$('html, body').animate({scrollTop: $('#packages').offset().top}, 2000);"  >
              Browse Our Packages </div>
          <!-- LAYER NR. 13 -->
          <div class="tp-caption rev-btn  tp-resizeme" 
             id="slide-23-layer-13" 
             data-x="290" 
             data-y="480"
             data-width="['auto']"
             data-height="['auto']"
             data-type="button" 
             data-responsive_offset="on" 
             data-frames='[{"delay":2560,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);"}]'
             data-textAlign="['inherit','inherit','inherit','inherit']"
             data-paddingtop="[10,10,10,10]"
             data-paddingright="[30,30,30,30]"
             data-paddingbottom="[10,10,10,10]"
             data-paddingleft="[30,30,30,30]"
             style="z-index: 9; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 600; color: rgba(255,255,255,1); letter-spacing: px;font-family:Montserrat ;text-transform:uppercase;background-color:rgba(0,0,0,0);border-color:rgb(255,255,255);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a style="display: block;" class="text-white" href="{{route('site.portfolio.select-type')}}">View Portfolio</a> </div>
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


  <section class="shop-split split-section white-bg page-section-ptb" id="packages">
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
             <p>Feel free to explore our beautifully crafted video packages to suit your every need. Do you know our packages are customizable!!!??. </p>
             
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
             <p>Explore our available photography packages and trust me, you are surely going to find what you need. Also very customizable to suite your extra needs.</p>
             
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
