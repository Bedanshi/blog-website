<!DOCTYPE html>
<html>
    <div class="no-js" lang="en"></div>

 <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Personal Blog By Bedanshi Subedi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("/assets/imgs/theme/favicon.png") }}">
    <!-- Template CSS  -->
    <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/widgets.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/responsive.css") }}">
 </head>

  <body>
    <div class="home-page-1"></div>
    <div class="scroll-progress bg-grey-900"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="loader"></div>
    </div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><img class="svg-icon-24" src="{{ asset("/assets/imgs/theme/svg/close.svg") }}" alt=""></button>
        <div class="sidebar-inner">
            <div class="sidebar-widget widget-creative-menu">
                <ul>
                    <li><a href="{{ url("category.html") }}">Design<sup>235</sup></a></li>
                    <li><a href="{{ url("category-big.html") }}">Lifestyle<sup>186</sup></a></li>
                    <li><a href="{{ url("category-grid.html") }}">Travel Tips<sup>98</sup></a></li>
                    <li><a href="{{ url("category-list.html") }}">Healthy<sup>247</sup></a></li>
                </ul>
            </div>
            <div class="offcanvas-copyright mt-65">
                <h6 class="text-muted text-uppercase mb-20 font-heading text-white">Bedanshi's Blog</h6>
                <p>
                    See the world through my eyes!!
                </p>
                <p><strong class="color-black">Address</strong><br>
                    Kathmandu City<br>
                    Nepal</p>
                <p><strong class="color-black">Phone</strong><br>
                    9800929304</p>
            </div>
        </div>
    </aside>

        <!-- Topbar Start -->
         @include('partials.header')
        <!-- Topbar End -->

        @yield('content')

        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->

  </body>

</html>
