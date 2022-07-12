@php
      $about = App\Models\About::find(1);
@endphp

<div class="col-lg-6">
    <div class="about__content">
        <div class="section__title">
            <span class="sub-title">01 - About me</span>
            <h2 class="title">{{ $about->title }}</h2>
        </div>
        <div class="about__exp">
            <div class="about__exp__icon">
                {{-- {{ asset('frontend/') }} --}}
                <img src="{{ asset('frontend/assets/img/icons/about_icon.png')  }}" alt="">
            </div>
            <div class="about__exp__content">
                <p>{{ $about->short_title }}</p>
            </div>
        </div>
        <p class="desc">{{ $about->short_descripiton }}</p>
        <a href="about.html" class="btn">Download my resume</a>
    </div>
</div>