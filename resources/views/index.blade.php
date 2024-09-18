@extends('layouts.master')

@section('content')
    <!-- Start Main content -->
    <main>
        <section class="featured-slider-1 pt-65 pb-65">
            <div class="position-relative">
                <div class="featured-slider-1-arrow color-white"></div>
                <div class="container">
                    <div class="hero-1 featured-slider-1-items mb-65">
                        <div class="slider-single">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="post-meta-1 mb-20">

                                        <a href="{{ url('/category') }}"
                                            class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                        <span class="post-date text-muted font-md">September 15, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30">

                                        Lifestyle Blogs By Bedanshi Subedi
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Dive into a world of culinary delights, travel tales, and personal adventures. On
                                        this blog, I share my food reviews, recount my travel experiences, and offer a
                                        glimpse into my journey. Whether you’re seeking inspiration for your next meal or
                                        travel destination, or simply enjoy a good story, you’ll find it here. Join me as I
                                        explore flavors, destinations, and the moments that make life extraordinary.
                                        Dive into a world of culinary delights, travel tales, and personal adventures. On
                                        this blog, I share my food reviews, recount my travel experiences, and offer a
                                        glimpse into my journey. Whether you’re seeking inspiration for your next meal or
                                        travel destination, or simply enjoy a good story, you’ll find it here. Join me as I
                                        explore flavors, destinations, and the moments that make life extraordinary.
                                    </div>
                                    <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">

                                        <a href="{{ url('/author') }}">
                                            <img src="{{ asset('/assets/imgs/authors/b.jpg') }}" alt="">
                                            <span class="author-namge">Bedanshi Subedi</span>
                                        </a>
                                        <span class="time-to-read has-dot">6 mins to read</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img class="border-radius-10" src="{{ asset('/assets/imgs/news/bd.jpg') }}"
                                        alt="flow">

                                </div>
                            </div>
                        </div>
                        <div class="slider-single">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="post-meta-1 mb-20">
                                        <a href="{{ url('/category') }}"
                                            class="tag-category bg-primary shadown-1 text-dark button-shadow hover-up-3">Design</a>
                                        <span class="post-date text-muted font-md">September 22, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30">
                                        <a href="{{ url('/single') }}">

                                            9 Things I Love About Shaving My Head During Quarantine
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Sit nemore imperdiet elaboraret eu, commune inciderint mei no. Ex usu ignota eripuit
                                        oportere. Vis at choro oratio, vitae quodsi ei sit. Mei ne habeo legimus qualisque.
                                        Sit nemore imperdiet elaboraret eu, commune inciderint mei no. Ex usu ignota eripuit
                                        oportere. Vis at choro oratio, vitae quodsi ei sit. Mei ne habeo legimus qualisque.
                                    </div>
                                    <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                                        <a href="{{ url('/author') }}">
                                            <img src="{{ asset('/assets/imgs/authors/baba.jpg') }}" alt="">
                                              <span class="author-namge">Angela</span>
                                            </a>
                                            <span class="time-to-read has-dot">9 mins to read</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img class="border-radius-10" src="{{ asset('/assets/imgs/authors/baba.jpg') }}"
                                        alt="flow">

                                </div>
                            </div>
                        </div>
                        <div class="slider-single">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="post-meta-1 mb-20">
                                        <a href="{{ url('/category') }}"
                                            class="tag-category bg-danger shadown-1 text-dark button-shadow hover-up-3">Audition</a>
                                          <span class="post-date text-muted font-md">September 25, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30">
                                        <a href="{{ url('/single') }}">
                                                Essential Qualities of Highly Successful Music in this year
                                            </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Maluisset patrioque his no, pro ex tempor vivendo deleniti. Reque dignissim his in,
                                        vix te summo maluisset assueverit, et vidisse luptatum accusata eos. Ad vix diam
                                        accumsan.
                                        Maluisset patrioque his no, pro ex tempor vivendo deleniti. Reque dignissim his in,
                                        vix te summo maluisset assueverit, et vidisse luptatum accusata eos. Ad vix diam
                                        accumsan.
                                    </div>
                                    <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                                        <a href="{{ url('/author') }}">
                                            <img src="{{ asset('/assets/imgs/authors/tre.jpg') }}" alt="">

                                                <span class="author-namge">Sophie</span>
                                            </a>
                                            <span class="time-to-read has-dot">7 mins to read</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img class="border-radius-10" src="{{ asset('/assets/imgs/news/IMG_1312.jpg') }}"
                                        alt="flow">

                                </div>
                            </div>
                        </div>
                        <div class="slider-single">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="post-meta-1 mb-20">
                                         <a href="{{ url('/category') }}"
                                            class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3">Healthy</a>
                                        <span class="post-date text-muted font-md">August 12, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30">
                                            <a href="{{ url('/single') }}">
                                                Why We Need to Stop Talking About Food and Guilt
                                            </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        College offers a blend of exciting experiences and personal growth. I enjoy meeting
                                        diverse people, engaging in interesting classes, and participating in vibrant campus
                                        activities. The freedom, networking opportunities, and memorable moments make
                                        college life truly special. </div>
                                </div>
                                <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                                    <a href="{{ url('/author') }}">
                                        <img src="{{ asset('/assets/imgs/authors/lar.jpg') }}" alt="">
                                        <span class="author-namge">John Lennon</span>
                                    </a>
                                    <span class="time-to-read has-dot">16 mins to read</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="border-radius-10" src="{{ asset('/assets/imgs/authors/bar.jpg') }}"
                                    alt="flow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container">
                <h3 class="mb-65 font-heading wow fadeIn animated">Innovative Ideas to Refresh Your Perspective</h3>

                <div class="featured-slider-1-nav row">
                    @foreach ($post as $singlePost)
                        <div class="col d-flex transition-normal latest-small-thumb">
                            <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="img-link" href="{{ url("/blog/{$singlePost->slug}") }}">
                                    <img class="border-radius-10" src="{{ Voyager::image($singlePost->image) }}"
                                        alt="{{ $singlePost->title }}" style="width: 120px; height: 140px;" />
                                </a>

                            </div>
                            <div class="post-content media-body align-self-center">
                                <h5 class="post-title mb-15 text-limit-2-row font-medium">
                                    <a href="{{ url('/single') }}">{{ $singlePost->title }}</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-sm">
                                    <span class="post-on">{{ $singlePost->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--End: featured-1 -->
        <section class="trending pt-65 pb-65 position-relative">
            <div class="bg-square-2"></div>
            <div class="container">
                <h3 class="mb-65 font-heading wow fadeIn animated">Trending Topics</h3>
                <div class="row">
                    @foreach ($post as $singlePost)
                        <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                    style="background-image: url('{{ Voyager::image($singlePost->image) }}');">
                                    <a class="img-link" href="{{ url("/blog/{$singlePost->slug}") }}"></a>
                                    <div class="post-meta-1 mb-20">
                                        <a href="{{ url($singlePost->category_slug) }}"
                                            class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">{{ $singlePost->category_name }}</a>
                                    </div>
                                </div>
                                <div class="post-content p-30">
                                    <div class="post-card-content">
                                        <div class="entry-meta meta-1 float-left font-md mb-10">
                                            <span class="post-on has-dot">{{ $singlePost->created_at }}</span>
                                        </div>
                                        <h5 class="post-title font-md">
                                            <a href="{{ url('/single') }}">{{ $singlePost->title }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="pb-65">
            <div class="container">
                <h3 class="mb-65 font-heading wow fadeIn animated">Editor's picked</h3>
                <div class="position-relative wow fadeIn animated">
                    <div class="slide-fade slide-fade-inner bg-brand-4 border-radius-10 p-65 p-sm-25">
                        <div class="slide-fade-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="post-meta-1 mb-20 mt-50">
                                          <a href="{{ url('/category') }}"
                                            class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                        <span class="post-date text-muted font-md">September 15, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30 fw-700">
                                            <a href="{{ url('/single') }}">
                                                The 28 Best Skincare Products of 2021
                                            </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor erat
                                        bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque dapibus nibh
                                        augue senectus. Ad pri docendi aliquando, per an minim novum fuisset, eam doctus
                                        accumsan ad. Id veritus tibique per
                                        Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor erat
                                        bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque dapibus nibh
                                        augue senectus. Ad pri docendi aliquando, per an minim novum fuisset, eam doctus
                                        accumsan ad. Id veritus tibique per
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <figure class="position-relative">
                                        <img class="border-radius-10 post-thumb"
                                            src="{{ asset('/assets/imgs/news/news-17.jpg') }}" alt="flow">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="slide-fade-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="post-meta-1 mb-20 mt-50">
                                         <a href="{{ url('/category') }}"
                                            class="tag-category bg-warning shadown-1 text-dark button-shadow hover-up-3">Beauty</a>
                                        <span class="post-date text-muted font-md">September 15, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30 fw-700">
                                            <a href="{{ url('/single') }}">
                                                Rice Water for Hair Growth: Does It Actually Work?
                                            </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Qualisque persecuti eu vis. Et his eruditi fastidii gloriatur. In nec aliquam
                                        lobortis definitionem, aeterno qualisque appellantur ea sea
                                        Qualisque persecuti eu vis. Et his eruditi fastidii gloriatur. In nec aliquam
                                        lobortis definitionem, aeterno qualisque appellantur ea sea
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <figure class="position-relative">
                                        <img class="border-radius-10 post-thumb"
                                            src="{{ asset('/assets/imgs/news/news-18.jpg') }}" alt="flow">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="slide-fade-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="post-meta-1 mb-20 mt-50">
                                        <a href="{{ url('/category') }}"
                                            class="tag-category bg-primary shadown-1 text-dark button-shadow hover-up-3">Music</a>
                                        <span class="post-date text-muted font-md">September 15, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30 fw-700">
                                            <a href="{{ url('/single') }}">
                                                5 Science-Backed Reasons Why Music is Good for You
                                            </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        An vis natum detracto nominati, ei mundi animal definitionem his, saepe indoctum
                                        pericula an sea. Vix ut admodum nostrum fastidii.
                                        An vis natum detracto nominati, ei mundi animal definitionem his, saepe indoctum
                                        pericula an sea. Vix ut admodum nostrum fastidii.
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <figure class="position-relative">
                                        <img class="border-radius-10 post-thumb"
                                            src="{{ asset('/assets/imgs/news/news-19.jpg') }}" alt="flow">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-fade-arrow-cover"></div>
                </div>
            </div>
        </section>
        <section class="recent-posts">
            <div class="container">
                <div class="header-title mb-65">
                    <h3 class="font-heading mb-0 wow fadeIn animated">Recent Articles</h3>
                    <span class="sub-header-title text-grey-400 wow fadeIn animated">Don't miss new trend</span>
                </div>
                <div class="row">
                    @foreach ($post as $singlePost)
                        <article class="col-lg-6 col-md-6 mb-30 wow fadeIn animated">
                            <div class="post-card-1 large border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                    style="background-image: url('{{ Voyager::image($singlePost->image) }}');">
                                    <a class="img-link" href="{{ url('/single') }}"></a>
                                    <div class="post-meta-1 mb-20">
                                        <a href="{{ url('/category') }}"
                                            class="tag-category bg-info shadown-1 text-dark button-shadow hover-up-3">{{ $singlePost->category_slug }}</a>
                                    </div>
                                </div>
                                <div class="post-content p-30">
                                    <div class="post-card-content">
                                        <div class="entry-meta meta-1 float-left font-md mb-10">
                                            <span class="post-on has-dot">{{ $singlePost->created_at }}</span>
                                        </div>
                                        <h4 class="post-title mb-30">
                                            <a href="{{ url('/single') }}">{{ $singlePost->title }}</a>
                                        </h4>
                                        <div class="post-meta-2 font-md">
                                              <a href="{{ url('/author') }}">
                                                    <img src="{{ asset('/assets/imgs/authors/author.jpg') }}"
                                                        alt="">
                                                    <span class="author-namge">Bedanshi Subedi</span>
                                                </a>
                                                <span class="time-to-read has-dot">6 mins to read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach


                </div>
            </div>
        </section>


    </main>
@endsection
