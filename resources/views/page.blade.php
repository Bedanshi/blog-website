@extends('layouts.master')

@section('content')
    <main>
        <figure class="image mb-30 m-auto text-center border-radius-10 hover-up-3">
            <img class="border-radius-10" src="{{ Voyager::image($page->image) }}" alt="{{ $page->title }}" style="width: 700px; height: 400px;" />
        </figure>
        <article class="entry-wraper mb-50">
            <div class="excerpt mb-30">
                <h1>{{ $page->title }}</h1>
                <p>{!! $page->body !!}</p>
            </div>
        </article>

            <!--author box-->
            <div class="author-bio mt-50 border-radius-10 bg-white wow fadeIn animated" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 20px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
                <div class="author-image mb-md-30">
                    <a href="{{ url('/author') }}"><img src="{{ asset('/assets/imgs/authors/author-details.jpg') }}"
                            alt="" class="avatar"></a>
                </div>
                <div class="author-info">
                    <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a
                                    href="{{ url('/author') }}" title="Posted by Bedanshi Subedi" rel="author"><br>Bedanshi Subedi</a></span></span>
                    </h4>
                    <div class="author-description text-muted">Celebrating the love for writing through reflections and insights on everyday experiences.
                    </div>
                    <h6 class="text-grey-400">Follow Author On Social Media</h6>
                    <div class="author-social-small">
                        <ul class="author-social-icons">
                            <li class="author-social-link-facebook"><a href="{{ url('https://www.facebook.com/bedanshii.subedi/') }}" target="_blank"><i
                                        class="elegant-icon social_facebook"></i></a></li>
                            <li class="author-social-link-pinterest"><a href="{{ url('https://www.pinterest.com/Veg_eatable/') }}" target="_blank"><i
                                        class="elegant-icon  social_pinterest "></i></a></li>
                            <li class="author-social-link-instagram"><a href="{{ url('https://www.instagram.com/veg_eatable/?hl=en') }}" target="_blank"><i
                                        class="elegant-icon social_instagram "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Comments-->
            <div class="comments-area wow fadeIn animated">
                <div class="widget-header-2 position-relative mb-30">
                    <h3 class="mt-5 mb-30 font-heading" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 20px;);">Comments</h3>
                </div>
                <div class="comment-list wow fadeIn animated">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="{{ asset('/assets/imgs/authors/author-4.jpg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim
                                    ante quis metus. Duis porta ornare nulla ut bibendum
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="{{ url('#') }}">Rosie</a>
                                        </h5>
                                        <p class="date">6 minutes ago </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="{{ url('#') }}" class="btn-reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-list wow fadeIn animated">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="{{ asset('/assets/imgs/authors/author-2.jpg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed,
                                    vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="{{ url('#') }}">Agatha Christie</a>
                                        </h5>
                                        <p class="date">December 4, 2020 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="{{ url('#') }}" class="btn-reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="comment-list wow fadeIn animated">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="{{ asset('/assets/imgs/authors/author-3.jpg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget
                                    nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="{{ url('#') }}">Danielle Steel</a>
                                        </h5>
                                        <p class="date">December 4, 2020 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="{{ url('#') }}" class="btn-reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--comment form-->
            <div class="comment-form wow fadeIn animated pb-35">
                <div class="widget-header-2 position-relative mb-30">
                    <h3 class="mt-5 mb-30 font-heading" style="  text-align: center;);">Leave a Reply</h3>
                </div>
                <form class="form-contact comment_form" action="#" id="commentForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                    placeholder="Write Comment"></textarea>
                            </div>
                        </div>
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
                                    placeholder="Website">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg bg-dark text-white d-inline-block">Post Comment</button>
                    </div>
                </form>
            </div>
            <!--More posts-->
            <div class="single-more-articles border-radius-10">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mb-30 font-heading">Related posts</h5>
                    <button class="single-more-articles-close"><i class="elegant-icon icon_close"></i></button>
                </div>
                <div class="post-block-list post-module-1">
                    <ul class="list-post">
                        <li>
                            <div class="d-flex latest-small-thumb">
                                <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="{{ url('single.html') }}" tabindex="0">
                                        <img src="{{ asset('/assets/imgs/news/thumb-11.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body align-self-center">
                                    <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                        <a href="{{ url('single.html') }}" tabindex="0">9 Things I Love About Shaving
                                            My Head During Quarantine</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-sm">
                                        <span class="post-on has-dot">September 15, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex latest-small-thumb">
                                <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="{{ url('single.html') }}" tabindex="0">
                                        <img src="{{ asset('/assets/imgs/news/thumb-12.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body align-self-center">
                                    <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                        <a href="{{ url('single.html') }}" tabindex="0">Where to Score the Best Travel
                                            Deals on Cyber Monday</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-sm">
                                        <span class="post-on has-dot">November 12, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        </div>

    </main>
    <!-- End Main content -->
@endsection
