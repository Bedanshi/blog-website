@extends('layouts.master')

@section('content')
    <!-- Start Main content -->
    <main>
        <section class="pt-65 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-md-30">
                        <h2 class="display-2 mb-15 font-heading">Bedanshi Subedi</h2>
                        <p class="font-lg text-grey-400 mb-30">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut recusandae nobis ullam. Lorem ipsum
                            dolor sit amet consectetur adipisicing elit. Iusto repellat totam delectus. Neque, cumque
                            itaque, veritatis assumenda quis officia.
                        </p>
                        <ul class="author-social social-network d-inline-block list-inline">
                            <li class="list-inline-item social-fb"><a href="{{ url('#') }}" target="_blank"
                                    title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item social-tw"><a href="{{ url('#') }}" target="_blank"
                                    title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            <li class="list-inline-item social-ins"><a href="{{ url('#') }}" target="_blank"
                                    title="Pin it"><i class="elegant-icon social_instagram"></i></a></li>
                            <li class="list-inline-item social-pi"><a href="{{ url('#') }}" target="_blank"
                                    title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/imgs/authors/b.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="recent-posts pt-65 pb-30 position-relative">
            <div class="bg-square-2"></div>
            <div class="container">
                <div class="header-title mb-65">
                    <h3 class="font-heading mb-0 wow fadeIn animated">Posted by <span class="text-brand">Bedanshi</span>
                    </h3>
                    <span class="sub-header-title text-grey-400 wow fadeIn animated">136 articles</span>
                </div>
                <div class="row">
                    <article class="col-lg-6 col-md-6 mb-30 wow fadeIn animated">
                        <div class="post-card-1 large border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-8.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-info shadown-1 text-dark button-shadow hover-up-3">Travel</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">27 August</span>
                                    </div>
                                    <h4 class="post-title mb-30">
                                        <a href="{{ url('/single') }}">After a Few Dates, They Traveled to the Other Side of
                                            the World</a>
                                    </h4>
                                    <div class="post-meta-2 font-md">
                                        <a href="{{ url('/author') }}">
                                            <img src="{{ asset('/assets/imgs/authors/author.jpg') }}" alt="">
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
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-5.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Food</a>
                                </div>
                                <span class="top-right-icon bg-white"><i class="elegant-icon icon_ribbon_alt "></i></span>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">18 August</span>
                                    </div>
                                    <h4 class="post-title mb-30">
                                        <a href="{{ url('/single') }}">5 Kinds of Food-Shamers You Will Encounter (and How
                                            to Deal) </a>
                                    </h4>
                                    <div class="post-meta-2 font-md">
                                        <a href="{{ url('/author') }}">
                                            <img src="{{ asset('/assets/imgs/authors/author-2.jpg') }}" alt="">
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
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-6.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-dark  shadown-1 text-white button-shadow hover-up-3">Magazine</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">05 September</span>
                                    </div>
                                    <h4 class="post-title mb-30">
                                        <a href="{{ url('/single') }}">Runner with Autism Graces the Latest Cover of
                                            Women's Running </a>
                                    </h4>
                                    <div class="post-meta-2 font-md">
                                        <a href="{{ url('/author') }}">
                                            <img src="{{ asset('/assets/imgs/authors/author-3.jpg') }}" alt="">
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
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-7.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-danger shadown-1 text-dark button-shadow hover-up-3">Food</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">06 September</span>
                                    </div>
                                    <h4 class="post-title mb-30">
                                        <a href="{{ url('/single') }}">10 Snacks a Food Writer Packs for Day Hikes and Car
                                            Trips</a>
                                    </h4>
                                    <div class="post-meta-2 font-md">
                                        <a href="{{ url('/author') }}">
                                            <img src="{{ asset('/assets/imgs/authors/author-4.jpg') }}" alt="">
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
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-1.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">27 August</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="{{ url('/single') }}">After a Few Dates, They Traveled to the Other Side
                                            of the World</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-2.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-primary shadown-1 text-dark button-shadow hover-up-3">Healthy</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">28 August</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="{{ url('/single') }}">Jessamyn Stanley's 5-Minute Yoga for Beginners</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-3.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-warning shadown-1 text-dark button-shadow hover-up-3">Food</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">02 September</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="{{ url('/single') }}">How an MS Diagnosis Changed My Relationship With
                                            Food </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-4.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3">Travel
                                        Tips</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">05 September</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="{{ url('/single') }}">Where to Score the Best Travel Deals on Cyber
                                            Monday </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-5.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">12 September</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="{{ url('/single') }}">5 Kinds of Food-Shamers You Will Encounter (and How
                                            to Deal) </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(assets/imgs/news/news-6.jpg)">
                                <a class="img-link" href="{{ url('/single') }}"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="{{ url('/category') }}"
                                        class="tag-category bg-danger shadown-1 text-dark button-shadow hover-up-3">Book</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">18 September</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="{{ url('/single') }}">12 Best Books to Read at the Beach This Summer </a>
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
                                    <img src="{{ asset('/assets/imgs/theme/svg/send.svg') }}" alt="">
                                    <span>Subscribe</span>
                                </h4>
                                <h3 class="font-heading wow fadeIn animated">to Our Newsletter</h3>
                            </div>
                            <form class="form-subcriber mt-30 d-flex wow fadeIn animated">
                                <input type="email" class="form-control bg-white font-small"
                                    placeholder="Enter your email">
                                <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <img src="{{ asset('/assets/imgs/theme/sketch-1.png') }}" alt=""
                        class="sketch-1 wow fadeIn animated">
                </div>
            </div>
        </section>
    </main>
    <!-- End Main content -->
@endsection
