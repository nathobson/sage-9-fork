<section class="brands">

    @if(!empty($brands_heading))
    <p class="brands__heading">{{ $brands_heading }}</p>
    @endif

    @if(!empty($brands_intro))
    <p class="brands__intro">{{ $brands_intro }}</p>
    @endif

    <div class="inner">

        @foreach($brands as $brand)

            <a class="brands__brand" href="{{ $brand->link }}" target="_blank">
                <img class="lazy" src="@asset('images/placeholder.jpg')" data-src="{{ $brand->logo }}">
            </a>

        @endforeach

    </div>

</section>