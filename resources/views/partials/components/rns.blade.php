<section class="rns">

    <div class="inner">
            
        <h2 class="section-heading">RNS Announcements</h2>

        <div class="rns__container">
            
            @foreach($rns as $r)
                <a href="{{ $r->link }}" class="card card--hover" target="_blank">
                    <div class="card__body">
                        <p class="card__date">{{ $r->date }}</p>
                        <p class="card__title">{{ $r->title }}</p>
                    </div>
                </a>
            @endforeach

        </div>

    </div>

</section>