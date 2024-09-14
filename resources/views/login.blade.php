@extends('layouts.master')

@section('content')

<header class="main-header header-sticky">
    <div class="position-relative">
        <div class="container align-self-center">
            <div class="header-style-1">
                <div class="logo">
                    <a href="{{ url("index.html") }}"><img src="{{ asset("/assets/imgs/theme/logo.svg") }}" alt=""></a>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline">
                            <li class="menu-item-has-children">
                                <a href="{{ url("index.html") }}">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url("index.html") }}">Home default</a></li>
                                    <li><a href="{{ url("home-2.html") }}">Homepage 2</a></li>
                                    <li><a href="{{ url("home-3.html") }}">Homepage 3</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{ url("page-about.html") }}">About</a> </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url("category.html") }}">Blog</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="{{ url("category-big.html") }}">Categories Big</a></li>
                                    <li><a href="{{ url("category-grid.html") }}">Categories Grid</a></li>
                                    <li><a href="{{ url("category-list.html") }}">Categories List</a></li>
                                    <li><a href="{{ url("category-list-2.html") }}">Categories List 2</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{ url("page-design.html") }}">Design</a> </li>
                            <li> <a href="{{ url("page-contact.html") }}">Contact</a> </li>
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="{{ url("index.html") }}">Home</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="{{ url("index.html") }}">Home default</a></li>
                                    <li><a href="{{ url("home-2.html") }}">Homepage 2</a></li>
                                    <li><a href="{{ url("home-3.html") }}">Homepage 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ url("#") }}">Pages</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="{{ url("page-about.html") }}">About</a></li>
                                    <li><a href="{{ url("page-contact.html") }}">Contact</a></li>
                                    <li><a href="{{ url("page-design.html") }}">Typography</a></li>
                                    <li><a href="{{ url("page-register.html") }}">Register</a></li>
                                    <li><a href="{{ url("page-login.html") }}">Login</a></li>
                                    <li><a href="{{ url("page-search.html") }}">Search</a></li>
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
                            <div class="input-group-append">
                                <button class="btn btn-search bg-white" type="submit">
                                    <img class="svg-icon-24" src="{{ asset("/assets/imgs/theme/svg/search.svg") }}" alt="">
                                </button>
                            </div>
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

    <!-- Start Main content -->
    <main>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="position-relative">
                    <img src="{{ asset("/assets/imgs/theme/plane.png") }}" alt="" class="shape-arrow-login d-none d-lg-block">
                    <div class="row">
                        <div class="col-lg-5 text-center">
                            <img class="mb-30" src="{{ asset("/assets/imgs/theme/lock.png") }}" alt="">
                            <h1 class="headline-1 font-heading">Welcome Back</h1>
                            <p class="font-lg text-grey-400">
                                If you don't have an account? <strong><a href="{{ url("#") }}">Sign up</a></strong> now, or
                            </p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <h3 class="font-heading mb-50">Login</h3>
                            <form class="form-contact comment_form" action="#" id="commentForm">
                                <div class="form-group">
                                    <input class="form-control" name="username" id="username" type="text" placeholder="Username or Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                            <label class="form-check-label label_info fw-700 text-grey-100 font-md"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg bg-dark text-white" type="submit">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Main content -->
    <!-- Footer Start-->
