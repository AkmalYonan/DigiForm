@extends('layouts.app')

@section('content')

<div class="py-5 px-3">
    <div class="shadow bg-custom container rounded rounded-3 mb-5 mt-5">
        <div class="container w-75 py-5">
            <div class="text-center text-white">
                <p class="lead">Template Undangan</p>
                <p class="display-5">Template Undangan Online</p>
                <p>Temukan berbagai pilihan template undangan online menarik untuk momen spesial Anda. Ciptakan undangan
                    sempurna dengan desain yang mudah disesuaikan sesuai keinginan Anda. Jadikan momen istimewa lebih
                    berkesan dengan undangan online dari kami!</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center g-5">
            <div class="col-md-3">
                <div class="card card-sm h-100 shadow img-hover">
                    <div class="gambar">
                        <img src="https://github.com/bakaroti/resource/blob/main/card1.png?raw=true"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">AMARA</p>
                        <div class="gap-3 mb-3">
                            <a href="{{ route('temp_amara') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="{{ route('homeorder') }}" target="_blank"
                                class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-sm h-100 shadow img-hover">
                    <div class="gambar">
                        <img src="https://github.com/bakaroti/resource/blob/main/card2.png?raw=true"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">AMARTHA</p>
                        <div class="gap-3">
                            <a href="{{ route('temp_amartha') }}"
                                class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="{{ route('homeorder') }}" target="_blank"
                                class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-sm h-100 shadow img-hover">
                    <div class="gambar">
                        <img src="https://github.com/bakaroti/resource/blob/main/card3.png?raw=true"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">ARTA</p>
                        <div class="gap-3">
                            <a href="{{ route('temp_arta') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="{{ route('homeorder') }}" target="_blank"
                                class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-sm h-100 shadow img-hover">
                    <div class="gambar">
                        <img src="https://github.com/bakaroti/resource/blob/main/card4.png?raw=true"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">DAWA</p>
                        <div class="gap-3">
                            <a href="{{ route('temp_dawa') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="{{ route('homeorder') }}" target="_blank"
                                class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-sm h-100 shadow img-hover">
                    <div class="gambar">
                        <img src="https://github.com/bakaroti/resource/blob/main/card4.png?raw=true"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">Emim</p>
                        <div class="gap-3">
                            <a href="{{ route('temp_emim') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="{{ route('homeorder') }}" target="_blank"
                                class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-sm h-100 shadow img-hover">
                    <div class="gambar">
                        <img src="https://github.com/bakaroti/resource/blob/main/card5.png?raw=true"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">PRIMA</p>
                        <div class="gap-3 mb-3">
                            <a href="{{ route('temp_prima') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="{{ route('homeorder') }}" target="_blank"
                                class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-sm h-100 shadow img-hover">
                    <div class="gambar">
                        <img src="https://github.com/bakaroti/resource/blob/main/card6.png?raw=true"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">YONANS</p>
                        <div class="gap-3">
                            <a href="{{ route('temp_yonans') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="{{ route('homeorder') }}" target="_blank"
                                class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .img-hover {
        transition: transform 0.3s ease, opacity 0.3s ease;
        /* Define the transition properties for transform and opacity */
    }

    .img-hover:hover {
        transform: scale(0.95);
        /* Apply the transformation (in this case, scale the image to 95% of its original size) */
        opacity: 0.8;
        /* Reduce the opacity to 80% on hover */
    }

    /* Add a transition for the button opacity as well */
    .btn-gap {
        transition: opacity 0.3s ease;
    }

    .card:hover .btn-gap {
        opacity: 1;
    }
</style>
@endsection