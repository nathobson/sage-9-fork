<section class="home-communities">

    <div class="grid-divider">
        @svg('grid-divider.svg')
    </div>

    <div class="inner">

        <h2>{!! $communities->heading !!}</h2>

        <p class="home-communities__intro">{!! $communities->intro !!}</p>

        <div class="home-communities__community home-communities__community--technology">
            
            <div class="home-communities__image">
                <img class="lazy" src="@asset('images/placeholder.jpg')" data-src="{{ $communities->technology_image }}" alt="{!! $communities->technology_image_alt !!}">
            </div>

            <div class="home-communities__text">
                <h3>{!! $communities->technology_header !!}</h3>
                <p>{!! $communities->technology_intro !!}</p>
                <a class="no-button" href="{{ $communities->technology_link }}">
                    View {!! $communities->technology_header !!}
                </a>
                <div class="home-communities__grid home-communities__grid--technology">
                    @svg('grid-technology.svg')
                </div>
            </div>

        </div>

        <div class="home-communities__community home-communities__community--finance">
            
            <div class="home-communities__image">
                <img class="lazy" src="@asset('images/placeholder.jpg')" data-src="{{ $communities->finance_image }}" alt="{!! $communities->finance_image_alt !!}">
            </div>

            <div class="home-communities__text">
                <h3>{!! $communities->finance_header !!}</h3>
                <p>{!! $communities->finance_intro !!}</p>
                <a class="no-button" href="{{ $communities->finance_link }}">
                    View {!! $communities->finance_header !!}
                </a>
                <div class="home-communities__grid home-communities__grid--finance">
                    @svg('grid-finance.svg')
                </div>
            </div>

        </div>

        <div class="home-communities__community home-communities__community--diversity">
        
            <div class="home-communities__image">
                <img class="lazy" src="@asset('images/placeholder.jpg')" data-src="{{ $communities->diversity_image }}" alt="{{ $communities->diversity_image_alt }}">
            </div>

            <div class="home-communities__text">
                <h3>{!! $communities->diversity_header !!}</h3>
                <p>{!! $communities->diversity_intro !!}</p>
                <a class="no-button" href="{{ $communities->diversity_link }}">
                    View {!! $communities->diversity_header !!}
                </a>
                <div class="home-communities__grid home-communities__grid--diversity">
                    @svg('grid-diversity.svg')
                </div>
            </div>

        </div>

    </div>

</section>