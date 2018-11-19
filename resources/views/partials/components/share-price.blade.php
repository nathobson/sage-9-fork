<section class="share-price">

    <div class="share-price__text">
        <p class="share-price__heading">Share information</p>

        <p class="share-price__price">{{ $shareprice->price }} GBX</p>
        <p class="share-price__meta">
            LON : {{ $shareprice->symbol }}<br>
            {{ $shareprice->last_checked }}
        </p>
    </div>

    @svg('blob-share-price.svg', 'share-price__blob')

</section>