<section class="services">
    <div class="container">
        <div class="services__title__wrap">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title">
                        <span class="sub-title">02 - my Services</span>
                        <h2 class="title">Creates amazing digital experiences</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="services__arrow"></div>
                </div>
            </div>
        </div>
        <div class="row gx-0 services__active">
            @php
                   $services = App\Models\Service::all();
            @endphp

            @foreach ( $services as $service )
                
         
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img01.png') }}) }}') }}" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon01.png') }}') }}" alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon01.png') }}') }}" alt="">
                        </div>
                        <h3 class="title"><a href="services-details.html">{{ $service->title }}</a></h3>
                        <p> {{ $service->short_title }} </p>
                        <ul class="services__list">
                            {!! $service->service_descripition !!}
                        </ul>
                        <a href="services-details.html" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>