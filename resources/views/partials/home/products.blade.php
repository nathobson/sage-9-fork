<section class="home-products">

    <div class="grid-divider">
        @svg('grid-divider.svg')
    </div>

    <div class="inner">

        <h2>{!! $products->heading !!}</h2>
        <p class="home-products__intro">{!! $products->intro !!}</p>

        <div class="home-products__cards">

            <div class="card card--hover card--mobile-center home-products__card--business">

                <div class="card__icon">
                    <div class="card__icon-bg">@svg('blob-icon-business.svg')</div>
                    <div class="card__icon-main">@svg('icon-business.svg')</div>
                </div>

                <div class="card__body card__body--padding-large">
                    <h3>{!! $products->business_heading !!}</h3>
                    <p>{!! $products->business_intro !!}</p>
                </div>

            </div>

            <div class="card card--hover card--mobile-center home-products__card--live">

                <div class="card__icon">
                    <div class="card__icon-bg">@svg('blob-icon-live.svg')</div>
                    <div class="card__icon-main">@svg('icon-live.svg')</div>
                </div>

                <div class="card__body card__body--padding-large">
                    <h3>{!! $products->events_heading !!}</h3>
                    <p>{!! $products->events_intro !!}</p>
                </div>

            </div>

            <div class="card card--hover card--mobile-center home-products__card--data">

                <div class="card__icon">
                    <div class="card__icon-bg">@svg('blob-icon-data.svg')</div>
                    <div class="card__icon-main">@svg('icon-data.svg')</div>
                </div>

                <div class="card__body card__body--padding-large">
                    <h3>{!! $products->data_and_insights_heading !!}</h3>
                    <p>{!! $products->data_and_insights_intro !!}</p>
                </div>

            </div>

        </div>

    </div>

</section>