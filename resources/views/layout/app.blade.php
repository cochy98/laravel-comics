<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Scrivo il titolo della pagina corrente --}}
  <title>DC comics - @yield('title')</title>
  
  {{-- Includo il foglio di stile compilato --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  {{-- Includo l'header nella mia pagina base e gli passo l'array contentente tutti i link --}}
  @include('partials/header', ['links' => config('header-links')])

  <main>
    @yield('main-content')
  </main>

  {{-- Includo il footer nella mia pagina base --}}
  @include('partials/footer')
</body>
</html>
