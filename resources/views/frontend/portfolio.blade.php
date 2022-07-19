

@extends('frontend.main_master')
@section('content')


   <main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Case Study</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

    <!-- portfolio-area -->
    <section class="portfolio__inner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                </div>
            </div>
           

                   @foreach ($portfolio as $portfolio)
                   <div class="portfolio__inner__active">
                   
                <div class="portfolio__inner__item grid-item cat-two cat-three">
                    <div class="row gx-0 align-items-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__thumb">
                                <a href="portfolio-details.html">
                                    <img src="{{ asset($portfolio->portfolio_image) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__content">
                                <h2 class="title"><a href="portfolio-details.html">{{ $portfolio->portfolio_title }}</a></h2>
                                <p>{!! Str::limit($portfolio->portfolio_description, 300) !!}</p>
                                <a href="{{ route('portfolio.details',$portfolio->id) }}" class="link">View Case Study</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach

          
         
        </div>
    </section>
    <!-- portfolio-area-end -->


    <!-- contact-area -->
  
    <!-- contact-area-end -->

</main>


@endsection