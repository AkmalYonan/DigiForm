@extends('layouts.app')

@section('content')
<header class="masthead">
    <div class="container py-5 mt-5 h-100">
        <div class="row gap-2 justify-content-around align-items-center">
            <div class="col-12 col-md-5 text-center px-5">
                <!-- Tambahkan col-12 -->
                <div class="text-start">
                    <h2 class="fw-bolder fs-1 text-lead2">Web Digital Invitation Terbaik Saat ini</h2>
                    <ul class="fs-4 text-roboto">
                        <li>Akses Lebih Mudah dan Ringan</li>
                        <li>Unlimited Nama Tamu</li>
                        <li>Proses yang Instan!</li>
                        <li>Pelayanan yang Terbaik</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="container text-center">
                    <img src="{{ asset('img/index_phone.png') }}" class="img-fluid w-50" alt="" />
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<section class="custom-pad" id="isi">
    <div class="container mt-5">
        <div class="row justify-content-center" data-aos="fade-up">
            @if ($Pakets)
            @foreach ($Pakets as $paket)
            <div class="col-12 col-md-4" data-aos="fade-up">
                <div class="card mb-3 custom-card">
                    <div class="card-body">
                        <h5 class="card-title fs-1 text-lead2 fw-bolder" style="color: #B59410">
                            {{ $paket->nama }}</h5>
                        <p class="fs-4 text-roboto fw-bolder text-lead2 text-hargaPaket">{{ $paket->harga }}</p>
                        <p class="card-text">
                        <ul class="fw-light fitur-list">
                            @foreach ($paket->detailPaketFitur as $detailPaketFitur)
                            <li>{{ $detailPaketFitur->fitur->nama }}</li>
                            @endforeach
                        </ul>
                        </p>
                        @if(Auth::check())
                        <a href="{{ route('hometemplate') }}" class="btn btn-dark w-100 fw-bolder"
                            style="border-bottom-width: 2px">Lihat
                            Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-dark w-100 text-roboto"
                            style="border-bottom-width: 2px">Lihat
                            Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
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