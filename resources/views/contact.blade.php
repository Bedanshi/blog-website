@extends('layouts.master')

@section('content')
    <!-- Start Main content -->
    <main>
        <section class="pt-65 pb-35 bg-brand-4">
            <div class="container">
                <div class="archive-header">
                    <div class="archive-header-title">
                        <h1 class="font-heading mb-30">Contact
                        </h1>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit<br> Asperiores non dolor
                            officiis eaque corporis.</p>
                    </div>
                    <div class="breadcrumb">
                        <a href="{{ url('index.html') }}" rel="nofollow">Home</a>
                        <span></span> Contact
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-65">
            <div class="container">
                <h3 class="font-heading mb-50">Get in Touch</h3>
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="website" id="website" type="text"
                                            placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                        <label class="form-check-label label_info fw-700 text-grey-100 font-md"><span>Save
                                                my name, email, and website in this browser for the next time</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg bg-dark text-white" type="submit">Finish & Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="pl-30">
                            <div class="icon-map mb-15 hover-up-3">
                                <img src="{{ asset('/assets/imgs/theme/svg/map.svg') }}" alt="">
                            </div>
                            <h5 class="mb-50">
                                Lorem 142 Str, 2352, Ipsum<br> State, USA
                            </h5>
                            <div class="icon-map mb-15 hover-up-3">
                                <img src="{{ asset('/assets/imgs/theme/svg/map.svg') }}" alt="">
                            </div>
                            <h5>
                                Lorem 142 Str, 2352, Ipsum<br> State, USA
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-65">
            <div class="hr mb-65"></div>
            <div class="container">
                <h6 class="text-uppercase font-heading text-muted mb-15">Address</h6>
                <h2 class="font-heading mb-30">
                    Our Offices
                </h2>
                <p class="w-50 mb-50">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur odio delectus, odit tempora.
                </p>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/office-1.png)">
                                <a class="img-link" href="{{ url('single.html') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('category.html') }}"
                                        class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3">Head
                                        Office</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <h5 class="post-title mb-15">
                                        <a href="{{ url('single.html') }}">Paris, France</a>
                                    </h5>
                                    <p class="font-md">Lorem 142 Str, 2352, Ipsum State, USA <br>Phone: (+01) 234 567</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/office-2.png)">
                                <a class="img-link" href="{{ url('single.html') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('category.html') }}"
                                        class="tag-category bg-info shadown-1 text-dark button-shadow hover-up-3">Support</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <h5 class="post-title mb-15">
                                        <a href="{{ url('single.html') }}">Paris, France</a>
                                    </h5>
                                    <p class="font-md">Lorem 142 Str, 2352, Ipsum State, USA <br>Phone: (+01) 234 567</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/office-3.png)">
                                <a class="img-link" href="{{ url('single.html') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('category.html') }}"
                                        class="tag-category bg-warning shadown-1 text-dark button-shadow hover-up-3">Factory</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <h5 class="post-title mb-15">
                                        <a href="{{ url('single.html') }}">Paris, France</a>
                                    </h5>
                                    <p class="font-md">Lorem 142 Str, 2352, Ipsum State, USA <br>Phone: (+01) 234 567</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Main content -->
@endsection
