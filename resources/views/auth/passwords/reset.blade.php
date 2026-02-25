@extends('layouts.app')

@section('content')
<section class="min-h-[calc(100vh-80px)] flex bg-slate-50 relative overflow-hidden py-12">
    <!-- Decorative Blobs -->
    <div
        class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-indigo-200/50 blur-3xl mix-blend-multiply filter">
    </div>
    <div
        class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-rose-200/50 blur-3xl mix-blend-multiply filter">
    </div>

    <div class="container mx-auto px-4 flex justify-center items-center relative z-10">
        <div class="w-full max-w-md">

            <div class="text-center mb-8">
                <a href="{{ url('/') }}" class="inline-block">
                    <img class="w-20 h-20 rounded-2xl shadow-lg border border-white mx-auto mb-4"
                        src="{{ asset('img/logo_110.png') }}" alt="logo">
                </a>
                <h1 class="text-3xl font-extrabold text-slate-900 display-font">{{ __('Buat Password Baru') }}</h1>
                <p class="text-slate-500 mt-2">Silakan masukkan password baru Anda</p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl shadow-indigo-100/50 border border-slate-100 p-8 sm:p-10">
                <form method="POST" action="{{ route('password.update') }}" class="space-y-6" novalidate>
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Alamat E-Mail</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-regular fa-envelope text-slate-400"></i>
                            </div>
                            <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required
                                autofocus readonly
                                class="w-full pl-10 pr-3 py-3 border border-slate-200 rounded-xl bg-slate-50 text-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('email') border-rose-500 focus:ring-rose-500 focus:border-rose-500 @enderror">
                        </div>
                        @error('email')
                        <p class="mt-2 text-sm text-rose-500"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{
                            $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-700 mb-2">Password
                            Baru</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-lock text-slate-400"></i>
                            </div>
                            <input id="password" type="password" name="password" required autocomplete="new-password"
                                class="w-full pl-10 pr-3 py-3 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('password') border-rose-500 focus:ring-rose-500 focus:border-rose-500 @enderror"
                                placeholder="••••••••">
                        </div>
                        @error('password')
                        <p class="mt-2 text-sm text-rose-500"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{
                            $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password-confirm" class="block text-sm font-medium text-slate-700 mb-2">Konfirmasi
                            Password Baru</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-lock-open text-slate-400"></i>
                            </div>
                            <input id="password-confirm" type="password" name="password_confirmation" required
                                autocomplete="new-password"
                                class="w-full pl-10 pr-3 py-3 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full flex justify-center py-3.5 px-4 rounded-xl shadow-lg shadow-indigo-600/30 text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-bold text-base transition-all hover:-translate-y-0.5">
                        <i class="fa-solid fa-save mr-2 mt-1"></i> {{ __('Reset Password') }}
                    </button>
                </form>
            </div>

            <div class="text-center mt-8 text-sm text-slate-500 font-light">
                Copyright &copy; 2021-2024 &mdash; {{ config('app.name', 'DigiForm') }}
            </div>
        </div>
    </div>
</section>
@endsection