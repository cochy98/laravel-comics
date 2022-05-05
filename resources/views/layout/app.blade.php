<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DC comics</title>

  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  {{-- Includo l'header nella mia pagina base e gli passo l'array contentente tutti i link --}}
  @include('partials/header', ['links' => config('header-links')])

  <main>
    @yield('main-content')
  </main>

  @include('partials/footer')
</body>
</html>
