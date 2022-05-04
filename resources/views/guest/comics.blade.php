@extends('layout.app')

@section('title', 'home')

@section('main-content')
<section id="main-content">
  <div class="jumbotron">
    <img src="images/jumbotron.jpg" alt="jumbotron" />
  </div>
  <div class="container cards">
    <span class="section-description">Current series</span>

    <!-- Ciclo sulle singole card, per il numero di card -->
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
<section id="main-nav">
  <div class="container">
    <ul>
      <li>
        <a href="#">
          <img src="images/buy-comics-digital-comics.png" alt="Digital comics">
          <p>Digital comics</p>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="images/buy-comics-merchandise.png" alt="Dc merchandise">
          <p>Dc merchandise</p>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="images/buy-comics-subscriptions.png" alt="Subscription">
          <p>Subscription</p>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="images/buy-comics-shop-locator.png" alt="Comic shop locator">
          <p>Comic shop locator</p>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="images/buy-dc-power-visa.svg" alt="Dc power visa">
          <p>Dc power visa</p>
        </a>
      </li>
    </ul>
  </div>
</section>
@endsection
