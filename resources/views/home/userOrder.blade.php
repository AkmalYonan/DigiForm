{{-- @dd($pesan) --}}
@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fs-3 fw-bold text-center">Detail Pesan</h5>
                </div>
                <div class="card-body ">
                    <div class="container">
                        <table class="table ">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $pesan->id }}</td>
                                </tr>
                                <tr>
                                    <td>Template</td>
                                    <td>{{ $pesan->template->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Salam Pembuka</td>
                                    <td>{{ $pesan->data->salam_pembuka }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="row py-2 my-4">
                            <div class="col-md-6 col-6">
                                <h5>Data Mempelai Pria</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>{{ $pesan->mPria->nama_pria }}</td>
                                        </tr>
                                        <tr>
                                            <td>Anak Ke</td>
                                            <td>{{ $pesan->mPria->anak_ke }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ayah</td>
                                            <td>{{ $pesan->mPria->nama_ayah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ibu</td>
                                            <td>{{ $pesan->mPria->nama_ibu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Username IG</td>
                                            <td>{{ $pesan->mPria->username_ig }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 col-6">
                                <h5>Data Mempelai Wanita</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>{{ $pesan->mWanita->nama_wanita }}</td>
                                        </tr>
                                        <tr>
                                            <td>Anak Ke</td>
                                            <td>{{ $pesan->mWanita->anak_ke }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ayah</td>
                                            <td>{{ $pesan->mWanita->nama_ayah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ibu</td>
                                            <td>{{ $pesan->mWanita->nama_ibu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Username IG</td>
                                            <td>{{ $pesan->mWanita->username_ig }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-6">
                                <h5>Informasi Acara</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Lokasi Acara</td>
                                            <td>{{ $pesan->data->lokasi_acara }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Akad</td>
                                            <td>{{ $pesan->data->tgl_akad }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Resepsi</td>
                                            <td>{{ $pesan->data->tgl_resepsi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jam Acara</td>
                                            <td>{{ $pesan->data->jam_acara }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 col-6">
                                <h5>Fitur</h5>
                                <table class="table">
                                    <tbody>
                                        @foreach ($fiturs as $fitur)
                                        <tr>
                                            <td>{{ $fitur->fitur_name->nama }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5>Kontak</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $pesan->data->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. WhatsApp</td>
                                            <td>{{ $pesan->data->no_wa }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Panggilan</td>
                                            <td>{{ $pesan->data->nama_panggilan }}</td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <button onclick="location.href='{{ route('order-edit') }}'"
                                                    class="btn btn-success btn-m w-100" @if (Auth::check() &&
                                                    $pesan->status === '1')
                                                    disabled
                                                    @endif>Edited</button>
                                            </td>

                                            <td>
                                                <form action="{{ route('preview-order') }}" method="POST"
                                                    target="_blank">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $pesan->id }}">
                                                    <button id="preview" type="submit"
                                                        class="btn btn-warning btn-m w-100"
                                                        target="_blank">Preview</button>
                                                </form>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="container text-center py-3">
                                        <p class="text-lead2 fs-3">Result<br>
                                            <span class="fs-6">Hasil Undangan akan Bisa dilihat disini</span>
                                        </p>
                                        <div class="card-body">
                                            @if (Auth::check() && $pesan->status === '0')
                                            <form action="{{ route('confirm-order') }}" method="POST">
                                                @csrf
                                                <button id="preview" type="submit"
                                                    class="btn btn-primary btn-m w-75">Confirm!</button>
                                            </form>
                                            @elseif ($cooldownRemaining > 0)
                                            <form action="{{ route('confirm-order') }}" method="POST">
                                                @csrf
                                                <button id="preview" type="submit" class="btn btn-primary btn-m w-75"
                                                    disabled>Confirmed!<br><span>Hasil Jadi {{ $cooldownRemaining}}
                                                        Menit
                                                        Lagi</span></button>
                                            </form>
                                            @else
                                            <form action="{{ route('confirm-order') }}" method="POST">
                                                @csrf
                                                <button id="preview" type="submit"
                                                    class="btn btn-primary btn-m w-75">Cek Undangan!</button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection