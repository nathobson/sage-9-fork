<section class="featured-news lazy" style="background-image:url('@asset('images/placeholder.jpg')')" data-src="{{ $featured_news->image }}">

    <div class="inner">

        <div class="featured-news__card">
            <p class="featured-news__category">{!! $featured_news->category !!}</p>
            <h3>{!! $featured_news->title !!}</h3>
            <p class="featured-news__date">{!! $featured_news->date !!}</p>
            <p>{!! $featured_news->excerpt !!}</p>
            <a href="{{ $featured_news->permalink }}" class="no-button">Read full article</a>
        </div>

        <div class="featured-news__blob">
            @svg('blob-featured-news.svg')
        </div>

    </div>

</section>