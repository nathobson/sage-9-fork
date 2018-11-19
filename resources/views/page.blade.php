@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

    @include('partials.components.hero')
    @include('partials.components.page-builder')
    
  @endwhile
@endsection