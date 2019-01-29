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


            </ul>
            <div class="search-cart">
              <div class="search">
                <a class="search-btn not_click" href="javascript:void(0);"></a>
                <div class="search-box not-click">
                 <input type="text" class="not-click form-control" placeholder="Search" value="" name="s">
                 <i class="fa fa-search"></i>
               </div>
             </div>
             <div class="shpping-cart">
              <a class="cart-btn" href="javascript:void(0);"> 
                <i class="fa fa-shopping-cart icon"></i> <strong class="item">2</strong>
              </a>
              <div class="cart">
                <div class="cart-title">
                 <h6 class="uppercase mb-0">Pending Orders</h6>
               </div>

               <div class="cart-item">
                <div class="cart-image">
                  <img class="img-responsive" src="{{asset('site-assets/images/shop/01.jpg')}}" alt="">
                </div>
                <div class="cart-name clearfix">
                  <a href="javascript:void(0);">Package Name <strong>x2</strong> </a>
                  <div class="cart-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                  </div>
                </div>
                <div class="cart-close">
                  <a href="javascript:void(0);"> <i class="fa fa-times-circle"></i> </a>
                </div>
              </div>

              <div class="cart-total">
                <h6 class="mb-15"> Total: $104.00</h6>
                <a class="button" href="javascript:void(0);">View Cart</a>
                <a class="button black" href="javascript:void(0);">Checkout</a>
              </div>

            </div>
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