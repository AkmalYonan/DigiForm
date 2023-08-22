<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('img/logo_110.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/899e85c9e1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-warna1 fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold text-lead2" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::currentRouteName() !== 'login')
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" style="font-family: 'Roboto', sans-serif;"
                                href="#benefit">Benefit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" style="font-family: 'Roboto', sans-serif;"
                                href="#price">Paket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" style="font-family: 'Roboto', sans-serif;"
                                href="#contoh">Contoh</a>
                        </li>
                        @endif


                        @if (Route::currentRouteName() == 'login')
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" style="font-family: 'Roboto', sans-serif;"
                                href="{{ route('home') }}">{{ __('Home') }}</a>
                        </li>
                        @endif
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" style="font-family: 'Roboto', sans-serif;"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @else
                        @if (Route::has('home'))
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('/') ? 'active' : '' }}"
                                style="font-family: 'Roboto', sans-serif;" href="{{ route('home') }}">{{ __('Home')
                                }}</a>
                        </li>
                        @endif
                        @if (Route::has('hometemplate'))
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('template') ? 'active' : '' }}"
                                style="font-family: 'Roboto', sans-serif;" href="{{ route('hometemplate') }}">{{
                                __('Template') }}</a>
                        </li>
                        @endif
                        @if (Route::has('homepricelist'))
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('pricelist') ? 'active' : '' }}"
                                style="font-family: 'Roboto', sans-serif;" href="{{ route('homepricelist') }}">{{
                                __('Pricing') }}</a>
                        </li>
                        @endif
                        @if (Route::has('homeorder'))
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('order') ? 'active' : '' }}"
                                style="font-family: 'Roboto', sans-serif;" href="{{ route('homeorder') }}">{{
                                __('Order') }}</a>
                        </li>
                        @endif
                        @if(auth()->check() && auth()->user()->level == 2 && Route::has('admindashboard'))
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="{{ route('admindashboard') }}">{{ __('Dashboard')
                                }}</a>
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle fw-bolder"
                                style="font-family: 'Roboto', sans-serif;" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('homeaccount') }}">
                                    {{ __('Account') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

        <main class="">
            @yield('content')
            @yield('footer')
        </main>
    </div>
    @include('sweetalert::alert')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>