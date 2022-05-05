{{-- Pagina 'comics' che estende il contenuto della pagina base 'app' --}}
@extends('layout.app')

{{-- Do un titolo a questa pagina (home) --}}
@section('title', 'home')

@section('main-content')
<section id="main-content">
  <div class="jumbotron">
    <img src="images/jumbotron.jpg" alt="jumbotron" />
  </div>
  <div class="container cards">
    <span class="section-description">Current series</span>

    <!-- Ricevo l'array 'comics' e ciclo sulle singole -->
    @foreach ($comics as $comic)
      <div class="card-box">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}" class="card-image" />
        <h6 class="card-description">{{ $comic['series'] }}</h6>
      </div>
    @endforeach
  </div>
  <div class="more-cards">
    <a href="#" class="btn-more">Load more</a>
  </div>
</section>
{{-- Includo la section 'main-nav' --}}
@include('partials/section-main-nav')
@endsection
