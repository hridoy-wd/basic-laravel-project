@extends('frontend.main_master')
@section('content')
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">{{ $blogs->blog_title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->


    <!-- blog-details-area -->
    <section class="standard__blog blog__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="standard__blog__post">
                        <div class="standard__blog__thumb">
                            <img src="{{ asset($blogs->blog_image) }}" width="100%" height="600" alt="">
                        </div>
                        <div class="blog__details__content services__details__content">
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i>{{ ($blogs->created_at)->diffForHumans() }}</li>
                                <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li>
                            </ul>
                            <h2 class="title">{{  $blogs->blog_title }}</h2>
                           
                            <p>{!!  $blogs->blog_description !!}</p>

                         
                        </div>
                        <div class="blog__details__bottom">
                            <ul class="blog__details__tag">
                                <li class="title">Tag:</li>
                                <li class="tags-list">
                                    <a href="#">{{ $blogs->blog_tags }}</a>
        
                                </li>
                            </ul>
                            <ul class="blog__details__social">
                                <li class="title">Share :</li>
                                <li class="social-icons">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                     
                     
                     
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="blog__sidebar">
                        <div class="widget">
                            <form action="#" class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>

@php
     $blogs = App\Models\blogg::latest()->limit(5)->get();
@endphp

                        <div class="widget">
                            <h4 class="widget-title">Recent Blog</h4>
                            <ul class="rc__post">
                                 @foreach ($blogs as $item)
                                     
                                
                                <li class="rc__post__item">
                                    <div class="rc__post__thumb">
                                        <a href="blog-details.html"><img src="{{ asset($item->blog_image) }}" alt=""></a>
                                    </div>
                                    <div class="rc__post__content">
                                        <h5 class="title"><a href="{{ route('blog.details',$item->id) }}">{{ $item->blog_title }}</a></h5>
                                        <span class="post-date"><i class="fal fa-calendar-alt"></i> {{ ($item->created_at)->diffForHumans() }}</span>
                                    </div>
                                </li>

                                @endforeach
                            </ul>
                        </div>




                        <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="sidebar__cat">
                                @foreach ($categories as $category )
                                <li class="sidebar__cat__item"><a href="{{ route('category.post',$category->id) }}">{{ $category->category }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget">
                            <h4 class="widget-title">Popular Tags</h4>
                            <ul class="sidebar__tags">
                                <li><a href="blog.html">Business</a></li>
                                <li><a href="blog.html">Design</a></li>
                                <li><a href="blog.html">apps</a></li>
                                <li><a href="blog.html">landing page</a></li>
                                <li><a href="blog.html">data</a></li>
                                <li><a href="blog.html">website</a></li>
                                <li><a href="blog.html">book</a></li>
                                <li><a href="blog.html">Design</a></li>
                                <li><a href="blog.html">product design</a></li>
                                <li><a href="blog.html">landing page</a></li>
                                <li><a href="blog.html">data</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->



</main>

@endsection