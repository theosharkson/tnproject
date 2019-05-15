
@extends('layouts.site')

@section('content')
 
<section class="login-box-main login-gradient-03 height-100vh page-section-ptb parallax" data-jarallax='{"speed": 0.6}' style="background-image: url({{asset('site-assets/images/site/4.jpg')}});" 
    data-jarallax-video="mp4:{{asset('site-assets/video/video.mp4')}},webm:{{asset('site-assets/video/video.webm')}},ogv:{{asset('site-assets/video/video.ogv')}}">
  <div class="login-box-main-middle">
  <div class="container">
     <div class="row row-eq-height no-gutter login-top">
      
      <div class="col-md-2 col-md-offset-1">
        <div class="login-box-left  black-bg">
          <img class="logo-small" src="{{asset('site-assets/images/logo/logo.png')}}" alt="">
             <ul class="nav">
               <li class="active">
                    <a href="{{route('login')}}"> 
                        <i class="ti-user"></i> Login
                    </a>
                </li>
               <li>
                <a href="{{route('register')}}"> 
                    <i class="ti-pencil-alt"></i> Signup
                </a>
               </li>
            </ul>
           <div class="social-icons color-hover clearfix pos-bot pb-30 pl-30">
            <ul>
              <li class="social-facebook "><a href="#" class=""><i class="fa fa-facebook"></i></a></li>
              <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

       <div class="col-md-4 theme-bg">
         <div class="login-box pos-r text-white login-box-theme">
          <h2 class="text-white mb-20">Welcome to TEAM NHYIRA</h2>
          <p class="mb-10 text-white">Login to your personal account  </p>
          <p class="text-white">Or Create an account to start your personal experience with the exclusive photography and cinematography team. We are most ready to serve you to your satisfaction</p> 
          <ul class="list-unstyled list-inline pos-bot pb-40">
            <li><a class="text-white" href="#"> Terms of Use</a> </li>
            <li><a class="text-white" href="#"> Privacy Policy</a></li>
          </ul>
         </div> 
       </div>
       <div class="col-md-4">
        <div class="login-box pb-50 clearfix white-bg">
        <h3 class="mb-30">Login</h3>

        <form method="POST" action="{{ route('login') }}" >
                        @csrf

         <div class="section-field mb-20">
             <label class="mb-10" for="name">Email* </label>
               <input id="name" 
               class="web form-control" 
               type="text" 
               placeholder="User email" 
               value="{{ old('email') }}" 
               autocomplete="off" 
               name="email">

               @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

            </div>
            <div class="section-field mb-20">
             <label class="mb-10" for="Password">Password* </label>
               <input id="Password"
                class="Password form-control" 
                type="password" 
                value="{{ old('password') }}" 
                placeholder="Password" 
                name="password">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="section-field">
              <div class="remember-checkbox mb-30">
                 <input type="checkbox" class="form-control" name="two" id="two" />
                 <label for="two"> Remember me</label>
                 <a href="#" class="pull-right">Forgot Password?</a>
                </div>
              </div>

              <button type="submit" class="button">
                    <span>Log in</span>
                <i class="fa fa-check"></i>
                </button>
              {{-- <a href="#" class="button">
                <span>Log in</span>
                <i class="fa fa-check"></i>
             </a> --}}

        </form>


          </div>
         </div>
        </div>
      </div>
  </div>
</section>

@endsection
