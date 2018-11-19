{{--
  Template Name: Sitemap
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

    @include('partials.components.hero')
    @include('partials.sitemap.page-list')
    
  @endwhile
@endsection
