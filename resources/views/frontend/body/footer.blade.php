<footer class="footer">
    @php
        $footer = App\Models\footer::find(1);
    @endphp
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contact us</h5>
                        <h4 class="title">{{ $footer->title1 }}</h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{!! $footer->description1 !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">my address</h5>
                        <h4 class="title">{{ $footer->title2}}</h4>
                    </div>
                    <div class="footer__widget__address">
                        <p>{!! $footer->description2 !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Follow me</h5>
                        <h4 class="title">{{ $footer->title3}}</h4>
                    </div>
                    <div class="footer__widget__social">
                        <p>{!! $footer->description3!!}</p>
                        <ul class="footer__social__list">
                            <li><a href="{{$footer->facebook_link  }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$footer->twitter_link  }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>{{$footer->copyright  }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>