@if($hero->add_hero)

    <section class="hero">

        <div class="inner">

            <div class="hero__text">
                
                <h1>{!! $hero->title !!}</h1>
                <p class="hero__intro">{!! $hero->intro !!}</p>

                {{-- Only show the call out if it has been enabled and the share price has NOT been enabled --}}
                @if(!(empty($hero->call_out_heading)) && $hero->share_price == false)
                    <div class="hero__call-out">
                        <p class="hero__call-out-heading">{!! $hero->call_out_heading !!}</p>
                        <p class="hero__call-out-name">{!! $hero->call_out_name !!}</p>
                        <p class="hero__call-out-description">{!! $hero->call_out_description !!}</p>
                        <div class="hero__call-out-links">
                            <a href="{{ $hero->call_out_link_url }}" class="no-button" target="_blank">{{ $hero->call_out_link_text }}</a>
                        </div>
                    </div>
                @endif

                @if($hero->share_price == true)
                    <div class="hero__call-out">
                        <p class="hero__call-out-heading">Share price (LON: {!! $shareprice->symbol !!})</p>
                        <p class="hero__call-out-share-price">{!! $shareprice->price !!} <span class="hero__call-out-name">{!! $shareprice->currency !!}</span>
                        <p class="hero__call-out-description">Last checked {!! $shareprice->last_checked !!}</p>
                        <div class="hero__call-out-links">
                            <a href="/investors/share-price-information/" class="no-button">More share price information</a>
                        </div>
                    </div>
                @endif

            </div>

        </div>

        <div class="hero__image-container">
            <img src="{{ $hero->image }}" class="hero__image">
            <img src="{{ $hero->image_overlay }}" class="hero__image-overlay">
        </div>

    </section>

@else

    <section class="hero hero--minimal">

        <div class="inner">

            <h1>{!! $hero->title !!}</h1>

        </div>

    </section>

@endif