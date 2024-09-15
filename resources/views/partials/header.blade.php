<div class="scroll-progress bg-grey-900"></div>
<!-- Start Preloader -->
<div class="preloader text-center">
    <div class="loader"></div>
</div>
<!--Offcanvas sidebar-->
<aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
    <button class="off-canvas-close"><img class="svg-icon-24" src="{{ asset('/assets/imgs/theme/svg/close.svg') }}"
            alt=""></button>
    <div class="sidebar-inner">
        <div class="sidebar-widget widget-creative-menu">
            <ul>
                <li><a href="{{ url('category.html') }}">Design<sup>235</sup></a></li>
                <li><a href="{{ url('category-big.html') }}">Lifestyle<sup>186</sup></a></li>
                <li><a href="{{ url('category-grid.html') }}">Travel Tips<sup>98</sup></a></li>
                <li><a href="{{ url('category-list.html') }}">Healthy<sup>247</sup></a></li>
            </ul>
        </div>
        <div class="offcanvas-copyright mt-65">
            <h6 class="text-muted text-uppercase mb-20 font-heading text-white">Flow Magazine</h6>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio suspendisse leo neque.
            </p>
            <p><strong class="color-black">Address</strong><br>
                123 Main Street<br>
                New York, NY 10001</p>
            <p><strong class="color-black">Phone</strong><br>
                (+01) 234 567 89</p>
        </div>
    </div>
</aside>

<!-- Start Header -->
<header class="main-header header-sticky">
    <div class="position-relative">
        <div class="container align-self-center">
            <div class="header-style-1">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('/assets/imgs/theme/logo.svg') }}"
                            alt=""></a>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/') }}">Home</a>

                            </li>
                            <li> <a href="{{ url('/about') }}">About</a> </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/category') }}">Blog</a>

                            </li>
                            <li> <a href="{{ url('/contact') }}">Contact</a> </li>
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/index') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ url('#') }}">Pages</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/search') }}">Search</a></li>
                                    <li><a href="{{ url('/author') }}">Author</a></li>
                                    <li><a href="{{ url('page-404.html') }}">404 page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ url('#') }}">Category</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="{{ url('category-list.html') }}">List layout</a></li>
                                    <li><a href="{{ url('category-grid.html') }}">Grid layout</a></li>
                                    <li><a href="{{ url('category-list-2.html') }}">List 2 layout</a></li>
                                    <li><a href="{{ url('category-big.html') }}">Big layout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ url('#') }}">Single post</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="{{ url('/single') }}">Default</a></li>
                                    <li><a href="{{ url('single-2.html') }}">Big image</a></li>
                                    <li><a href="{{ url('single-3.html') }}">Right sidebar</a></li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--end: main-nav-->
                <div class="header-right">
                    <button class="search-icon d-md-inline">
                        <img src="{{ asset('/assets/imgs/theme/svg/search.svg') }}" alt="">
                    </button>
                    <button class="btn btn-md bg-dark text-white ml-15 box-shadow d-none d-lg-inline"><a
                            href="https://themeforest.net/item/flow-html-personal-blog-template/30381120">Buy
                            Now</a></button>
                </div>
            </div>
            <div class="mobile_menu d-lg-none d-block"></div>
        </div>
        <div class="off-canvas-toggle-cover d-inline-block">
            <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                <img class="svg-icon-24" src="{{ asset('/assets/imgs/theme/svg/menu.svg') }}" alt="">
            </div>
        </div>
    </div>
</header>
