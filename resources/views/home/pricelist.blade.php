@extends('layouts.app')

@section('content')
<!-- Header/Banner Section -->
<header class="relative bg-slate-50 pt-32 pb-20 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-indigo-100/50 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-rose-100/50 blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-right">
                <div
                    class="inline-block px-4 py-1.5 rounded-full bg-indigo-100 text-indigo-700 font-semibold text-sm mb-6 border border-indigo-200 shadow-sm">
                    ✨ Harga Spesial Bulan Ini
                </div>
                <h2
                    class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight display-font mb-6">
                    Web Digital Invitation <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-rose-500">Terbaik Saat
                        ini</span>
                </h2>

                <ul class="space-y-4 text-lg text-slate-600 mb-8 font-medium">
                    <li class="flex items-center justify-center md:justify-start">
                        <i class="fa-solid fa-check-circle text-emerald-500 mr-3 text-xl"></i> Akses Lebih Mudah dan
                        Ringan
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <i class="fa-solid fa-check-circle text-emerald-500 mr-3 text-xl"></i> Unlimited Nama Tamu
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <i class="fa-solid fa-check-circle text-emerald-500 mr-3 text-xl"></i> Proses yang Instan!
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <i class="fa-solid fa-check-circle text-emerald-500 mr-3 text-xl"></i> Pelayanan yang Terbaik
                    </li>
                </ul>
            </div>

            <div class="w-full md:w-1/2 flex justify-center" data-aos="fade-left">
                <div class="relative w-4/5 max-w-sm">
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-indigo-500 to-rose-500 rounded-[2.5rem] transform rotate-3 scale-105 opacity-20 blur-lg">
                    </div>
                    <img src="{{ asset('img/index_phone.png') }}"
                        class="relative w-full h-auto drop-shadow-2xl z-10 animate-float" alt="App Preview" />
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Pricing Packages Section -->
<section class="py-20 bg-white" id="isi">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-extrabold text-slate-900 display-font mb-4">Pilih Paket Sesuai Kebutuhan</h2>
            <p class="text-lg text-slate-500">Kami menawarkan berbagai pilihan paket dengan fitur lengkap untuk undangan
                digital Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @if ($Pakets)
            @foreach ($Pakets as $paket)
            <div class="relative bg-white rounded-3xl p-8 shadow-xl shadow-slate-200/50 border border-slate-100 flex flex-col h-full transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-indigo-100 group"
                data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">

                @if($loop->iteration == 2 || $paket->nama == 'Silver')
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span
                        class="bg-gradient-to-r from-rose-500 to-pink-500 text-white text-xs font-bold uppercase tracking-widest py-1.5 px-4 rounded-full shadow-md">Terpopuler</span>
                </div>
                @endif

                <div class="text-center mb-8 pt-4">
                    <h5
                        class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-amber-500 to-amber-600 display-font mb-2">
                        {{ $paket->nama }}</h5>
                    <div class="flex items-center justify-center items-baseline mb-4">
                        <span class="text-4xl font-extrabold text-slate-900">{{ $paket->harga }}</span>
                    </div>
                </div>

                <div class="flex-grow">
                    <ul class="space-y-4 mb-8">
                        @foreach ($paket->detailPaketFitur as $detailPaketFitur)
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-emerald-500 mt-1 mr-3 shrink-0"></i>
                            <span class="text-slate-600 font-medium">{{ $detailPaketFitur->fitur->nama }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="mt-auto pt-6 border-t border-slate-100">
                    @if(Auth::check())
                    <a href="https://wa.me/{{ $whatsappNumber ?? '628123456789' }}" target="_blank"
                        class="w-full flex items-center justify-center py-3.5 px-4 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800 transition-colors shadow-md">
                        Hubungi Staff <i
                            class="fa-solid fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                    </a>
                    @else
                    <a href="{{ route('login') }}"
                        class="w-full flex items-center justify-center py-3.5 px-4 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800 transition-colors shadow-md">
                        Hubungi Staff <i
                            class="fa-solid fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
            @else
            <div class="col-span-full text-center py-10">
                <p class="text-slate-500">Belum ada paket yang tersedia saat ini.</p>
            </div>
            @endif
        </div>
    </div>
</section>

<style>
    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
</style>
@endsection