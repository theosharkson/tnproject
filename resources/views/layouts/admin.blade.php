<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 11:01:45 GMT -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title','TBM Risks Consult Limited')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    


   @include('includes.admin.links')


</head>
<body class="pace-top">
    <!-- begin #page-loader -->
    {{-- <div id="page-loader" class="fade in"><span class="spinner"></span></div> --}}
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class=" page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        @include('includes.admin.header')
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        @include('includes.admin.sidebar')
        <!-- end #sidebar -->
        
        <!-- begin #content -->
        <div id="content" class="content">
            @yield('content')
        </div>
        <!-- end #content -->
        
        
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
    
    @include('includes.admin.scripts')
    @yield('scripts')
    
    
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 11:01:45 GMT -->
</html>
