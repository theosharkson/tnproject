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

                              ]) ? 'active' : ''}}">
                <a href="{{route('package-types.create')}}">
                    <i class="fa fa-gift"></i> 
                    <span>Package Types</span>
                </a>
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