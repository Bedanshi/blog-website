  <!-- Start Header -->
  <header class="main-header header-sticky">
    <div class="position-relative">
        <div class="container align-self-center">
            <div class="header-style-1">
                <div class="logo">
                    <a href="{{ url("/") }}"><img src="{{ asset("/assets/imgs/theme/logo.svg") }}" alt=""></a>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline">
                            <li class="menu-item-has-children">
                                <a href="{{ url("/") }}">Home</a>
                            </li>
                            <li> <a href="{{ url("/about") }}">About</a> </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url("/category") }}">Blog</a>
                            </li>
                            <li> <a href="{{ url("/contact") }}">Contact</a> </li>
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="{{ url("index.html") }}">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ url("#") }}">Pages</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="{{ url("/about") }}">About</a></li>
                                    <li><a href="{{ url("/contact") }}">Contact</a></li>
                                    <li><a href="{{ url("page-design.html") }}">Typography</a></li>
                                    <li><a href="{{ url("page-register.html") }}">Register</a></li>
                                    <li><a href="{{ url("page-login.html") }}">Login</a></li>
                                    <li><a href="{{ url("/search") }}">Search</a></li>
                                    <li><a href="{{ url("page-author.html") }}">Author</a></li>
                                    <li><a href="{{ url("page-404.html") }}">404 page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ url("#") }}">Category</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="{{ url("category-list.html") }}">List layout</a></li>
                                    <li><a href="{{ url("category-grid.html") }}">Grid layout</a></li>
                                    <li><a href="{{ url("category-list-2.html") }}">List 2 layout</a></li>
                                    <li><a href="{{ url("category-big.html") }}">Big layout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ url("#") }}">Single post</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="{{ url("single.html") }}">Default</a></li>
                                    <li><a href="{{ url("single-2.html") }}">Big image</a></li>
                                    <li><a href="{{ url("single-3.html") }}">Right sidebar</a></li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--end: main-nav-->
                <div class="header-right">
                    <button class="search-icon d-md-inline">
                        <img src="{{ asset("/assets/imgs/theme/svg/search.svg") }}" alt="">
                    </button>
                    <button class="btn btn-md bg-dark text-white ml-15 box-shadow d-none d-lg-inline"><a href="https://themeforest.net/item/flow-html-personal-blog-template/30381120">Buy Now</a></button>
                </div>
            </div>
            <div class="mobile_menu d-lg-none d-block"></div>
        </div>
        <div class="off-canvas-toggle-cover d-inline-block">
            <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                <img class="svg-icon-24" src="{{ asset("/assets/imgs/theme/svg/menu.svg") }}" alt="">
            </div>
        </div>
    </div>
</header>


<div class="bg-square"></div>
<!--Start search form-->
<div class="main-search-form bg-brand-4">
    <div class="container">
        <div class=" pt-50 pb-50 ">
            <div class="row mb-20">
                <div class="col-12 align-self-center main-search-form-cover m-auto">
                    <p class="text-center"><span class="display-1">Search</span></p>
                    <form action="#" class="search-header">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Search articles, places and people">

                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-80 text-center">
                <div class="col-12 font-small suggested-area">
                    <h5 class="suggested font-heading mb-20 text-grey-400"> <strong>Suggested keywords:</strong></h5>
                    <ul class="list-inline d-inline-block">
                        <li class="list-inline-item"><a href="{{ url("category.html") }}">Health</a></li>
                        <li class="list-inline-item"><a href="{{ url("category.html") }}">Travel tips</a></li>
                        <li class="list-inline-item"><a href="{{ url("category.html") }}">Lifestyle</a></li>
                        <li class="list-inline-item"><a href="{{ url("category.html") }}">Technology</a></li>
                        <li class="list-inline-item"><a href="{{ url("category.html") }}">Food</a></li>
                        <li class="list-inline-item"><a href="{{ url("category.html") }}">Books</a></li>
                        <li class="list-inline-item"><a href="{{ url("category.html") }}">Drink</a></li>
                        <li class="list-inline-item"><a href="{{ url("category.html") }}">Fashion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
