{{-- @dd($datas) --}}
@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fs-3 fw-bold text-center">Detail Pesan</h5>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col">ID PESANAN</th>
                                    <th scope="col">SALAM PEMBUKA</th>
                                    <th scope="col">LOKASI ACARA</th>
                                    <th scope="col">TANGGAL AKAD</th>
                                    <th scope="col">TANGGAL RESEPSI</th>
                                    <th scope="col">JAM ACARA</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">NO WA</th>
                                    <th scope="col">NAMA PANGGILAN</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->id_pesan }}</td>
                                    <td>{{ $data->salam_pembuka }}</td>
                                    <td>{{ $data->lokasi_acara }}</td>
                                    <td>{{ $data->tgl_akad }}</td>
                                    <td>{{ $data->tgl_resepsi }}</td>
                                    <td>{{ $data->jam_acara }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->no_wa }}</td>
                                    <td>{{ $data->nama_panggilan }}</td>
                                    <td><a href="{{ route('admin-viewPesan') }}/{{ $data->id_pesan }}"
                                            class="btn btn-link">Details</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection