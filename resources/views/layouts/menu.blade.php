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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="d-flex" id="wrapper">
@stack('modals')

<!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><strong>Hotel Soft  <i class="fas fa-hotel"></i></strong></div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action" href="#" id="item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Alquileres</strong>
            </a>
            <a class="dropdown-item list-group-item-action bg-light" href="{{ route('rentals.index') }}">Alquileres</a>
            <a class="dropdown-item list-group-item-action bg-light" href="{{ route('statuses.index') }}">Estados de Alquiler</a>


            <a class="list-group-item list-group-item-action" href="#" id="item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Habitaciones</strong>
            </a>
            <a class="dropdown-item list-group-item-action bg-light" href="{{ route('rooms.index') }}">Habitaciones</a>
            <a class="dropdown-item list-group-item-action bg-light" href="{{ route('types.index') }}">Tipos de habitaciones</a>

            <a class="list-group-item list-group-item-action" href="#" id="item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Clientes</strong>
            </a>
            <a class="dropdown-item list-group-item-action bg-light" href="{{ route('clients.index') }}">Clientes</a>
            <a class="dropdown-item list-group-item-action bg-light" href="{{ route('nationalities.index') }}">Nacionalidades</a>

            <a class="list-group-item list-group-item-action" href="#" id="item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Registradores</strong>
            </a>
            <a class="dropdown-item list-group-item-action bg-light" href="{{ route('receptionists.index') }}">Registradores</a>
        </div>

    </div>

    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

        </nav>

        <main class="py-5">
            @yield('content')
        </main>

    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="{{ asset(mix('js/app.js')) }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    @stack('scripts')
</div>
</body>
</html>

