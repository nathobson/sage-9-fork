@extends('layouts.app')

@section('content')
  @if (!have_posts())
    @include('partials.404.page-list')
  @endif
@endsection
