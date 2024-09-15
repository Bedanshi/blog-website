@extends('layouts.master')

@section('content')
    <!-- Start Main content -->
    <main>

        <!--end single header-->
        <figure class="image mb-30 m-auto text-center border-radius-10 hover-up-3">
            <img class="border-radius-10" src="{{ asset('/assets/imgs/news/news-16.jpg') }}" alt="post-title" />
        </figure>
        <!--figure-->
        <article class="entry-wraper mb-50">
            <div class="excerpt mb-30">
                <h1>{{$post->title}}</h1>
                <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner
                    flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly
                    the manatee.</p>
            </div>
            <div class="entry-main-content wow fadeIn animated">
                <p>Fretful human far recklessly while caterpillar well a well blubbered added one a some far whispered
                    rampantly whispered while irksome far clung irrespective wailed more rosily and where saluted while
                    black dear so yikes as considering recast to some crass until.</p>
                <hr class="wp-block-separator is-style-dots">
                <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly
                    leapt skimpily that quail sheep some goodness <a href="{{ url('#') }}">nightingale</a> the instead
                    exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but
                    the.</p>
                <figure class="wp-block-gallery columns-3 wp-block-image">
                    <ul class="blocks-gallery-grid">
                        <li class="blocks-gallery-item"><a href="{{ url('#') }}"><img class="border-radius-5"
                                    src="{{ asset('/assets/imgs/news/thumb-2.jpg') }}" alt=""></a></li>
                        <li class="blocks-gallery-item"><a href="{{ url('#') }}"><img class="border-radius-5"
                                    src="{{ asset('/assets/imgs/news/thumb-3.jpg') }}" alt=""></a></li>
                        <li class="blocks-gallery-item"><a href="{{ url('#') }}"><img class="border-radius-5"
                                    src="{{ asset('/assets/imgs/news/thumb-4.jpg') }}" alt=""></a></li>
                    </ul>
                    <figcaption> <i class="ti-credit-card mr-5"></i>Image credit: Behance </figcaption>
                </figure>
                <hr class="section-divider">
                <p>Yet more some certainly yet alas abandonedly whispered <a
                        href="{{ url('#') }}">intriguingly</a><sup><a href="{{ url('#') }}">[2]</a></sup> well
                    extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less <a
                        href="{{ url('#') }}">however</a> hawk yet oh scratched ostrich some outside crud irrespective
                    lightheartedly and much far amenably that the elephant since when.</p>
                <h2>The Guitar Legends</h2>
                <p>Furrowed this in the upset <a href="{{ url('#') }}">some across</a><sup><a
                            href="{{ url('#') }}">[3]</a></sup> tiger oh loaded house gosh whispered <a
                        href="{{ url('#') }}">faltering alas</a><sup><a href="{{ url('#') }}">[4]</a></sup> ouch
                    cuckoo coward in scratched undid together bit fumblingly so besides salamander heron during the jeepers
                    hello fitting jauntily much smoothly globefish darn blessedly far so along bluebird leopard and.</p>
                <blockquote>
                    <p>Integer eu faucibus <a href="{{ url('#') }}">dolor</a><sup><a
                                href="{{ url('#') }}">[5]</a></sup>. Ut venenatis tincidunt diam elementum imperdiet.
                        Etiam accumsan semper nisl eu congue. Sed aliquam magna erat, ac eleifend lacus rhoncus in.</p>
                </blockquote>
                <p>Fretful human far recklessly while caterpillar well a well blubbered added one a some far whispered
                    rampantly whispered while irksome far clung irrespective wailed more rosily and where saluted while
                    black dear so yikes as considering recast to some crass until cow much less and rakishly overdrew
                    consistent for by responsible oh one hypocritical less bastard hey oversaw zebra browbeat a well.</p>
                <h3>Getting Crypto Rich</h3>
                <hr class="wp-block-separator is-style-wide">
                <div class="wp-block-image">
                    <figure class="alignleft is-resized">
                        <img class="border-radius-5" src="{{ asset('/assets/imgs/news/news-7.jpg') }}">
                        <figcaption> And far contrary smoked some contrary among stealthy </figcaption>
                    </figure>
                </div>
                <p>And far contrary smoked some contrary among stealthy engagingly suspiciously a cockatoo far circa sank
                    dully lewd slick cracked llama the much gecko yikes more squirrel sniffed this and the the much within
                    uninhibited this abominable a blubbered overdid foresaw through alas the pessimistic.</p>
                <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner
                    flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly
                    the manatee.</p>
                <hr class="section-divider">
                <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly
                    leapt skimpily that quail sheep some goodness nightingale the instead exited expedient up far ouch
                    mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                <!--Begin Subcrible-->
                <div class="border-radius-10 border bg-white mb-30 p-65 wow fadeIn animated text-center">
                    <h4 class="mb-0 mt-0">Become a member</h4>
                    <p class="font-md text-grey-400">Get the latest news right in your inbox. We never spam!</p>
                    <form class="mt-30 d-flex wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                        <input type="email" class="form-control mr-15" placeholder="Enter your email">
                        <button type="submit" class="btn btn-lg bg-dark text-white d-inline-block">Subscribe</button>
                    </form>
                </div>
                <!--End Subcrible-->
                <p>Yet more some certainly yet alas abandonedly whispered intriguingly well extensive one howled talkative
                    admonishingly below a rethought overlaid dear gosh activated less however hawk yet oh scratched ostrich
                    some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
            </div>
            <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                <div class="tags w-50 w-sm-100">
                    <h5 class="mb-15">Tags: </h5>
                    <a href="{{ url('/category') }}" rel="tag" class="hover-up-3">deer</a>
                    <a href="{{ url('/category') }}" rel="tag" class="hover-up-3">nature</a>
                    <a href="{{ url('/category') }}" rel="tag" class="hover-up-3">conserve</a>
                </div>
                <div class="single-social-share clearfix wow fadeIn animated mb-15 w-50 w-sm-100">
                    <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank"
                                href="{{ url('#') }}"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank"
                                href="{{ url('#') }}"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank"
                                href="{{ url('#') }}"><i class="elegant-icon social_pinterest "></i></a></li>
                    </ul>
                </div>
            </div>
            <!--author box-->
            <div class="author-bio mt-50 border-radius-10 bg-white wow fadeIn animated">
                <div class="author-image mb-md-30">
                    <a href="{{ url('/author') }}"><img src="{{ asset('/assets/imgs/authors/author-details.jpg') }}"
                            alt="" class="avatar"></a>
                </div>
                <div class="author-info">
                    <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a
                                    href="{{ url('/author') }}" title="Posted by Barbara Cartland" rel="author">Barbara
                                    Cartland</a></span></span>
                    </h4>
                    <div class="author-description text-muted">You should write because you love the shape of Flow and
                        sentences and the creation of different words on a page. </div>
                    <h6 class="text-grey-400">Social Media</h6>
                    <div class="author-social-small">
                        <ul class="author-social-icons">
                            <li class="author-social-link-facebook"><a href="{{ url('#') }}" target="_blank"><i
                                        class="elegant-icon social_facebook"></i></a></li>
                            <li class="author-social-link-twitter"><a href="{{ url('#') }}" target="_blank"><i
                                        class="elegant-icon social_twitter "></i></a></li>
                            <li class="author-social-link-pinterest"><a href="{{ url('#') }}" target="_blank"><i
                                        class="elegant-icon  social_pinterest "></i></a></li>
                            <li class="author-social-link-instagram"><a href="{{ url('#') }}" target="_blank"><i
                                        class="elegant-icon social_instagram "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Comments-->
            <div class="comments-area wow fadeIn animated">
                <div class="widget-header-2 position-relative mb-30">
                    <h3 class="mt-5 mb-30 font-heading">Comments</h3>
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
                    <div class="single-comment depth-2 justify-content-between d-flex mt-50">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="{{ asset('/assets/imgs/authors/author.jpg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed,
                                    vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="{{ url('#') }}">Steven</a>
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
                    <h3 class="mt-5 mb-30 font-heading">Leave a Reply</h3>
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
        <!--container-->
        <section class="newsletter bg-brand-3 pt-100 pb-100">
            <div class="container">
                <div class="position-relative">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="header-title-2 mb-65">
                                <h4 class="mb-0 text-grey-400 wow fadeIn  animated"
                                    style="visibility: visible; animation-name: fadeIn;">
                                    <img src="{{ asset('/assets/imgs/theme/svg/send.svg') }}" alt="">
                                    <span>Subscribe</span>
                                </h4>
                                <h3 class="font-heading wow fadeIn  animated"
                                    style="visibility: visible; animation-name: fadeIn;">to Our Newsletter</h3>
                            </div>
                            <form class="form-subcriber mt-30 d-flex wow fadeIn  animated"
                                style="visibility: visible; animation-name: fadeIn;">
                                <input type="email" class="form-control bg-white font-small"
                                    placeholder="Enter your email">
                                <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <img src="{{ asset('/assets/imgs/theme/sketch-1.png') }}" alt=""
                        class="sketch-1 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                </div>
            </div>
        </section>
    </main>
    <!-- End Main content -->
@endsection
