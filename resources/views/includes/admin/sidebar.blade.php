<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="{{asset('/admin-assets/img/user-12.jpg')}}" alt="" /></a>
                </div>
                <div class="info">
                    {{ Auth::user()?Auth::user()->name:'' }}
                    <small>{{ Auth::user()?Auth::user()->name:'TBM' }}</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            
            <li class="{{in_array(Request::route()->getName(), [
                              'home',

                              ]) ? 'active' : ''}}">
                <a href="{{route('home')}}">
                    <i class="fa fa-laptop"></i> 
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{in_array(Request::route()->getName(), [
                              'package-types.create',
                              'package-types.edit',
                              'add-packages',
                              'packages.edit',

                              ]) ? 'active' : ''}}">
                <a href="{{route('package-types.create')}}">
                    <i class="fa fa-gift"></i> 
                    <span>Package Types</span>
                </a>
            </li>

            <li class="{{in_array(Request::route()->getName(), [
                              'extras.create',
                              'extras.edit',

                              ]) ? 'active' : ''}}">
                <a href="{{route('extras.create')}}">
                    <i class="fa fa-cubes"></i> 
                    <span>Extras</span>
                </a>
            </li>
            <li class="{{in_array(Request::route()->getName(), [
                              'portfolios.create',
                              'portfolios.edit',
                              'add-portfolio-item',
                              'portfolio-item.edit',

                              ]) ? 'active' : ''}}">
                <a href="{{route('portfolios.create')}}">
                    <i class="fa fa-camera-retro"></i> 
                    <span>Portfolios</span>
                </a>
            </li>
            

            <li class="has-sub {{in_array(Request::route()->getName(), [
                                  'orders.pending',


                              ]) ? 'active' : ''}}" >
              <a href="javascript:;">
                  <b class="caret pull-right"></b>
                  <i class="fa fa-shopping-cart"></i>
                  <span>Orders</span>
              </a>

              <ul class="sub-menu">
                  
                  <li class="{{in_array(Request::route()->getName(), [
                                    'orders.pending',
                                    

                                    ]) ? 'active' : ''}}">
                      <a href="{{route('orders.pending')}}">
                          <i class="fa fa-dropbox"></i> 
                          <span>Pending Orders</span>
                      </a>
                  </li>

                  <li class="{{in_array(Request::route()->getName(), [
                                    'orders.pending',

                                    ]) ? 'active' : ''}}">
                      <a href="{{route('orders.pending')}}">
                          <i class="fa fa-shopping-cart"></i> 
                          <span>All Orders</span>
                      </a>
                  </li>

              </ul>

            </li>




            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>