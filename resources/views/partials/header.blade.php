<header>
  <div class="container">
    <nav>
      <img
        src="images/dc-logo.png"
        class="header-logo"
        alt="DC Logo"
      />
      <ul>
        @foreach ($links as $link)
          <li class="{{ (Route::currentRouteName() == $link['route-name']) ? 'active' : '' }}">
            <a href="{{ route($link['route-name']) }}">{{ $link['title'] }}</a>
          </li>
        @endforeach
      </ul>
    </nav>
  </div>
</header>
