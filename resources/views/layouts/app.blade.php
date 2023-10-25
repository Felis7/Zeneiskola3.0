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
<body class="bg-success" id="body">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-success text-primary pt-3">
            <img src="{{ asset('img/szintenzeneszbanner.webp') }}" alt="Banner" class="img-fluid" id="banner">
        </div>
        
    </div>
   </div>
<nav class="navbar-expand-lg col-12 bg-light navbar-light container-fluid" id="navbar">   
    <div class="row">
        <div class="col-12 col-xl-6">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active p-2 fs-5" href="{{route("kezdolap")}}">Kezdőlap</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active p-2 fs-5" href="{{route("kereso")}}">Tanárkereső</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active p-2 fs-5" href="#">Hangszerpiac</a>
        </li>
    </ul>
    </div>
    <div class="col-12 col-xl-6 d-flex justify-content-xl-end">
    <ul class="navbar-nav" id="jobnav">
            <li class="nav-item">
                <a class="nav-link active p-2 fs-5" href="{{route("login")}}">Belépés</a>
              </li>
             <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link active p-2 fs-5" href="{{route("regisztracio")}}">Regisztráció</a>
=======
               @guest
               <a class="nav-link active p-2 fs-5" href="{{route("register")}}">Regisztráció</a>
               @endguest
               @auth
               <a class="nav-link active p-2 fs-5" href="{{route("register")}}">Kilépés</a>
               @endauth
>>>>>>> 80f111659406a6ff3ea03ade49dadca8fb8c520c
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