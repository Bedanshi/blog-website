@extends('layouts.master')

@section('content')
<main>

    <article class="entry-wraper mb-50">
        <div class="excerpt mb-30 text-center">
            <h1 >{{ $page->title }}</h1><br>
            <figure class="image mb-30 m-auto text-center border-radius-10 hover-up-3">
                <img class="border-radius-10" src="{{ Voyager::image($page->image) }}" alt="{{ $page->title }}" style="width: 900px; height: 400px; " />
            </figure>
            <p style="color: #555;">{!! $page->body !!}</p>
        </div>
    </article>

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


</main>
@endsection
