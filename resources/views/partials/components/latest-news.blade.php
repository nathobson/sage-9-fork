<section class="latest-news">

    <div class="grid-divider">
        @svg('grid-divider.svg')
    </div>

    <div class="inner">

        <h2>Latest company news</h2>
        
        <a href="/news/" class="no-button">See all news items</a>

        <div class="latest-news-cards">

            @foreach($latest_news as $post)

                <div class="card">

                    <div class="card__image-container">
                        <p class="card__image-caption">{{ $post->category }}</p>

                        <div class="card__image lazy" style="background-image:url('@asset('images/placeholder.jpg')')" data-src="{{ $post->image }}"></div>

                    </div>

                    <div class="card__body">
                        <h3>{!! $post->title !!}</h3>
                        <p class="card__date">{{ $post->date }}</p>
                        <p>{!! $post->excerpt !!}</p>
                    </div>

                    <div class="card__footer">
                        <a href="{!! $post->permalink !!}" class="no-button">Read full article</a>
                        @include('partials.components.share')
                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>