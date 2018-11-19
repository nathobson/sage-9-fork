<section class="home-hero">

    <div class="inner">

        <h1>{!! $hero->heading !!}</h1>
        <h2>{!! $hero->main_copy !!}</h2>

        <a class="button button--white" href="{{ $hero->button_link }}">{{ $hero->button_text }}</a>

    </div>

    <div class="home-hero__cutout">
        @svg('home-hero-cutout.svg')
    </div>
    <div class="home-hero__dots">
        @svg('home-hero-dots.svg')
    </div>
    <div class="home-hero__hill">
        @svg('home-hero-hill.svg')
    </div>

</section>