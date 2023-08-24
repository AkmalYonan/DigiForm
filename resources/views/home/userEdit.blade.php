@extends('layouts.app')

@section('content')


<div class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="py-3 mt-4 shadow-lg rounded-3 bg-light border mt-5 ">
                    <div class="text-center">
                        <img class="img img-responsive rounded-circle my-3" width="130" src="img/profiles.jpg" />
                        <h4 class="text-roboto">{{ $namaUser->name }}</h4>
                        <p>{{ $namaUser->email }}</p>
                        <hr class="horizontal-dark">
                        <p class="text-roboto">Paket :</p>
                        @if(isset($namaPaket))
                        <div class="ms-auto">
                            @if($namaPaket == 'Bronze' || $namaPaket == 1)
                            <img src="img/bronze_logo.png" class="img img-responsive pb-2" width="60" alt="Bronze"
                                title="Bronze">
                            <p class="fs-2 fw-bolder text-lead2">{{ $namaPaket }}</p>
                            @elseif($namaPaket == 'Silver' || $namaPaket == 2)
                            <img src="img/silver_logo.webp" class="img img-responsive pb-2" width="60" alt="Silver"
                                title="Silver">
                            <p class="fs-2 fw-bolder text-lead2">{{ $namaPaket }}</p>
                            @elseif($namaPaket == 'Gold' || $namaPaket == 3)
                            <img src="img/gold_logo.png" class="img img-responsive pb-2" width="60" alt="Gold"
                                title="Gold">
                            <p class="fs-2 fw-bolder text-lead2">{{ $namaPaket }}</p>
                            @else
                            <p>Anda belum memiliki paket. Silahkan Untuk Hubungi Admin</p>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow-lg mt-5">
                    <p class="fs-3 pt-4 fw-bold text-center text-lead2">Form Order Pesanan</p>
                    <div class="card-body">
                        <form action="{{ route('order-update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center text-center">
                                <div class="col-md-11">
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

                            <div class="row justify-content-center pt-5 gap-5">
                                <div class="col-md-11">
                                    <p class="text-lead2 fs-4 fw-bolder">Data Pria</p>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_mempelai_pria"
                                            name="nama_mempelai_pria" value="{{ $pesan->mPria->nama_pria }}" required>
                                        <label for="nama_mempelai_pria">Nama Pangilan Mempelai Pria:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_mempelai_pria_lengkap"
                                            name="nama_mempelai_pria_lengkap"
                                            value="{{ $pesan->mPria->nama_pria_lengkap }}" required>
                                        <label for="nama_mempelai_pria_lengkap">Nama Lengkap Mempelai Pria:</label>
                                    </div>
                                    <div class=" form-floating mb-3">
                                        <input type="number" class="form-control" id="anak_ke_pria" name="anak_ke_pria"
                                            value="{{ $pesan->mPria->anak_ke }}" required>
                                        <label for="anak_ke_pria">Anak Ke:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_ayah_pria"
                                            name="nama_ayah_pria" value="{{ $pesan->mPria->nama_ayah }}" required>
                                        <label for="nama_ayah_pria">Nama Ayah:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_ibu_pria" name="nama_ibu_pria"
                                            value="{{ $pesan->mPria->nama_ayah }}" required>
                                        <label for="nama_ibu_pria">Nama Ibu:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="username_ig_pria"
                                            name="username_ig_pria" value="{{ $pesan->mPria->username_ig }}" required>
                                        <label for="username_ig_pria">Username Instagram:</label>
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <p class="text-lead2 fs-4 fw-bolder">Data Wanita</p>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_mempelai_wanita"
                                            name="nama_mempelai_wanita" value="{{ $pesan->mWanita->nama_wanita }}"
                                            required>
                                        <label for="nama_mempelai_wanita">Nama Panggilan Mempelai Wanita:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_mempelai_wanita_lengkap"
                                            name="nama_mempelai_wanita_lengkap"
                                            value="{{ $pesan->mWanita->nama_wanita_lengkap }}" required>
                                        <label for="nama_mempelai_wanita_lengkap">Nama Lengkap Mempelai Wanita:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="anak_ke_wanita"
                                            name="anak_ke_wanita" value="{{ $pesan->mWanita->anak_ke }}" required>
                                        <label for="anak_ke_wanita">Anak Ke:</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_ayah_wanita"
                                            name="nama_ayah_wanita" value="{{ $pesan->mWanita->nama_ayah }}" required>
                                        <label for="nama_ayah_wanita">Nama Ayah:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_ibu_wanita"
                                            name="nama_ibu_wanita" value="{{ $pesan->mWanita->nama_ibu }}" required>
                                        <label for="nama_ibu_wanita">Nama Ibu:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="username_ig_wanita"
                                            name="username_ig_wanita" value="{{ $pesan->mWanita->username_ig }}"
                                            required>
                                        <label for="username_ig_wanita">Username Instagram:</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center pt-5 gap-5">
                                <div class="col-md-11">
                                    <p class="text-lead2 fs-4 fw-bolder">Data Pernikahan</p>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lokasi_akad" name="lokasi_akad"
                                            value="{{ $pesan->data->lokasi_akad }}" required>
                                        <label for="lokasi_akad">Lokasi Akad:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lokasi_resepsi"
                                            name="lokasi_resepsi" value="{{ $pesan->data->lokasi_resepsi }}" required>
                                        <label for="lokasi_akad">Lokasi Resepsi:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="tgl_akad" name="tgl_akad"
                                            value="{{ $pesan->data->tgl_akad }}" required>
                                        <label for="tgl_akad">Tanggal Akad:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="tgl_resepsi" name="tgl_resepsi"
                                            value="{{ $pesan->data->tgl_resepsi }}" required>
                                        <label for="tgl_resepsi">Tanggal Resepsi:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="jam_akad" name="jam_akad"
                                            value="{{ $pesan->data->jam_akad }}" required>
                                        <label for="jam_akad">Jam Akad:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="jam_resepsi" name="jam_resepsi"
                                            value="{{ $pesan->data->jam_resepsi }}" required>
                                        <label for="jam_resepsi">Jam Resepsi:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="iframeMaps_akad"
                                            value="{{ $pesan->data->iframeMaps_akad }}" name="iframeMaps_akad" required>
                                        <label for="iframeMaps_akad">Link Maps akad:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="iframeMaps_resepsi"
                                            value="{{ $pesan->data->iframeMaps_resepsi }}" name="iframeMaps_resepsi"
                                            required>
                                        <label for="iframeMaps_resepsi">Link Maps resepsi</label>
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <p class="text-lead2 fs-4 fw-bolder">Kontak</p>
                                    <div class="form-floating mb-3  ">
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ $pesan->data->email }}" required>
                                        <label for="email">Email:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="no_wa" name="no_wa"
                                            value="{{ $pesan->data->no_wa }}" required>
                                        <label for="no_wa">Nomor WhatsApp:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_panggilan"
                                            name="nama_panggilan" value="{{ $pesan->data->nama_panggilan }}" required>
                                        <label for="nama_panggilan">Nama Panggilan:</label>
                                    </div>
                                    {{-- <div class="pt-5">
                                        <div class="mb-3">
                                            <label for="fotoPria">Foto Mempelai Pria</label>
                                            <input class="form-control" type="file" id="fotoPria" name="fotoPria">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="fotoWanita">Foto Mempelai Wanita</label>
                                            <input class="form-control" type="file" id="fotoWanita" name="fotoWanita">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="fotoCouple">Foto Couple ( 1 Frame )</label>
                                            <input class="form-control" type="file" id="fotoCouple" name="fotoCouple">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="fotoThumbnail">Foto Thumbnail Undangan</label>
                                            <input class="form-control" type="file" id="fotoThumbnail"
                                                name="fotoThumbnail">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="fotoBanner">Foto Banner</label>
                                            <input class="form-control" type="file" id="fotoBanner" name="fotoBanner">
                                        </div>
                                        <div class="mb-3">
                                            <label for="fotoGallery">Foto Gallery ( Max 6 )</label>
                                            <input class="form-control" type="file" id="fotoGallery"
                                                name="fotoGallery[]" multiple>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="row justify-content-center pt-5 gap-5">
                                <div class="col-md-11">
                                    @if(isset($fiturs))
                                    <div class="form-group py-2">
                                        <label>Select fiturs:</label>
                                        @foreach($fiturs as $fitur)

                                        @if($loop->iteration < 7) <div class="form-check">
                                            <input type="checkbox" name="selected_fiturs[]" value="{{ $fitur->id }}"
                                                class="form-check-input" checked disabled>
                                            <input type="hidden" name="selected_fiturs[]" value="{{ $fitur->id }}"
                                                class="form-check-input">
                                            <label class="form-check-label">{{ $fitur->nama }}</label>
                                    </div>
                                    @else
                                    <?php $isChecked = $fitur_pilih->contains('id_fitur', $fitur->id) || $fitur->id <= 7; ?>
                                    <div class="form-check">
                                        <input type="checkbox" name="selected_fiturs[]" value="{{ $fitur->id }}"
                                            class="form-check-input" {{ $isChecked ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $fitur->nama }}</label>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="container text-center pt-4">
                                <button type="button" class="btn btn-sm btn-danger w-50 mt-2 mb-1"
                                    onclick="location.href='{{ route('homeorder') }}'">BACK</button>
                                <button type="submit" class="btn btn-primary btn-block w-50">Submit</button>
                            </div>
                        </form>
                    </div>
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