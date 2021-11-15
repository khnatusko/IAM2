<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="css/main.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body class="body">
    <div id="app">
        <div class="container-fluid bg-dark d-flex justify-content-center">
            <div class="container p-2 sticky-top d-flex flex-row justify-content-between ">
                <div class="mb-auto align-self-middle">
                    <a class="navbar-brand" href="{{ url('/home') }}"><h5 class="text-light"><i class="fas fa-university text-secondary"></i> IAM2 Projekt </h5></a>
                </div>
                <div class="mb-auto">
                    @if (Route::has('login'))
                <div>
                    @auth
                    <div class="mb-auto col-12">
                        <nav class="nav nav-pills">
                            <a href="{{ url('/przedmioty') }}" class="nav-link text-white px-5 btn-sm">Przedmioty</a>
                            <a href="{{ url('/wiedza') }}" class="nav-link text-white px-5  btn-sm">Wiedza</a>
                            <a href="{{ url('/uczniowie') }}" class="nav-link text-white px-5 btn-sm">Uczniowie</a>
                            <a href="{{ url('/kurs') }}" class="nav-link text-white px-5 btn-sm">Kurs</a>
                            <a href="{{ url('/kurslist') }}" class="nav-link text-white px-5 btn-sm">Lista kursów</a>
                            
                            <button href="{{ route('logout') }}" class="btn btn-secondary btn-sm fw-bold mx-2" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    Wyloguj
                            </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                            </form>
                        </nav>
                    </div>
                    
                    @else

                        <a href="{{ route('login') }}" class="text-sm btn btn-secondary fw-bold strong btn-sm mx-1">Zaloguj</a>
                        @if (Route::has('register'))

                        <a href="{{ route('register') }}" class="ml-4 text-sm btn fw-bold btn-primary btn-sm mx-1">Zarejestruj</a>
                        @endif
                    @endif
                </div>
            @endif
                </div>
            </div>    
        </div>
            

        <main>
            @yield('content')
        </main>

        
        <div class="bg-dark fixed-bottom text-center p-2">
            <span class= "text-secondary p-2 small opacity-75">Created by: K.Hnatusko & K.Pałęga</span>
        </div>
    </div>
</body>
</html>
