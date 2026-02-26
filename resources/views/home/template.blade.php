@extends('layouts.app')

@section('content')

<!-- Header Section -->
<div class="px-4 py-16 mt-10">
    <div class="max-w-4xl mx-auto bg-gradient-to-r from-indigo-600 to-blue-700 rounded-3xl p-10 shadow-2xl shadow-indigo-500/30 text-center relative overflow-hidden"
        data-aos="fade-up">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
        </div>
        <div class="relative z-10 text-white">
            <p class="text-indigo-100 font-medium tracking-wider uppercase text-sm mb-2">Pilihan Terbaik</p>
            <h1 class="text-4xl md:text-5xl font-extrabold display-font mb-4">Template Undangan Online</h1>
            <p class="text-lg text-indigo-50 max-w-2xl mx-auto leading-relaxed">
                Temukan berbagai pilihan template undangan online menarik untuk momen spesial Anda. Ciptakan undangan
                sempurna dengan desain yang mudah disesuaikan. Jadikan momen istimewa lebih
                berkesan dengan undangan online dari kami!
            </p>
        </div>
    </div>
</div>

<!-- Templates Grid -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

        <!-- Template Amara -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
            data-aos="fade-up" data-aos-delay="50">
            <div class="overflow-hidden relative h-64">
                <img src="{{ asset('img/card1_amara.webp') }}"
                    onerror="this.src='https://github.com/bakaroti/resource/blob/main/card1.png?raw=true'"
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                    alt="Amara Template">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>
            <div class="p-6 text-center">
                <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-1">Premium Template</p>
                <h3 class="text-xl font-bold text-slate-800 display-font mb-5">AMARA</h3>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('temp_amara') }}"
                        class="w-full py-2 px-4 rounded-xl border-2 border-indigo-100 text-indigo-600 font-semibold hover:bg-indigo-50 hover:border-indigo-200 transition-colors">Preview</a>
                    <a href="{{ route('homeorder') }}" target="_blank"
                        class="w-full py-2 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md shadow-emerald-500/20 transition-colors">Pesan
                        Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Template Amartha -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
            data-aos="fade-up" data-aos-delay="100">
            <div class="overflow-hidden relative h-64">
                <img src="{{ asset('img/card2_amartha.jpeg') }}"
                    onerror="this.src='https://github.com/bakaroti/resource/blob/main/card2.png?raw=true'"
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                    alt="Amartha Template">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>
            <div class="p-6 text-center">
                <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-1">Premium Template</p>
                <h3 class="text-xl font-bold text-slate-800 display-font mb-5">AMARTHA</h3>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('temp_amartha') }}"
                        class="w-full py-2 px-4 rounded-xl border-2 border-indigo-100 text-indigo-600 font-semibold hover:bg-indigo-50 hover:border-indigo-200 transition-colors">Preview</a>
                    <a href="{{ route('homeorder') }}" target="_blank"
                        class="w-full py-2 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md shadow-emerald-500/20 transition-colors">Pesan
                        Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Template Arta -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
            data-aos="fade-up" data-aos-delay="150">
            <div class="overflow-hidden relative h-64">
                <img src="{{ asset('img/card3_arta.webp') }}"
                    onerror="this.src='https://github.com/bakaroti/resource/blob/main/card3.png?raw=true'"
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                    alt="Arta Template">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>
            <div class="p-6 text-center">
                <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-1">Premium Template</p>
                <h3 class="text-xl font-bold text-slate-800 display-font mb-5">ARTA</h3>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('temp_arta') }}"
                        class="w-full py-2 px-4 rounded-xl border-2 border-indigo-100 text-indigo-600 font-semibold hover:bg-indigo-50 hover:border-indigo-200 transition-colors">Preview</a>
                    <a href="{{ route('homeorder') }}" target="_blank"
                        class="w-full py-2 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md shadow-emerald-500/20 transition-colors">Pesan
                        Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Template Dawa -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
            data-aos="fade-up" data-aos-delay="200">
            <div class="overflow-hidden relative h-64">
                <img src="{{ asset('img/card4_dawa.webp') }}"
                    onerror="this.src='https://github.com/bakaroti/resource/blob/main/card4.png?raw=true'"
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                    alt="Dawa Template">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>
            <div class="p-6 text-center">
                <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-1">Premium Template</p>
                <h3 class="text-xl font-bold text-slate-800 display-font mb-5">DAWA</h3>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('temp_dawa') }}"
                        class="w-full py-2 px-4 rounded-xl border-2 border-indigo-100 text-indigo-600 font-semibold hover:bg-indigo-50 hover:border-indigo-200 transition-colors">Preview</a>
                    <a href="{{ route('homeorder') }}" target="_blank"
                        class="w-full py-2 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md shadow-emerald-500/20 transition-colors">Pesan
                        Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Template Emim -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
            data-aos="fade-up" data-aos-delay="50">
            <div class="overflow-hidden relative h-64">
                <img src="{{ asset('img/card5_Prima.webp') }}"
                    onerror="this.src='https://github.com/bakaroti/resource/blob/main/card4.png?raw=true'"
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                    alt="Emim Template">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>
            <div class="p-6 text-center">
                <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-1">Premium Template</p>
                <h3 class="text-xl font-bold text-slate-800 display-font mb-5">EMIM</h3>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('temp_emim') }}"
                        class="w-full py-2 px-4 rounded-xl border-2 border-indigo-100 text-indigo-600 font-semibold hover:bg-indigo-50 hover:border-indigo-200 transition-colors">Preview</a>
                    <a href="{{ route('homeorder') }}" target="_blank"
                        class="w-full py-2 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md shadow-emerald-500/20 transition-colors">Pesan
                        Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Template Prima -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
            data-aos="fade-up" data-aos-delay="100">
            <div class="overflow-hidden relative h-64">
                <img src="{{ asset('img/card5_Prima.webp') }}"
                    onerror="this.src='https://github.com/bakaroti/resource/blob/main/card5.png?raw=true'"
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                    alt="Prima Template">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>
            <div class="p-6 text-center">
                <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-1">Premium Template</p>
                <h3 class="text-xl font-bold text-slate-800 display-font mb-5">PRIMA</h3>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('temp_prima') }}"
                        class="w-full py-2 px-4 rounded-xl border-2 border-indigo-100 text-indigo-600 font-semibold hover:bg-indigo-50 hover:border-indigo-200 transition-colors">Preview</a>
                    <a href="{{ route('homeorder') }}" target="_blank"
                        class="w-full py-2 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md shadow-emerald-500/20 transition-colors">Pesan
                        Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Template Yonans -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
            data-aos="fade-up" data-aos-delay="150">
            <div class="overflow-hidden relative h-64">
                <img src="{{ asset('img/card6_yonans.webp') }}"
                    onerror="this.src='https://github.com/bakaroti/resource/blob/main/card6.png?raw=true'"
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                    alt="Yonans Template">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>
            <div class="p-6 text-center">
                <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-1">Premium Template</p>
                <h3 class="text-xl font-bold text-slate-800 display-font mb-5">YONANS</h3>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('temp_yonans') }}"
                        class="w-full py-2 px-4 rounded-xl border-2 border-indigo-100 text-indigo-600 font-semibold hover:bg-indigo-50 hover:border-indigo-200 transition-colors">Preview</a>
                    <a href="{{ route('homeorder') }}" target="_blank"
                        class="w-full py-2 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md shadow-emerald-500/20 transition-colors">Pesan
                        Sekarang</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection