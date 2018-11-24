<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
          {{-- <p class="logo-t">MEMORIES4EVER</p> --}}
            <a href="#"></a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="{{asset('/admin-assets/assets/images/users/user.png')}}" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="{{asset('/admin-assets/assets/images/users/user.png')}}" alt=""/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">{{ Auth::user()?Auth::user()->name:'' }}</div>
                    <div class="profile-data-title">{{ Auth::user()?Auth::user()->type->name:'' }}</div>
                </div>
                <div class="profile-controls">

                    <a href="" class="profile-control-left"><span class="fa fa-desktop"></span></a>

                    <a href="" class="profile-control-right"><span class="fa fa-shopping-cart"></span></a>
                </div>
            </div>                                                                        
        </li>
        <li class="xn-title">Navigation</li>
        <li class="{{in_array(Request::route()->getName(), [
                              'dashboard',
                              ]) ? 'active' : ''}}">
            <a href="{{route('dashboard')}}">
              <span class="fa fa-desktop"></span> 
              <span class="xn-text">Dashboard</span>
            </a>                        
        </li>                  
        <li class="xn-openable {{in_array(Request::route()->getName(), [
                              'user-types.index',
                              'user-types.edit',
                              'user-types.create',
                              'staffs.create',
                              'staffs.edit',
                              'staffs.index',
                              ]) ? 'active' : ''}}">
            <a href="#"><span class="fa fa-users"></span> 
                <span class="xn-text">Staff Management</span>
            </a>
            <ul>
                <li class="{{in_array(Request::route()->getName(), [
                              'user-types.index',
                              'user-types.edit',
                              'user-types.create',
                              ]) ? 'active' : ''}}">
                    <a href="{{route('user-types.create')}}">
                        <span class="fa fa-cogs"></span> 
                        User Types Setup
                    </a>
                </li>

                <li class="{{in_array(Request::route()->getName(), [
                              'staffs.create',
                              'staffs.edit',
                              ]) ? 'active' : ''}}">
                    <a href="{{route('staffs.create')}}">
                        <span class="fa fa-user"></span> 
                        Staffs
                    </a>
                </li>

            </ul>
        </li>

        <li class="xn-openable {{in_array(Request::route()->getName(), [
                              'products.index',
                              'products.edit',
                              'products.create',
                              'packages.create',
                              'packages.edit',
                              'packages.index',
                              ]) ? 'active' : ''}}">
            <a href="#"><span class="fa fa-users"></span> 
                <span class="xn-text">Packages/Products</span>
            </a>
            <ul>
                <li class="{{in_array(Request::route()->getName(), [
                              'products.index',
                              'products.edit',
                              'products.create',
                              ]) ? 'active' : ''}}">
                    <a href="{{route('products.create')}}">
                        <span class="fa fa-gift"></span> 
                        Products
                    </a>
                </li>

                <li class="{{in_array(Request::route()->getName(), [
                              'packages.create',
                              'packages.edit',
                              ]) ? 'active' : ''}}">
                    <a href="{{route('packages.create')}}">
                        <span class="glyphicon glyphicon-gift"></span> 
                        Packages
                    </a>
                </li>

            </ul>
        </li>

        
    </ul>
    <!-- END X-NAVIGATION -->
</div>