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
        <div class="w-full max-w-2xl">

            <div class="text-center mb-8">
                <a href="{{ url('/') }}" class="inline-block">
                    <img class="w-20 h-20 rounded-2xl shadow-lg border border-white mx-auto mb-4"
                        src="{{ asset('img/logo_110.png') }}" alt="logo">
                </a>
                <h1 class="text-3xl font-extrabold text-slate-900 display-font">Daftar Akun Baru</h1>
                <p class="text-slate-500 mt-2">Silakan register untuk memulai pesanan Anda</p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl shadow-indigo-100/50 border border-slate-100 p-8 sm:p-10">
                <form method="POST" action="{{ route('register') }}" class="space-y-6" novalidate autocomplete="off">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Nama Lengkap</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                                class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('name') border-rose-500 focus:ring-rose-500 focus:border-rose-500 @enderror"
                                placeholder="Cth: Akmal Yonan">
                            @error('name')
                            <p class="mt-2 text-sm text-rose-500"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{
                                $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Alamat
                                E-Mail</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('email') border-rose-500 focus:ring-rose-500 focus:border-rose-500 @enderror"
                                placeholder="nama@email.com">
                            @error('email')
                            <p class="mt-2 text-sm text-rose-500"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{
                                $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                            <input id="password" type="password" name="password" required
                                class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('password') border-rose-500 focus:ring-rose-500 focus:border-rose-500 @enderror"
                                placeholder="Minimal 8 karakter">
                            @error('password')
                            <p class="mt-2 text-sm text-rose-500"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{
                                $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div>
                            <label for="password-confirm"
                                class="block text-sm font-medium text-slate-700 mb-2">Konfirmasi Password</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required
                                class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
                                placeholder="Ulangi password">
                        </div>

                        <!-- Gender Field -->
                        <div>
                            <label for="gender" class="block text-sm font-medium text-slate-700 mb-2">Jenis
                                Kelamin</label>
                            <select id="gender" name="gender" required
                                class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors appearance-none bg-white @error('gender') border-rose-500 focus:ring-rose-500 focus:border-rose-500 @enderror">
                                <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Pilih Jenis Kelamin
                                </option>
                                <option value="laki" {{ old('gender')=='laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ old('gender')=='perempuan' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                            <!-- Custom dropdown arrow since we use appearance-none -->
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-500">
                                <!-- Since it's in a grid, putting the arrow absolutely might be tricky if not wrapped in relative. 
                                     Let's use Tailwind's default select styling by dropping appearance-none, or wrap it. -->
                            </div>
                            @error('gender')
                            <p class="mt-2 text-sm text-rose-500"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{
                                $message }}</p>
                            @enderror
                        </div>

                        <!-- Birth Date Field -->
                        <div>
                            <label for="birthdate" class="block text-sm font-medium text-slate-700 mb-2">Tanggal
                                Lahir</label>
                            <input id="birthdate" type="date" name="birthdate" value="{{ old('birthdate') }}" required
                                class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('birthdate') border-rose-500 focus:ring-rose-500 focus:border-rose-500 @enderror">
                            @error('birthdate')
                            <p class="mt-2 text-sm text-rose-500"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{
                                $message }}</p>
                            @enderror
                        </div>

                        <!-- Referral Code Field -->
                        <div class="md:col-span-2">
                            <label for="referral_code" class="block text-sm font-medium text-slate-700 mb-2">Kode
                                Referral (Opsional)</label>
                            <input id="referral_code" type="text" name="referral_code"
                                value="{{ old('referral_code') }}" disabled
                                class="w-full px-4 py-3 border border-slate-200 rounded-xl bg-slate-100 text-slate-500 cursor-not-allowed @error('referral_code') border-rose-500 focus:ring-rose-500 focus:border-rose-500 @enderror"
                                placeholder="Masukkan kode (saat ini tidak aktif)">
                            @error('referral_code')
                            <p class="mt-2 text-sm text-rose-500"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{
                                $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full flex justify-center py-3.5 px-4 rounded-xl shadow-lg shadow-indigo-600/30 text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-bold text-lg transition-all hover:-translate-y-0.5">
                            Daftarkan Akun
                        </button>
                    </div>
                </form>

                <div class="mt-8 pt-8 border-t border-slate-100 text-center">
                    <p class="text-sm text-slate-600">
                        Sudah punya akun?
                        <a href="{{ route('login') }}"
                            class="font-bold text-indigo-600 hover:text-indigo-500 transition-colors">Masuk di sini</a>
                    </p>
                </div>
            </div>

            <div class="text-center mt-8 text-sm text-slate-500 font-light">
                Copyright &copy; 2021-2024 &mdash; {{ config('app.name', 'DigiForm') }}
            </div>
        </div>
    </div>
</section>
@endsection