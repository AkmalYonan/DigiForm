@extends('layouts.app')

@section('content')
<header class="masthead">
    <div class="container py-5 mt-5 h-100">
        <div class="row gap-2 justify-content-around align-items-center">
            <div class="col-12 col-md-5 w-50">
                <div class="text-start">
                    <h2 class="fw-bolder fs-1">Web Digital Invitation Terbaik Saat ini</h2>
                    <ul class="fs-4">
                        <li>Akses Lebih Mudah dan Ringan</li>
                        <li>Unlimited Nama Tamu</li>
                        <li>Proses yang Instan!</li>
                        <li>Pelayanan yang Terbaik</li>
                    </ul>
                    <a href="{{ route('homeorder') }}" class="btn btn-dark btn-lg fw-bolder"
                        style="border-bottom-width: 2px">Pesan
                        Sekarang</a>
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
<section class="" id="isi">
    <div class="container py-5">
        <div class="row justify-content-center">
            @foreach ($Pakets as $paket)
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title fs-2">
                            {{ $paket->nama }} <br /><span class="fs-6 fw-light">{{ $paket->harga }}</span>
                        </h5>
                        <p class="card-text">
                        <ul class="fw-light">
                            @foreach ( $Fiturs as $fitur)
                            <li>{{ $fitur->nama}}</li>
                            @endforeach
                        </ul>
                        </p>
                        @if(Auth::check())
                        <a href="{{ route('hometemplate') }}" class="btn btn-dark w-100 fw-bolder"
                            style="border-bottom-width: 2px">Lihat
                            Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-dark w-100 fw-bolder"
                            style="border-bottom-width: 2px">Lihat Templates <i
                                class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection