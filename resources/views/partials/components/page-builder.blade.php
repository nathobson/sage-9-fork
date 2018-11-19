@if ( !empty($page_builder) )

    <section class="page-builder">
                
        @foreach ( $page_builder as $block )

            @if ( $block->block_type == 'video' )
                @include('partials.page-builder.video')
            @elseif ( $block->block_type == 'text_only' )
                @include('partials.page-builder.text-only')
            @elseif ( $block->block_type == 'tabs' )
                @include('partials.page-builder.tabs')
            @elseif ( $block->block_type == 'cards' )
                @include('partials.page-builder.cards')
            @elseif ( $block->block_type == 'brands' )
                @include('partials.page-builder.brands')
            @elseif ( $block->block_type == 'board_of_directors' )
                @include('partials.page-builder.board')
            @elseif ( $block->block_type == 'table' )
                @include('partials.page-builder.table')
            @elseif ( $block->block_type == 'downloads' )
                @include('partials.page-builder.downloads')
            @elseif ( $block->block_type == 'news_rns_tabs' )
                @include('partials.page-builder.rns-news-tabs')
            @elseif ( $block->block_type == 'history' )
                @include('partials.page-builder.history')
            @elseif ( $block->block_type == 'columns' )
                @include('partials.page-builder.columns')
            @endif

        @endforeach

    </section>	
    
@endif