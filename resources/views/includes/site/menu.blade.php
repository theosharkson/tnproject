<div class="menu">  
  <!-- menu start -->
  <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
            <div class="col-lg-12 col-md-12"> 
              <!-- menu logo -->
              <ul class="menu-logo">
                <li>
                  <a href="{{route('site')}}">
                    <img id="logo_img" src="{{asset('site-assets/images/logo/logo.png')}}" alt="logo"> 
                  </a>
                </li>
              </ul>
              <!-- menu links -->
              <div class="menu-bar">
                <ul class="menu-links">
                  
                  

                  @guest
                  @else
                    <li class="{{in_array(Request::route()->getName(), [
                      'dashboard.pending-payment',

                      ]) ? 'active' : ''}}">
                      <a href="{{route('dashboard.pending-payment')}}"> 
                        <i class="fa fa-dashboard"></i>
                        DASHBOARD 
                      </a>
                    </li>
                  @endguest

                  <li class="{{in_array(Request::route()->getName(), [
                    'site',
                    'site.packages',
                    'site.video-packages',
                    'site.photo-packages',
                    'site.video-packages-list',
                    'site.photo-packages-list',

                    ]) ? 'active' : ''}}">
                    <a href="{{route('site')}}"> 
                      Home 
                      {{-- <i class="fa fa-angle-down fa-indicator"></i> --}}
                    </a>
                  </li>
                  <li class="{{in_array(Request::route()->getName(), [
                    'site.about',

                    ]) ? 'active' : ''}}">
                    <a href="{{route('site.about')}}"> 
                      ABOUT 
                      {{-- <i class="fa fa-angle-down fa-indicator"></i> --}}
                    </a>
                  </li>
                  
                  <li class="{{in_array(Request::route()->getName(), [
                    'site.portfolio.select-type',
                    'site.photo-albums',

                    ]) ? 'active' : ''}}">
                    <a href="{{route('site.portfolio.select-type')}}"> 
                      PORTFOLIO 
                      {{-- <i class="fa fa-angle-down fa-indicator"></i> --}}
                    </a>
                  </li>

                  
                  
                  <li>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdHRe45TZTAmPfehJc2IXtH_ccS59XpeN07hkBLgaJfecj1zQ/viewform" target="blank"> 
                      BOOK US 
                      {{-- <i class="fa fa-angle-down fa-indicator"></i> --}}
                    </a>
                  </li>

                  @guest
                     <li>
                         <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                     </li>
                  @else

                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </li>

                   @endguest



                </ul>
                <div class="search-cart">

                 <div class="shpping-cart">

                  @guest
                     
                  @else
                     @if(!empty(Auth::user()->tempOrder))

                        @if(Auth::user()->tempOrder->packages->count() > 0)
                           <a class="cart-btn" href="javascript:void(0);"> 
                             <i class="fa fa-shopping-cart icon"></i> <strong class="item">{{ Auth::user()->tempOrder->packages->count() }}</strong>
                           </a>
                        @endif

                     <div class="cart">
                          <div class="cart-title">
                             <h6 class="uppercase mb-0">Pending Orders</h6>
                           </div>

                        @php 
                        $cart_total = 0;
                        @endphp

                        @foreach(Auth::user()->tempOrder->packages as $key => $cart_item)
                           @php 
                              $cart_item_total = getOrderPackagePrice($cart_item->id);
                              $cart_total = $cart_total + $cart_item_total;
                           @endphp

                            <div class="cart-item">
                                <div class="cart-image">
                                  <img class="img-responsive" src="{{route('packages.images.cartthumb',['image'=>$cart_item->package->image]) }}" alt="">
                                </div>
                                <div class="cart-name clearfix">
                                  <a href="javascript:void(0);">
                                    {{$cart_item->package->name}}
                                    <ins class="pull-right theme-color mr-15" >{{getCurrencySymbol()}}{{currency($cart_item_total)}}</ins> 
                                  </a>
                                  <div class="cart-price">
                                    <small class="very-small">{{$cart_item->package->type->name}}</small> <br>
                                    
                                  </div>
                                </div>
                                <div class="cart-close">
                                  <a href="javascript:void(0);" data-toggle="modal" data-target="#cartModal-{{$key}}"> 
                                    <i class="fa fa-times-circle"></i> 
                                  </a>
                                 </div>
                             </div>
                        @endforeach
                          <div class="cart-total">
                            <h6 class="mb-15"> Total: {{getCurrencySymbol()}}{{currency($cart_total)}}</h6>
                            <a class="button" href="{{route('view-cart')}}">View Cart</a>
                            <a class="button black" href="javascript:void(0);">Checkout</a>
                          </div>

                        </div>
                     @endif
                  @endguest

                  
                 </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</nav>
<!-- menu end -->
</div>

