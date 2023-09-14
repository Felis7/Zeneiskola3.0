<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
            <img src="{{ asset('img/szintenzeneszbanner.jpg') }}" alt="Banner" class="img-fluid">
        </div>
        
    </div>
   </div>
</div>

<nav class="navbar navbar-expand-sm navbar-dark fixed" id="navbar">
    <div id="navbar" class="w-100">
     <a><button type="button" class="btn btn-success mb-2 mx-5 btn-lg">Főoldal</button></a>
     <a><button type="button" class="btn btn-success mb-2 mx-5 btn-lg">Tanárkereső</button></a>
     <a><button type="button" class="btn btn-success mb-2 mx-5 btn-lg">Hangszerpiac</button></a>
     <a><button type="button" class="btn btn-success mb-2 mx-5 btn-lg">Felhasználóiprofil</button></a>
     <a><button type="button" class="btn btn-success mb-2 mx-5 btn-lg">GY.Í.K.</button></a>
     <a><button type="button" class="btn btn-success mb-2 mx-5 btn-lg">Kapcsolat</button></a>
     <a><button type="button" class="btn btn-success mb-2 mx-5 btn-lg">Regisztáció</button></a>
     <a><button type="button" class="btn btn-success mb-2 mx-5 btn-lg">Kijelentkezés</button></a>
    </div>
  </nav>
    <main class="py-4 ms-5">
        @yield('content')
    </main>
</body>
</html>
