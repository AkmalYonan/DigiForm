@extends('layouts.app')

@section('content')
<section class="pt-24 mt-10">
    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @if ($Pakets)
            @foreach ($Pakets as $paket)
            <div class="w-full" data-aos="fade-up">
                <div
                    class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition duration-300">

                    <h5 class="text-4xl font-extrabold text-[#B59410] leading-tight">
                        {{ $paket->nama }}
                        <br>
                        <span class="text-lg font-normal text-gray-800">
                            {{ $paket->harga }}
                        </span>
                    </h5>

                    <ul class="mt-6 space-y-2 text-gray-600 font-light list-disc list-inside">
                        @foreach ($paket->detailPaketFitur as $detailPaketFitur)
                        <li>{{ $detailPaketFitur->fitur->nama }}</li>
                        @endforeach
                    </ul>

                    @if(Auth::check())
                    <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank"
                        class="mt-6 inline-flex items-center justify-center w-full bg-black text-white font-bold py-3 rounded-lg hover:bg-gray-800 transition duration-300">
                        Hubungi Staff
                        <i class="fa-solid fa-right-to-bracket fa-lg pl-2"></i>
                    </a>
                    @else
                    <a href="{{ route('login') }}"
                        class="mt-6 inline-flex items-center justify-center w-full bg-black text-white font-medium py-3 rounded-lg hover:bg-gray-800 transition duration-300">
                        Hubungi Staff
                        <i class="fa-solid fa-right-to-bracket fa-lg pl-2"></i>
                    </a>
                    @endif

                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</section>
@endsection