@extends('layouts.app')

@section('content')
<!-- Page Content -->
<section class="mt-5 pt-5">
    <div class="container py-5 mt-5">
        <div class="row justify-content-center">
            @if ($Pakets)
            @foreach ($Pakets as $paket)
            <div class="col-12 col-md-4" data-aos="fade-up">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title fs-1 text-lead2 fw-bolder" style="color: #B59410">
                            {{ $paket->nama }} <br /><span class="fs-4 text-roboto text-dark">{{ $paket->harga }}</span>
                        </h5>
                        <p class="card-text">
                        <ul class="fw-light fitur-list">
                            @foreach ($paket->detailPaketFitur as $detailPaketFitur)
                            <li>{{ $detailPaketFitur->fitur->nama }}</li>
                            @endforeach
                        </ul>
                        </p>
                        @if(Auth::check())
                        <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank"
                            class="btn btn-dark w-100 fw-bolder" style="border-bottom-width: 2px">Hubungi Staff<i
                                class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-dark w-100 text-roboto"
                            style="border-bottom-width: 2px">Hubungi Staff<i
                                class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection