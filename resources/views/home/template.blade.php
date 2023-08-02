@extends('layouts.app')

@section('content')
<div class="py-5">
    <div class="shadow bg-custom container rounded rounded-3 mb-5 mt-5">
        <div class="container w-75 py-5">
            <div class="text-center text-white">
                <p class="lead">Template Undangan</p>
                <p class="display-5">Template Undangan Online</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque corporis quos iure qui possimus
                    magni, quia temporibus, vitae assumenda modi odit neque. Deleniti sapiente nam, facere sequi
                    recusandae ipsam modi!</p>
            </div>
        </div>
    </div>
    <div class="container w-75">
        <div class="row justify-content-center gap-3 py-3">
            <div class="col border bg-warna1 rounded-4">
                <div class="container border pt-3">
                    <div class="gambar">
                        <img src="{{ asset('img/bakaroti.github.io_nikahlagi_(iPhone 12 pro) (1).png') }}"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">AMARA</p>
                        <div class="gap-3 mb-3">
                            <a href="{{ route('temp_amara') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border bg-warna1 rounded-4">
                <div class="container border pt-3">
                    <div class="gambar">
                        <img src="{{ asset('img/bakaroti.github.io_nikahlagi_(iPhone 12 pro) (2).png') }}"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">AMARTHA</p>
                        <div class="gap-3">
                            <a href="{{ route('temp_amartha') }}"
                                class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border bg-warna1 rounded-4">
                <div class="container border pt-3">
                    <div class="gambar">
                        <img src="{{ asset('img/bakaroti.github.io_nikahlagi_(iPhone 12 pro) (3).png') }}"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">ARTA</p>
                        <div class="gap-3">
                            <a href="{{ route('temp_arta') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border bg-warna1 rounded-4">
                <div class="container border pt-3">
                    <div class="gambar">
                        <img src="{{ asset('img/bakaroti.github.io_nikahlagi_(iPhone 12 pro) (4).png') }}"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">DAWA</p>
                        <div class="gap-3">
                            <a href="{{ route('temp_dawa') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center gap-3 py-3">
            <div class="col border bg-warna1 rounded-4">
                <div class="container border pt-3">
                    <div class="gambar">
                        <img src="{{ asset('img/bakaroti.github.io_nikahlagi_(iPhone 12 pro) (5).png') }}"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">PRIMA</p>
                        <div class="gap-3 mb-3">
                            <a href="{{ route('temp_prima') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border bg-warna1 rounded-4">
                <div class="container border pt-3">
                    <div class="gambar">
                        <img src="{{ asset('img/bakaroti.github.io_nikahlagi_(iPhone 12 pro) (6).png') }}"
                            class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="teks mt-3 text-center">
                        <p>Template Undangan</p>
                        <p class="lead">YONANS</p>
                        <div class="gap-3">
                            <a href="{{ route('temp_yonans') }}" class="my-2 btn btn-sm btn-outline-primary">Preview</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection