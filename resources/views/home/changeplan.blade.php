@extends('layouts.app')

@section('content')
<!-- Page Content -->
<section class="">
    <div class="container py-5 mt-5">
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
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                        </ul>
                        </p>
                        <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank"
                            class="btn btn-dark w-100 fw-bolder" style="border-bottom-width: 2px">
                            Contact <i class="fa-brands fa-whatsapp fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection