@extends('layouts.master')

@section('content')

 <!-- Start Main content -->
 <main>
    <section class="pt-65 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-md-30">
                    <h2 class="display-2 mb-15 font-heading">Alice Shane</h2>
                    <p class="font-lg text-grey-400 mb-30">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut recusandae nobis ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto repellat totam delectus. Neque, cumque itaque, veritatis assumenda quis officia.
                    </p>
                    <ul class="author-social social-network d-inline-block list-inline">
                        <li class="list-inline-item social-fb"><a href="{{ url("#") }}" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item social-tw"><a href="{{ url("#") }}" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                        <li class="list-inline-item social-ins"><a href="{{ url("#") }}" target="_blank" title="Pin it"><i class="elegant-icon social_instagram"></i></a></li>
                        <li class="list-inline-item social-pi"><a href="{{ url("#") }}" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset("/assets/imgs/authors/author-page.png") }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="recent-posts pt-65 pb-30 position-relative">
        <div class="bg-square-2"></div>
        <div class="container">
            <div class="header-title mb-65">
                <h3 class="font-heading mb-0 wow fadeIn animated">Posted by <span class="text-brand">Alice</span></h3>
                <span class="sub-header-title text-grey-400 wow fadeIn animated">136 articles, 25 gallery</span>
            </div>
            <div class="row">
                <article class="col-lg-6 col-md-6 mb-30 wow fadeIn animated">
                    <div class="post-card-1 large border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-8.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-info shadown-1 text-dark button-shadow hover-up-3">Travel</a>
                            </div>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">27 August</span>
                                </div>
                                <h4 class="post-title mb-30">
                                    <a href="{{ url("single.html") }}">After a Few Dates, They Traveled to the Other Side of the World</a>
                                </h4>
                                <div class="post-meta-2 font-md">
                                    <a href="{{ url("page-author.html") }}">
                                        <img src="{{ asset("/assets/imgs/authors/author.jpg") }}" alt="">
                                        <span class="author-namge">Bedanshi Subedi</span>
                                    </a>
                                    <span class="time-to-read has-dot">6 mins to read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 mb-30 wow fadeIn animated">
                    <div class="post-card-1 large border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-5.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Food</a>
                            </div>
                            <span class="top-right-icon bg-white"><i class="elegant-icon icon_ribbon_alt "></i></span>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">18 August</span>
                                </div>
                                <h4 class="post-title mb-30">
                                    <a href="{{ url("single.html") }}">5 Kinds of Food-Shamers You Will Encounter (and How to Deal) </a>
                                </h4>
                                <div class="post-meta-2 font-md">
                                    <a href="{{ url("page-author.html") }}">
                                        <img src="{{ asset("/assets/imgs/authors/author-2.jpg") }}" alt="">
                                        <span class="author-namge">John Lennon</span>
                                    </a>
                                    <span class="time-to-read has-dot">16 mins to read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 mb-0 wow fadeIn animated">
                    <div class="post-card-1 large border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-6.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-dark  shadown-1 text-white button-shadow hover-up-3">Magazine</a>
                            </div>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">05 September</span>
                                </div>
                                <h4 class="post-title mb-30">
                                    <a href="{{ url("single.html") }}">Runner with Autism Graces the Latest Cover of Women's Running </a>
                                </h4>
                                <div class="post-meta-2 font-md">
                                    <a href="{{ url("page-author.html") }}">
                                        <img src="{{ asset("/assets/imgs/authors/author-3.jpg") }}" alt="">
                                        <span class="author-namge">Sarah Harding</span>
                                    </a>
                                    <span class="time-to-read has-dot">12 mins to read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 mb-0 wow fadeIn animated">
                    <div class="post-card-1 large border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-7.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-danger shadown-1 text-dark button-shadow hover-up-3">Food</a>
                            </div>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">06 September</span>
                                </div>
                                <h4 class="post-title mb-30">
                                    <a href="{{ url("single.html") }}">10 Snacks a Food Writer Packs for Day Hikes and Car Trips</a>
                                </h4>
                                <div class="post-meta-2 font-md">
                                    <a href="{{ url("page-author.html") }}">
                                        <img src="{{ asset("/assets/imgs/authors/author-4.jpg") }}" alt="">
                                        <span class="author-namge">Nadine Coyle</span>
                                    </a>
                                    <span class="time-to-read has-dot">14 mins to read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <div class="trending position-relative pb-65">
        <div class="container">
            <div class="row">
                <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-1.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                            </div>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">27 August</span>
                                </div>
                                <h5 class="post-title font-md">
                                    <a href="{{ url("single.html") }}">After a Few Dates, They Traveled to the Other Side of the World</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-2.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-primary shadown-1 text-dark button-shadow hover-up-3">Healthy</a>
                            </div>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">28 August</span>
                                </div>
                                <h5 class="post-title font-md">
                                    <a href="{{ url("single.html") }}">Jessamyn Stanley's 5-Minute Yoga for Beginners</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-3.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-warning shadown-1 text-dark button-shadow hover-up-3">Food</a>
                            </div>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">02 September</span>
                                </div>
                                <h5 class="post-title font-md">
                                    <a href="{{ url("single.html") }}">How an MS Diagnosis Changed My Relationship With Food </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 wow fadeIn animated">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-4.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3">Travel Tips</a>
                            </div>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">05 September</span>
                                </div>
                                <h5 class="post-title font-md">
                                    <a href="{{ url("single.html") }}">Where to Score the Best Travel Deals on Cyber Monday </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 wow fadeIn animated">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-5.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                            </div>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">12 September</span>
                                </div>
                                <h5 class="post-title font-md">
                                    <a href="{{ url("single.html") }}">5 Kinds of Food-Shamers You Will Encounter (and How to Deal) </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 wow fadeIn animated">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-6.jpg)">
                            <a class="img-link" href="{{ url("single.html") }}"></a>
                            <div class="post-meta-1 mb-20">
                                <a href="{{ url("category.html") }}" class="tag-category bg-danger shadown-1 text-dark button-shadow hover-up-3">Book</a>
                            </div>
                        </div>
                        <div class="post-content p-30">
                            <div class="post-card-content">
                                <div class="entry-meta meta-1 float-left font-md mb-10">
                                    <span class="post-on has-dot">18 September</span>
                                </div>
                                <h5 class="post-title font-md">
                                    <a href="{{ url("single.html") }}">12 Best Books to Read at the Beach This Summer </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="text-center mt-65">
                <button class="btn btn-lg bg-dark text-white d-inline-block">Load more posts</button>
            </div>
        </div>
    </div>
    <section class="newsletter bg-brand-3 pt-100 pb-100">
        <div class="container">
            <div class="position-relative">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-title-2 mb-65">
                            <h4 class="mb-0 text-grey-400 wow fadeIn animated">
                                <img src="{{ asset("/assets/imgs/theme/svg/send.svg") }}" alt="">
                                <span>Subscribe</span>
                            </h4>
                            <h3 class="font-heading wow fadeIn animated">to Our Newsletter</h3>
                        </div>
                        <form class="form-subcriber mt-30 d-flex wow fadeIn animated">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <img src="{{ asset("/assets/imgs/theme/sketch-1.png") }}" alt="" class="sketch-1 wow fadeIn animated">
            </div>
        </div>
    </section>
</main>
<!-- End Main content -->
<!--end site-bottom-->
<!-- Footer Start-->
<footer class="pt-65 bg-dark">
    <div class="container">
        <div class="row mb-65">
            <div class="col-md-6">
                <div class="logo wow fadeIn animated">
                    <a href="{{ url("index.html") }}"> <img src="{{ asset("/assets/imgs/theme/logo-white.svg") }}" alt=""></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex text-right text-sm-left align-self-center justify-content-end wow fadeIn animated">
                    <h5 class="mr-15 text-white mb-0 align-self-center">All you need to build new site</h5>
                    <button class="btn btn-lg bg-brand-1">Download Now</button>
                </div>
            </div>
            <div class="col-12">
                <div class="bottom-line mt-40"></div>
            </div>
        </div>
        <div class="row bottom-area-2">
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget-about wow fadeIn animated mb-30">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">About</h5>
                    </div>
                    <div class="textwidget">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio suspendisse leo neque iaculis molestie sagittis maecenas aenean eget molestie sagittis.
                        </p>
                        <p><strong class="color-black">Address</strong><br>
                            123 Main Street<br>
                            New York, NY 10001</p>
                        <p><strong class="color-black">Phone</strong><br>
                            (+01) 234 567 89</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sidebar-widget widget_categories wow fadeIn animated mb-30" data-wow-delay="0.1s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Quick link</h5>
                    </div>
                    <ul class="font-small">
                        <li class="cat-item cat-item-2"><a href="{{ url("#") }}">About me</a></li>
                        <li class="cat-item cat-item-4"><a href="{{ url("#") }}">Help & Support</a></li>
                        <li class="cat-item cat-item-5"><a href="{{ url("#") }}">Licensing Policy</a></li>
                        <li class="cat-item cat-item-6"><a href="{{ url("#") }}">Refund Policy</a></li>
                        <li class="cat-item cat-item-7"><a href="{{ url("#") }}">Hire me</a></li>
                        <li class="cat-item cat-item-7"><a href="{{ url("#") }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sidebar-widget widget_tagcloud wow fadeIn animated mb-30" data-wow-delay="0.2s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Tagcloud</h5>
                    </div>
                    <div class="tagcloud mt-50">
                        <a class="tag-cloud-link" href="{{ url("category.html") }}">beautiful</a>
                        <a class="tag-cloud-link" href="{{ url("category.html") }}">New York</a>
                        <a class="tag-cloud-link" href="{{ url("category.html") }}">droll</a>
                        <a class="tag-cloud-link" href="{{ url("category.html") }}">intimate</a>
                        <a class="tag-cloud-link" href="{{ url("category.html") }}">loving</a>
                        <a class="tag-cloud-link" href="{{ url("category.html") }}">travel</a>
                        <a class="tag-cloud-link" href="{{ url("category.html") }}">fighting </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy-right pt-30 mt-20 wow fadeIn animated font-md">
            <p class="float-md-left font-small text-muted">&copy; 2021, Flow - Design by <a href="https://alithemes.com/" target="_blank">AliThemes</a></p>
            <ul class="social-network d-inline-block list-inline color-white mb-20 float-right">
                <li class="list-inline-item"><a href="{{ url("#") }}" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                <li class="list-inline-item"><a href="{{ url("#") }}" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                <li class="list-inline-item"><a href="{{ url("#") }}" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                <li class="list-inline-item"><a href="{{ url("#") }}" target="_blank" title="Pin it"><i class="elegant-icon social_skype"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- End Footer -->
<div class="dark-mark"></div>
<!-- Vendor JS-->
<script src="{{ asset("/assets/js/vendor/modernizr-3.5.0.min.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/jquery-3.5.1.min.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/bootstrap.min.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/jquery.slicknav.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/slick.min.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/wow.min.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/jquery.scrollUp.min.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/jquery.theia.sticky.js") }}"></script>
<!-- Template  JS -->
<script src="{{ asset("/assets/js/main.js") }}"></script>
</body>

</html>


@endsection
