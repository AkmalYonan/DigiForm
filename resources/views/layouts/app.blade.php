<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('img/logo_110.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS via Vite -->
    @vite(['resources/css/tailwind.css', 'resources/js/app.js'])

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/899e85c9e1.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .display-font {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased font-sans flex flex-col min-h-screen">
    <div id="app" class="flex-grow flex flex-col">
        <!-- Glassmorphic Navbar -->
        <nav class="fixed top-0 w-full z-50 transition-all duration-300 backdrop-blur-md bg-white/80 border-b border-slate-200/50 shadow-sm"
            id="navbar">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center gap-3">
                        <img src="{{ asset('img/logo_110.png') }}" alt="DigiForm Logo" class="h-10 w-auto">
                        <a href="{{ url('/') }}" class="font-bold text-2xl tracking-tight text-slate-900 display-font">
                            {{ config('app.name', 'DigiForm') }}
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex space-x-8 items-center">
                        @guest
                        @if (Route::currentRouteName() !== 'login')
                        <a href="#benefit"
                            class="text-slate-600 hover:text-indigo-600 font-medium transition-colors">Benefit</a>
                        <a href="#price"
                            class="text-slate-600 hover:text-indigo-600 font-medium transition-colors">Paket</a>
                        <a href="#contoh"
                            class="text-slate-600 hover:text-indigo-600 font-medium transition-colors">Contoh</a>
                        @endif

                        @if (Route::currentRouteName() == 'login')
                        <a href="{{ route('home') }}"
                            class="text-slate-600 hover:text-indigo-600 font-medium transition-colors">{{ __('Home')
                            }}</a>
                        @endif

                        @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                            class="text-indigo-600 font-semibold hover:text-indigo-700 transition-colors">{{ __('Login')
                            }}</a>
                        @endif
                        @else
                        @if (Route::has('home'))
                        <a href="{{ route('home') }}"
                            class="{{ Request::is('/') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600 font-medium' }} transition-colors">{{
                            __('Home') }}</a>
                        @endif
                        @if (Route::has('hometemplate'))
                        <a href="{{ route('hometemplate') }}"
                            class="{{ Request::is('template') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600 font-medium' }} transition-colors">{{
                            __('Template') }}</a>
                        @endif
                        @if (Route::has('homepricelist'))
                        <a href="{{ route('homepricelist') }}"
                            class="{{ Request::is('pricelist') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600 font-medium' }} transition-colors">{{
                            __('Pricing') }}</a>
                        @endif
                        @if (Route::has('homeorder'))
                        <a href="{{ route('homeorder') }}"
                            class="{{ Request::is('order') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600 font-medium' }} transition-colors">{{
                            __('Order') }}</a>
                        @endif

                        @if(auth()->check() && auth()->user()->level == 2 && Route::has('admindashboard'))
                        <a href="{{ route('admindashboard') }}"
                            class="text-rose-500 hover:text-rose-600 font-semibold transition-colors">{{ __('Dashboard')
                            }}</a>
                        @endif

                        <!-- Profile Dropdown (Hover based for simplicity in pure Tailwind, or replace with Alpine.js if needed) -->
                        <div class="relative group">
                            <button
                                class="flex items-center space-x-2 text-slate-700 font-semibold hover:text-indigo-600 focus:outline-none py-2">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=6366f1&color=fff"
                                    class="w-8 h-8 rounded-full border border-slate-200" alt="Avatar">
                                <span>{{ Auth::user()->name }}</span>
                                <i class="fa-solid fa-chevron-down text-xs ml-1"></i>
                            </button>
                            <!-- Dropdown menu -->
                            <div
                                class="absolute right-0 w-48 mt-0 bg-white border border-slate-100 rounded-xl shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-right z-50">
                                <div class="py-2">
                                    <a href="{{ route('homeaccount') }}"
                                        class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-indigo-600">{{
                                        __('Account') }}</a>
                                    <div class="border-t border-slate-100 my-1"></div>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="block px-4 py-2 text-sm text-rose-600 hover:bg-rose-50">{{ __('Logout')
                                        }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endguest
                    </div>

                    <!-- Mobile View Hamburger (Pure CSS hack for toggle or minimal JS needed) -->
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-btn" class="text-slate-600 hover:text-slate-900 focus:outline-none">
                            <i class="fa-solid fa-bars text-2xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu"
                class="hidden md:hidden bg-white border-t border-slate-100 absolute w-full shadow-lg pb-4">
                <div class="flex flex-col px-4 pt-2 space-y-2">
                    @guest
                    @if (Route::currentRouteName() !== 'login')
                    <a href="#benefit" class="block py-2 text-slate-600 font-medium">Benefit</a>
                    <a href="#price" class="block py-2 text-slate-600 font-medium">Paket</a>
                    <a href="#contoh" class="block py-2 text-slate-600 font-medium">Contoh</a>
                    @endif
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="block py-2 text-indigo-600 font-semibold">{{ __('Login')
                        }}</a>
                    @endif
                    @else
                    @if (Route::has('home')) <a href="{{ route('home') }}"
                        class="block py-2 {{ Request::is('/') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }}">{{
                        __('Home') }}</a> @endif
                    @if (Route::has('hometemplate')) <a href="{{ route('hometemplate') }}"
                        class="block py-2 {{ Request::is('template') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }}">{{
                        __('Template') }}</a> @endif
                    @if (Route::has('homepricelist')) <a href="{{ route('homepricelist') }}"
                        class="block py-2 {{ Request::is('pricelist') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }}">{{
                        __('Pricing') }}</a> @endif
                    @if (Route::has('homeorder')) <a href="{{ route('homeorder') }}"
                        class="block py-2 {{ Request::is('order') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }}">{{
                        __('Order') }}</a> @endif
                    @if(auth()->check() && auth()->user()->level == 2 && Route::has('admindashboard'))
                    <a href="{{ route('admindashboard') }}" class="block py-2 text-rose-500 font-semibold">{{
                        __('Dashboard') }}</a>
                    @endif
                    <div class="border-t border-slate-100 my-2"></div>
                    <a href="{{ route('homeaccount') }}" class="block py-2 text-slate-700">{{ __('Account') }}</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block py-2 text-rose-600">{{ __('Logout') }}</a>
                    @endguest
                </div>
            </div>
        </nav>

        <!-- Main Content Area -->
        <main class="flex-grow pt-20">
            @yield('content')
            @yield('footer')
        </main>
    </div>

    @include('sweetalert::alert')

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, duration: 800 });
        
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            if(menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
        
        // Navbar Scrolled State
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 10) {
                navbar.classList.add('shadow-md', 'bg-white/90');
                navbar.classList.remove('bg-white/80', 'shadow-sm');
            } else {
                navbar.classList.add('bg-white/80', 'shadow-sm');
                navbar.classList.remove('shadow-md', 'bg-white/90');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
</body>

</html>