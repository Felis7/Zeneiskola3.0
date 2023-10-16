<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-success">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-success text-primary pt-3">
            <img src="{{ asset('img/szintenzeneszbanner.webp') }}" alt="Banner" class="img-fluid" id="banner">
        </div>
        
    </div>
   </div>
<nav class="navbar-expand-sm bg-light navbar-light container-fluid" id="navbar">   
    <div class="row">
        <div class="col-6">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active p-2 fs-5" href="{{route("home")}}">Kezdőlap</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active p-2 fs-5" href="{{route("kereso")}}">Tanárkereső</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active p-2 fs-5" href="{{route("regisztracio")}}">Hangszerpiac</a>
        </li>
    </ul>
    </div>
    <div class="col-6 d-flex justify-content-end">
    <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active p-2 fs-5" href="#">Belépés</a>
              </li>
             <li class="nav-item">
                <a class="nav-link active p-2 fs-5" href="#">Regisztráció</a>
              </li>
            </ul>
        </div>
</div>
  </nav>
    <main class="py-4">
        @yield('content')
    </main>
    
    <x-footer />
</body>
</html>