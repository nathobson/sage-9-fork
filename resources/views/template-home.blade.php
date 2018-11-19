{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  
    @include('partials.home.hero')
    @include('partials.home.communities')
    @include('partials.components.brands')
    @include('partials.home.products')
    @include('partials.components.share-price')

  @endwhile
@endsection