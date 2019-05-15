@extends('layouts.site')

@section('content')
 
<section class="page-title smaller-title bg-overlay-black-60 parallax"  style="background: url({{asset('site-assets/images/slider/1.jpg')}})"
  data-jarallax='{"speed": 0.7}'>
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1><i class="fa fa-dashboard"></i>  Your Account Dashboard</h1>
          <p>Monitor Progress of your Orders</p>
        </div>


        <ul class="page-breadcrumb">
          <li>
            <a href="{{route('site')}}">
              <i class="fa fa-home"></i> Home
            </a>  
            <i class="fa fa-angle-double-right"></i>
          </li>
          {{-- <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li> --}}
          <li><span>Dashboard</span> </li>
       </ul>

     </div>
    </div> 
  </div>
</section>


<section class="page-sidebar pt-30">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-3 col-md-3">
        @include('site.dashboard.sidebar') 
      </div> 

      @php 
        $user = Auth::user();
      @endphp

       <div class="col-lg-9 col-md-9 page-content">
           <div class="section-title">
             <h2 > <i class="ti-user"></i> {{$user->firstname}} {{$user->lastname}}</h2>
             <div class="row">
              

              <div class="col-sm-8">
                <div class="action-box black-bg">
                    <h3>Your Team Nhyira Refrence Link</h3>
                    <p>{{route('register-refrence', ['tnid' => $user->tnid])}}</p>
                    {{-- <a class="button border white" href="#">
                      <span>Share Link</span>
                      <i class="fa fa-download"></i>
                   </a>  --}}
                </div>
              </div>

              <div class="col-sm-4">
                <div class="pattern  pl-20 pr-20 pt-20 pb-20 text-center fadeIn animated add-shadow"
                style="background-image: url({{asset('site-assets/images/pattern/bg-pattern-3.jpg')}});">
                   <h4 class="pl-0"><i class="ti-id-badge"></i> Your TN-ID</h4>
                   <h2 class="pl-0"><mark>{{$user->tnid}}</mark></h2>
                 </div>
              </div>

             </div>
           </div>
       </div> 
    </div>
  </div>
</section>



@endsection


@section('scripts')

@endsection
