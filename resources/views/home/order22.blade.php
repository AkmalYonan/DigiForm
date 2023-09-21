@extends('layouts.app')

@section('content')

<div class="container py-5 h-100" style="min-height: 100vh;">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-12">
            <div class="card shadow-lg mt-5">
                <div class="card-header">
                    <p class="fs-5 fw-bold text-center">Form Order Pesanan</p>
                </div>
                <div class="card-body">
                    <form action="/order-pesan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mx-2">
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
                                            <img src="img/gold_logo.png" class="img img-responsive pb-2" width="60"
                                                alt="Gold" title="Gold">
                                            @endif
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 px-4">
                                <div class="form-floating py-2 mb-3 pt-3">
                                    @if(isset($templates))
                                    <select name="template_id" id="template_id" class="form-control">
                                        @foreach($templates as $template)
                                        @if ($template)
                                        <!-- Tambahkan pengecekan apakah $template ada atau tidak null -->
                                        <option value="{{ $template->id }}">{{ $template->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <label for="template_id">Pilih desain:</label>
                                    @endif
                                </div>

                                <div class="form-floating py-2">
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
                                    <label for="salam">Pilih Salam:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center pt-5 pb-2 gap-5">
                            <div class="col-md-5 card py-3 px-3 shadow-lg">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama_mempelai_pria"
                                        name="nama_mempelai_pria" value="{{ old('nama_mempelai_pria') }}" required>
                                    <label for="nama_mempelai_pria">Nama Mempelai Pria:</label>
                                </div>
                                <div class=" form-floating mb-3">
                                    <input type="number" class="form-control" id="anak_ke_pria" name="anak_ke_pria"
                                        value="{{ old('anak_ke_pria') }}" required>
                                    <label for="anak_ke_pria">Anak Ke:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama_ayah_pria" name="nama_ayah_pria"
                                        value="{{ old('nama_ayah_pria') }}" required>
                                    <label for="nama_ayah_pria">Nama Ayah:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama_ibu_pria" name="nama_ibu_pria"
                                        value="{{ old('nama_ibu_pria') }}" required>
                                    <label for="nama_ibu_pria">Nama Ibu:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="username_ig_pria"
                                        name="username_ig_pria" value="{{ old('username_ig_pria') }}" required>
                                    <label for="username_ig_pria">Username Instagram:</label>
                                </div>
                                <div class=" mb-3">
                                    <label for="fotoPria" class="form-label">Foto Mempelai Pria</label>
                                    <input class="form-control" type="file" id="fotoPria" name="fotoPria">
                                </div>
                            </div>

                            <div class="col-md-5 card py-3 px-3 shadow-lg">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama_mempelai_wanita"
                                        name="nama_mempelai_wanita" value="{{ old('nama_mempelai_wanita') }}" required>
                                    <label for="nama_mempelai_wanita">Nama Mempelai Wanita:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="anak_ke_wanita" name="anak_ke_wanita"
                                        value="{{ old('anak_ke_wanita') }}" required>
                                    <label for="anak_ke_wanita">Anak Ke:</label>

                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama_ayah_wanita"
                                        name="nama_ayah_wanita" value="{{ old('nama_ayah_wanita') }}" required>
                                    <label for="nama_ayah_wanita">Nama Ayah:</label>

                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama_ibu_wanita" name="nama_ibu_wanita"
                                        value="{{ old('nama_ibu_wanita') }}" required>
                                    <label for="nama_ibu_wanita">Nama Ibu:</label>

                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="username_ig_wanita"
                                        name="username_ig_wanita" value="{{ old('username_ig_pria') }}" required>
                                    <label for="username_ig_wanita">Username Instagram:</label>
                                </div>
                                <div class=" mb-3">
                                    <label for="fotoWanita" class="form-label">Foto Mempelai Wanita</label>
                                    <input class="form-control" type="file" id="fotoWanita" name="fotoWanita">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center py-5 gap-5">
                            <div class="col-md-5 card py-3 px-3 shadow-lg">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="lokasi_acara" name="lokasi_acara"
                                        required>
                                    <label for="lokasi_acara">Lokasi Acara:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="tgl_akad" name="tgl_akad" required>
                                    <label for="tgl_akad">Tanggal Akad:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="tgl_resepsi" name="tgl_resepsi">
                                    <label for="tgl_resepsi">Tanggal Resepsi:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="jam_acara" name="jam_acara" required>
                                    <label for="jam_acara">Jam Acara:</label>
                                </div>
                                <div class=" mb-3">
                                    <label for="fotoCouple" class="form-label">Foto Couple ( 1 Frame )</label>
                                    <input class="form-control" type="file" id="fotoCouple" name="fotoCouple">
                                </div>
                                <div class=" mb-3">
                                    <label for="fotoThumbnail" class="form-label">Foto Thumbnail Undangan</label>
                                    <input class="form-control" type="file" id="fotoThumbnail" name="fotoThumbnail">
                                </div>
                                <div class=" mb-3">
                                    <label for="fotoBanner" class="form-label">Foto Banner</label>
                                    <input class="form-control" type="file" id="fotoBanner" name="fotoBanner">
                                </div>
                                <div class=" mb-3">
                                    <label for="fotoGallery" class="form-label">Foto Gallery ( Max 6 )</label>
                                    <input class="form-control" type="file" id="fotoGallery" name="fotoGallery[]"
                                        multiple>
                                </div>
                            </div>
                            <div class="col-md-5 card py-3 px-3 shadow-lg">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <label for="email">Email:</label>

                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="no_wa" name="no_wa" required>
                                    <label for="no_wa">Nomor WhatsApp:</label>

                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan"
                                        required>
                                    <label for="nama_panggilan">Nama Panggilan:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="iframeMaps" name="iframeMaps" required>
                                    <label for="iframeMaps">Link Maps:</label>
                                </div>
                                @if(isset($fiturs))
                                <div class="form-floating py-2">
                                    <p>Select fiturs:</p>
                                    @foreach($fiturs as $fitur)
                                    <div class="form-check">
                                        <input type="checkbox" name="selected_fiturs[]" value="{{ $fitur->id }}"
                                            class="form-check-input">
                                        <label class="form-check-label form-floating">{{ $fitur->nama }}</label>
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