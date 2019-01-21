<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Team Nhyira" />
<meta name="description" content="Team Nhyira" />
<meta name="author" content="teamnhyira.com - Team Nhyira" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>@yield('title','Team Nhyira')</title>

  @include('includes.site.links')

</head>

<body>

<div class="wrapper">

 
<!--=================================
 header -->

<header id="header" class="header default">
 
 @include('includes.site.header')

<!--=================================
 mega menu -->
 @include('includes.site.menu')

</header>

<!--=================================
 header -->

 @yield('content')

<!--=================================
 footer -->
 
@include('includes.site.footer')

<!--=================================
 footer -->
 
</div>

  

<div id="back-to-top">
  <a class="top arrow" href="#top">
    <i class="fa fa-angle-up"></i> 
    <span>TOP</span>
  </a>
</div>



@include('includes.site.scripts')
@yield('scripts')

</body>
</html> 