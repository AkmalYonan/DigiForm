{{-- @dd($pesan) --}}
@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <!-- <div class="card-body">

                    <h5 class="card-title">Detail Pesan</h5>
                    <ul>ID : {{ $pesan->id }}</ul>
                    <ul>Template : {{ $pesan->template->nama }}</ul>
                    <ul>Salam Pembuka : {{ $pesan->data->salam_pembuka }}</ul>
                    <ul> Data Mempelai Pria :
                        <li>{{ $pesan->mPria->nama_pria }}</li>
                        <li>{{ $pesan->mPria->anak_ke }}</li>
                        <li>{{ $pesan->mPria->nama_ayah }}</li>
                        <li>{{ $pesan->mPria->nama_ibu }}</li>
                        <li>{{ $pesan->mPria->username_ig }}</li>
                    </ul>
                    <ul> Data Mempelai Wanita :
                        <li>{{ $pesan->mWanita->nama_wanita }}</li>
                        <li>{{ $pesan->mWanita->anak_ke }}</li>
                        <li>{{ $pesan->mWanita->nama_ayah }}</li>
                        <li>{{ $pesan->mWanita->nama_ibu }}</li>
                        <li>{{ $pesan->mWanita->username_ig }}</li>
                    </ul>
                    <ul> Informasi Acara :
                        <li>{{ $pesan->data->lokasi_acara }}</li>
                        <li>{{ $pesan->data->tgl_akad }}</li>
                        <li>{{ $pesan->data->tgl_resepsi }}</li>
                        <li>{{ $pesan->data->jam_acara }}</li>
                    </ul>
                    <ul> Kontak :
                        <li>{{ $pesan->data->email }}</li>
                        <li>{{ $pesan->data->no_wa }}</li>
                        <li>{{ $pesan->data->nama_panggilan }}</li>
                    </ul>
                </div> -->
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
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                                            <td colspan="2">
                                                <a href="{{ route('admin-viewPesan')}}"
                                                    class="btn btn-primary btn-m w-100">Back</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection