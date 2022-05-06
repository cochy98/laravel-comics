@extends('layout.app')

@section('title', 'details')

@section('main-content')
<section id="main-content">
  <div class="jumbotron">
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="jumbotron" />
  </div>

  <div class="start-details">
    <div class="container">
      <div class="item-cover">
        <span>{{ $comic['type'] }}</span>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        <span>View gallery</span>
      </div>
    </div>
  </div>

  <div class="comic-details">
    <div class="container">
      <div class="col-left">
        <h1 class="comic-title">{{ $comic['title'] }}</h1>
        <p class="comic-description">{{ $comic['description'] }}</p>
        @dump($comic)
      </div>

      <div class="col-right">
        <img src="{{ asset('images/pubb.jpg') }}" alt="ADV photo">
      </div>
    </div>
  </div>

  <div class="comic-specs">
    <div class="container">
      <div class="col-left">
        <h1>Talent</h1>
      </div>
      <div class="col-right">
        <h1>Specs</h1>
      </div>
    </div>

  </div>
</section>
{{-- Includo la section 'main-nav' --}}
@include('partials/section-main-nav')
@endsection
