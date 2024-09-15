@extends('layouts.master')

@section('content')

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
