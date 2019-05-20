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
               <li>
                    <a href="{{route('login')}}"> 
                        <i class="ti-user"></i> Login
                    </a>
                </li>
               <li  class="active">
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
        <h3 class="mb-30">Sign Up</h3>

        <form method="POST" action="{{ route('register-user') }}" >
                        @csrf


            <div class="row">
               <div class="section-field mb-20 col-sm-6">
                 <label class="mb-10" for="name">First name* </label>
                   <input id="name" 
                   class="web form-control" 
                   type="text" 
                   placeholder="" 
                   name="firstname" 
                   value="{{ old('firstname') }}" 
                   autocomplete="off" 
                   autofocus="">

                   @if ($errors->has('firstname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                </div>
                 <div class="section-field mb-20 col-sm-6">
                 <label class="mb-10" for="name">Last name* </label>
                   <input id="name" 
                    class="web form-control" 
                    type="text" 
                    placeholder="" 
                    autocomplete="off" 
                    value="{{ old('lastname') }}" 
                    name="lastname">
                    @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="section-field mb-20">
             <label class="mb-10" for="name">Phone Number* </label>
               <input 
               class="web form-control" 
               type="tel" 
               placeholder="" 
               value="{{ old('phone_number') }}" 
               autocomplete="off" 
               name="phone_number">

               @if ($errors->has('phone_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif

            </div>


            <div class="section-field mb-20">
             <label class="mb-10" for="name">Email* </label>
               <input id="name" 
               class="web form-control" 
               type="text" 
               placeholder="" 
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
            <div class="section-field mb-20">
             <label class="mb-10" for="Password">Confirm Password* </label>
               <input id="Password"
                class="Password form-control"
                type="password" 
                value="{{ old('password_confirmation') }}" 
                placeholder="" 
                name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            @php 
                $ref = "";
                if(isset($tnid)){
                    $ref = $tnid;
                }

                if(!empty(old('refrence_tnid'))){
                    $ref = old('refrence_tnid');
                }
                
            @endphp

            <div class="pattern  pl-20 pr-20 pt-20 pb-20 mb-10" style="background: url({{asset('site-assets/images/pattern/pattern-bg.png) repeat;')}}">
                <div class="section-field mb-20">
                 <label class="mb-10" for="name">Reference Code </label>
                   <input id="refrence_tnid" 
                   class="web form-control" 
                   style="font-weight: bold;" 
                   type="text" 
                   placeholder="" 
                   value="{{ $ref }}" 
                   autocomplete="off" 
                   name="refrence_tnid">

                   @if ($errors->has('refrence_tnid'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('refrence_tnid') }}</strong>
                        </span>
                    @endif

                </div>
            </div>
            

           {{--  <div class="section-field">
              <div class="remember-checkbox mb-30">
                 <input type="checkbox" class="form-control" name="two" id="two" />
                 <label for="two"> Remember me</label>
                 <a href="password-recovery.html" class="pull-right">Forgot Password?</a>
                </div>
              </div> --}}

              <button type="submit" class="button">
                    <span>Sign Up</span>
                <i class="ti-pencil-alt"></i>
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
