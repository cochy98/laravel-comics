@extends('layout.app')

@section('title', 'details')

@section('main-content')
<section id="main-content">
  <div class="jumbotron">
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="jumbotron" />
    <div class="end-section">
      <div class="container">
        <div class="item-cover">
          <span>{{ $comic['type'] }}</span>
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
          <span>View gallery</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container-details">

    @dump($comic)



  </div>
</section>
{{-- Includo la section 'main-nav' --}}
@include('partials/section-main-nav')
@endsection
