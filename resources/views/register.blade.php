@extends('layouts.master')

@section('content')

    <!-- Start Main content -->
    <main>
        <section class="pt-120 pb-120">
            <div class="container">
                <div class="position-relative">
                    <img src="{{ asset("/assets/imgs/theme/plane.png") }}" alt="" class="shape-arrow-login d-none d-lg-block">
                    <div class="row">
                        <div class="col-lg-5 text-center">
                            <img class="mb-30" src="{{ asset("/assets/imgs/theme/mail.png") }}" alt="">
                            <h1 class="headline-1 font-heading">Register</h1>
                            <p class="font-lg text-grey-400">
                                Already have an account? <strong><a href="{{ url("#") }}">Sign in</a></strong> now, or
                            </p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <h3 class="font-heading mb-50">Create an account</h3>
                            <form class="form-contact comment_form" action="#" id="commentForm">
                                <div class="form-group">
                                    <input class="form-control" name="username" id="username" type="text" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="text" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password-2" id="password-2" type="password" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                            <label class="form-check-label label_info fw-700 text-grey-100 font-md"><span>I agree to terms & Policy.</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg bg-dark text-white text-uppercase" type="submit">Submit & register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Main content -->
