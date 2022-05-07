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
    <div class="container flex-justify-between">
      <div class="col-left flex-basis-70">
        <h1 class="comic-title dark-blue">{{ $comic['title'] }}</h1>
        <div class="table d-flex">
          <div class="table-col-left flex-basis-80 flex-justify-between">
            <p>U.S. Price: <span>{{ $comic['price'] }}</span></p>
            <p>AVAILABLE</p>
          </div>
          <div class="table-col-right flex-basis-20">Check Availability</div>
        </div>
        <p class="comic-description">{{ $comic['description'] }}</p>
      </div>

      <div class="col-right">
        <h6>Advertisement</h6>
        <img src="{{ asset('images/pubb.jpg') }}" alt="ADV photo">
      </div>
    </div>
  </div>

  <div class="comic-specs">
    <div class="container flex-justify-between">
      <div class="flex-basis-45">
        <h1 class="sub-title dark-blue">Talent</h1>
        <div class="min-hr"></div>
        <div class="artists flex-justify-between">
          <p class="flex-basis-30 dark-blue">Art by:</p>
          <p class="name-artists flex-basis-70 light-blue">{{ @implode(", " , $comic['artists']) }}</p>
        </div>
        <div class="min-hr"></div>
        <div class="writers flex-justify-between">
          <p class="flex-basis-30 dark-blue">Written by:</p>
          <p class="name-artists flex-basis-70 light-blue">{{ @implode(", " , $comic['writers']) }}</p>
        </div>
        <div class="min-hr"></div>
      </div>
      <div class="flex-basis-45">
        <h1 class="sub-title dark-blue">Specs</h1>
        <div class="min-hr"></div>
        <div class="series flex-justify-between">
          <p class="flex-basis-30 dark-blue">Series:</p>
          <p class="flex-basis-70 light-blue text-upper">{{ $comic['series'] }}</p>
        </div>
        <div class="min-hr"></div>
        <div class="price flex-justify-between">
          <p class="flex-basis-30 dark-blue">U.S. Price:</p>
          <p class="flex-basis-70">{{ $comic['price'] }}</p>
        </div>
        <div class="min-hr"></div>
        <div class="sale-date flex-justify-between">
          <p class="flex-basis-30 dark-blue">ON Sale Date:</p>
          <p class="flex-basis-70">{{ $comic['sale_date'] }}</p>
        </div>
        <div class="min-hr"></div>

      </div>
    </div>

  </div>
</section>
<section id="details-main-nav">
  <div class="container">
    <ul class="d-flex">
      <li>
        <a href="#">
          <p>Digital comics</p>
          <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="Digital comics">
        </a>
      </li>
      <li>
        <a href="#">
          <p>Shop dc</p>
          <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="Dc merchandise">
        </a>
      </li>
      <li>
        <a href="#">
          <p>Comic shop locator</p>
          <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="Subscription">
        </a>
      </li>
      <li>
        <a href="#">
          <p>Subscription</p>
          <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="Comic shop locator">
        </a>
      </li>
    </ul>
  </div>
</section>
@endsection
