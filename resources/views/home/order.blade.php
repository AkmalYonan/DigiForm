@extends('layouts.app')

@section('content')

<div class="container py-5 mx-5 h-1000">

    <div class="card shadow-lg mt-5">
        <div class="card-header">
            <p class="fs-5 fw-bold text-center">Form Order Pesanan</p>
        </div>
        <div class="card-body">
            <form action="/order-pesan" method="POST">
                @csrf
                <div class="row mx-5">
                    <div class="col-md-4 px-4">
                        <div class="container py-3 mt-4 shadow-lg rounded-3 bg-light px-3 border">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="lead">Status Paket :</p>
                                    @if(isset($namaPaket))
                                    <p class="fs-2 fw-bolder">{{ $namaPaket }}</p>
                                    @else
                                    <p>Anda belum memiliki paket. Silahkan Untuk Hubungi Admin</p>
                                    @endif
                                </div>
                                @if(isset($namaPaket))
                                <div class="ms-auto me-3">
                                    @if($namaPaket == 'Bronze' || $namaPaket == 1)
                                    <img src="img/bronze_logo.png" class="img img-responsive pb-2" width="60"
                                        alt="Bronze" title="Bronze">
                                    @elseif($namaPaket == 'Silver' || $namaPaket == 2)
                                    <img src="img/silver_logo.webp" class="img img-responsive pb-2" width="60"
                                        alt="Silver" title="Silver">
                                    @elseif($namaPaket == 'Gold' || $namaPaket == 3)
                                    <img src="img/gold_logo.png" class="img img-responsive pb-2" width="60" alt="Gold"
                                        title="Gold">
                                    @endif
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 px-4">
                        <div class="form-group py-2 mb-3 pt-3">
                            @if(isset($templates))
                            <label for="template_id">Pilih desain:</label>
                            <select name="template_id" id="template_id" class="form-control">
                                @foreach($templates as $template)
                                @if ($template)
                                <!-- Tambahkan pengecekan apakah $template ada atau tidak null -->
                                <option value="{{ $template->id }}">{{ $template->nama }}</option>
                                @endif
                                @endforeach
                            </select>
                            @endif
                        </div>

                        <div class="form-group py-2">
                            <label for="salam">Pilih Salam:</label>
                            <select name="salam" id="salam" class="form-control">
                                <option value="Selamat Pagi">Selamat Pagi</option>
                                <option value="Selamat Siang">Selamat Siang</option>
                                <option value="Selamat Sore">Selamat Sore</option>
                                <option value="Selamat Malam">Selamat Malam</option>
                                <!-- Tambahkan pilihan salam dari setiap agama di Indonesia di sini -->
                                <option value="Assalamu'alaikum">Assalamu'alaikum</option>
                                <option value="Om Swastiastu">Om Swastiastu</option>
                                <option value="Salam Kebajikan">Salam Kebajikan</option>
                                <option value="Salam Kristen">Salam Kristen</option>
                                <!-- Dan lain-lain sesuai dengan agama di Indonesia -->
                                <option value="The Wedding">The Wedding</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-5 pb-2 gap-5">
                    <div class="col-md-5 card py-3 px-3 shadow-lg">
                        <div class="form-group mb-3">
                            <label for="nama_mempelai_pria">Nama Mempelai Pria:</label>
                            <input type="text" class="form-control" id="nama_mempelai_pria" name="nama_mempelai_pria"
                                value="{{ old('nama_mempelai_pria') }}" required>
                        </div>
                        <div class=" form-group mb-3">
                            <label for="anak_ke_pria">Anak Ke:</label>
                            <input type="number" class="form-control" id="anak_ke_pria" name="anak_ke_pria"
                                value="{{ old('anak_ke_pria') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_ayah_pria">Nama Ayah:</label>
                            <input type="text" class="form-control" id="nama_ayah_pria" name="nama_ayah_pria"
                                value="{{ old('nama_ayah_pria') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_ibu_pria">Nama Ibu:</label>
                            <input type="text" class="form-control" id="nama_ibu_pria" name="nama_ibu_pria"
                                value="{{ old('nama_ibu_pria') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="username_ig_pria">Username Instagram:</label>
                            <input type="text" class="form-control" id="username_ig_pria" name="username_ig_pria"
                                value="{{ old('username_ig_pria') }}" required>
                        </div>
                    </div>

                    <div class="col-md-5 card py-3 px-3 shadow-lg">
                        <div class="form-group mb-3">
                            <label for="nama_mempelai_wanita">Nama Mempelai Wanita:</label>
                            <input type="text" class="form-control" id="nama_mempelai_wanita"
                                name="nama_mempelai_wanita" value="{{ old('nama_mempelai_wanita') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="anak_ke_wanita">Anak Ke:</label>
                            <input type="number" class="form-control" id="anak_ke_wanita" name="anak_ke_wanita"
                                value="{{ old('anak_ke_wanita') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_ayah_wanita">Nama Ayah:</label>
                            <input type="text" class="form-control" id="nama_ayah_wanita" name="nama_ayah_wanita"
                                value="{{ old('nama_ayah_wanita') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_ibu_wanita">Nama Ibu:</label>
                            <input type="text" class="form-control" id="nama_ibu_wanita" name="nama_ibu_wanita"
                                value="{{ old('nama_ibu_wanita') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="username_ig_wanita">Username Instagram:</label>
                            <input type="text" class="form-control" id="username_ig_wanita" name="username_ig_wanita"
                                value="{{ old('username_ig_pria') }}" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center py-5 gap-5">
                    <div class="col-md-5 card py-3 px-3 shadow-lg">
                        <div class="form-group mb-3">
                            <label for="lokasi_acara">Lokasi Acara:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lokasi_acara" name="lokasi_acara" required>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tgl_akad">Tanggal Akad:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_akad" name="tgl_akad" required>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tgl_resepsi">Tanggal Resepsi:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_resepsi" name="tgl_resepsi">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="jam_acara">Jam Acara:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jam_acara" name="jam_acara" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 card py-3 px-3 shadow-lg">
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="no_wa">Nomor WhatsApp:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_wa" name="no_wa" required>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama_panggilan">Nama Panggilan:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan"
                                    required>
                            </div>
                        </div>

                        @if(isset($fiturs))
                        <div class="form-group py-2">
                            <label>Select fiturs:</label>
                            @foreach($fiturs as $fitur)
                            <div class="form-check">
                                <input type="checkbox" name="selected_fiturs[]" value="{{ $fitur->id }}"
                                    class="form-check-input">
                                <label class="form-check-label">{{ $fitur->nama }}</label>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="container text-center">
                        <button type="submit" class="btn btn-primary w-25">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    body {
        background-image: url('/img/bgliq2.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>


@endsection