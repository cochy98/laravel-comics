<header>
  <div class="container">
    <nav>
      <img
        src="{{ asset('images/dc-logo.png') }}"
        class="header-logo"
        alt="DC Logo"
      />
      <ul>
        {{-- Ricevo l'array contenente i link della navbar e ciclo su di essi --}}
        @foreach ($links as $link)
          {{-- § la funzione 'Route::currentRouteName()' restituisce il name della route corrente --}}
          {{-- §  --}}
          <li class="{{ (Route::currentRouteName() == $link['route-name']) ? 'active' : '' }}">
            <a href="{{ route($link['route-name']) }}">{{ $link['title'] }}</a>
          </li>
        @endforeach
      </ul>
    </nav>
  </div>
</header>
