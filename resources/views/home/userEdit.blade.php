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
                                            <option value="{{ $template->id }}" {{ $template->id ==
                                                $pesan->id_template ?
                                                'selected' : '' }}>{{ $template->nama }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        <label for="template_id">Pilih desain:</label>
                                        @endif
                                    </div>

                                    <div class="form-floating py-2">
                                        <select name="salam" id="salam" class="form-control">
                                            <option value="Selamat Pagi"
                                                Alt="Salam Pembuka untuk undangan hari pernikahan pengantin sekali seumur hidup"
                                                {{ $pesan->data->salam_pembuka == 'Selamat
                                                Pagi' ? 'selected' : '' }}>Selamat Pagi</option>
                                            <option value="Selamat Siang"
                                                Alt="Salam Pembuka untuk undangan hari pernikahan pengantin sekali seumur hidup"
                                                {{ $pesan->data->salam_pembuka == 'Selamat Siang' ? 'selected' : ''
                                                }}>Selamat Siang</option>
                                            <option value="Selamat Sore"
                                                Alt="Salam Pembuka untuk undangan hari pernikahan pengantin sekali seumur hidup"
                                                {{ $pesan->data->salam_pembuka == 'Selamat
                                                Sore' ? 'selected' : '' }}>Selamat Sore</option>
                                            <option value="Selamat Malam"
                                                Alt="Salam Pembuka untuk undangan hari pernikahan pengantin sekali seumur hidup"
                                                {{ $pesan->data->salam_pembuka == 'Selamat
                                                Malam' ? 'selected' : '' }}>Selamat Malam</option>
                                            <!-- Tambahkan pilihan salam dari setiap agama di Indonesia di sini -->
                                            <option value="Assalamu`alaikum"
                                                Alt="Salam Pembuka untuk undangan hari pernikahan pengantin sekali seumur hidup"
                                                @if ($pesan->data->salam_pembuka =='Assalamu`alaikum')
                                                selected @endif>Assalamu'alaikum</option>
                                            <option value="Om Swastiastu"
                                                Alt="Salam Pembuka untuk undangan hari pernikahan pengantin sekali seumur hidup"
                                                @if ($pesan->data->salam_pembuka == 'Om Swastiastu') selected
                                                @endif>Om Swastiastu</option>
                                            <option value="Salam Kebajikan"
                                                Alt="Salam Pembuka untuk undangan hari pernikahan pengantin sekali seumur hidup"
                                                @if ($pesan->data->salam_pembuka == 'Salam Kebajikan')
                                                selected @endif>Salam Kebajikan</option>
                                            <option value="Salam Kristen"
                                                Alt="Salam Pembuka untuk undangan hari pernikahan pengantin sekali seumur hidup"
                                                @if ($pesan->data->salam_pembuka == 'Salam Kristen') selected
                                                @endif>Salam Kristen</option>
                                            <!-- Dan lain-lain sesuai dengan agama di Indonesia -->
                                            <option value="The Wedding"
                                                Alt="Salam Pembuka untuk undangan hari pernikahan pengantin sekali seumur hidup"
                                                @if ($pesan->data->salam_pembuka == 'The Wedding') selected
                                                @endif>The Wedding</option>
                                        </select>
                                        <label for="salam">Pilih Salam:</label>

                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center pt-5 gap-5">
                                <div class="col-md-11">
                                    <div class="d-flex align-items-center">
                                        <p class="text-lead2 fs-4 fw-bolder mt-3">Data Pria</p>
                                        <div class="icon-tanya ms-2" data-bs-toggle="tooltip"
                                            title="Isilah data dibawah untuk Data Pria!"></div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_mempelai_pria"
                                            name="nama_mempelai_pria" value="{{ $pesan->mPria->nama_pria }}" required>
                                        <label for="nama_mempelai_pria">Nama Mempelai Pria:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_mempelai_pria_lengkap"
                                            name="nama_mempelai_pria_lengkap"
                                            value="{{ $pesan->mPria->nama_pria_lengkap }}" required>
                                        <label for="nama_mempelai_wanita">Nama Mempelai Pria Lengkap:</label>
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
                                    <div class="d-flex align-items-center">
                                        <p class="text-lead2 fs-4 fw-bolder mt-3">Data Wanita</p>
                                        <div class="icon-tanya ms-2" data-bs-toggle="tooltip"
                                            title="Isilah data dibawah untuk Data Wanita!"></div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_mempelai_wanita"
                                            name="nama_mempelai_wanita" value="{{ $pesan->mWanita->nama_wanita }}"
                                            required>
                                        <label for="nama_mempelai_wanita">Nama Mempelai Wanita:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_mempelai_wanita_lengkap"
                                            name="nama_mempelai_wanita_lengkap"
                                            value="{{ $pesan->mWanita->nama_wanita_lengkap }}" required>
                                        <label for="nama_mempelai_wanita">Nama Mempelai Wanita Lengkap:</label>
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
                                    <div class="d-flex align-items-center">
                                        <p class="text-lead2 fs-4 fw-bolder mt-3">Data Pernikahan</p>
                                        <div class="icon-tanya ms-2" data-bs-toggle="tooltip"
                                            title="Isilah data dibawah untuk Data Pernikahan!"></div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lokasi_akad" name="lokasi_akad"
                                            value="{{ $pesan->data->lokasi_akad }}" required>
                                        <label for="lokasi_akad">Lokasi Akad:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lokasi_resepsi"
                                            name="lokasi_resepsi" value="{{ $pesan->data->lokasi_resepsi }}" required>
                                        <label for="lokasi_resepsi">Lokasi Resepsi:</label>
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
                                        <label for="jam_akad">Jam Acara Akad:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="jam_resepsi" name="jam_resepsi"
                                            value="{{ $pesan->data->jam_resepsi }}" required>
                                        <label for="jam_resepsi">Jam Acara Resepsi:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="iframeMaps_akad"
                                            name="iframeMaps_akad" value="{{ $pesan->data->link_akad}}" required>
                                        <label for="iframeMaps_akad">Link Maps akad:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="iframeMaps_resepsi"
                                            name="iframeMaps_resepsi" value="{{ $pesan->data->link_resepsi}}" required>
                                        <label for="iframeMaps_resepsi">Link Maps resepsi</label>
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <div class="d-flex align-items-center">
                                        <p class="text-lead2 fs-4 fw-bolder mt-3">Data Kontak</p>
                                        <div class="icon-tanya ms-2" data-bs-toggle="tooltip"
                                            title="Isilah data dibawah untuk Data Kontak!"></div>
                                    </div>
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
                                    <!-- <div class="pt-5">
                                        <div class="d-flex align-items-center">
                                            <p class="text-lead2 fs-4 fw-bolder mt-3">All Photo</p>
                                            <div class="icon-tanya ms-2" data-bs-toggle="tooltip"
                                                title="Isi Foto dibawah ini untuk undangan"></div>
                                            <span class="text-roboto fw-bolder text-danger ms-3">Maintance
                                                Now</span>
                                        </div>
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
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center g-0">
                                <div class="col-md-4 col-12 mb-4">
                                    <div class="container">
                                        <p class="text-lead2 fs-5 fw-bolder mt-3 text-center">Foto Thumbnail</p>
                                        <img src="{{ url('storage/'. $pesan->data->imgThumbnail) }}" alt="Image 1"
                                            class="lightbox-trigger img-fluid animate-dark">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="container">
                                        <p class="text-lead2 fs-5 fw-bolder mt-3 text-center">Foto Banner</p>
                                        <img src="{{ url('storage/'. $pesan->data->imgBanner) }}" alt="Image 2"
                                            class="lightbox-trigger img-fluid animate-dark">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="container">
                                        <p class="text-lead2 fs-5 fw-bolder mt-3 text-center">Foto Couple</p>
                                        <img src="{{ url('storage/'. $pesan->data->imgCouple) }}" alt="Image 3"
                                            class="lightbox-trigger img-fluid animate-dark">
                                    </div>
                                </div>
                                <div class="row justify-content-center g-0">
                                    <div class="col-md-6 col-12 text-center">
                                        <p class="text-lead2 fs-5 fw-bolder mt-3">Foto Pria</p>
                                        <div class="container">
                                            <img src="{{ url('storage/'. $pesan->mPria->image) }}" alt="Image 1"
                                                class="lightbox-trigger img-fluid animate-dark" style="width:350px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 text-center">
                                        <p class="text-lead2 fs-5 fw-bolder mt-3">Foto Wanita</p>
                                        <div class="container">
                                            <img src="{{ url('storage/'. $pesan->mWanita->image) }}" alt="Image 1"
                                                class="lightbox-trigger img-fluid animate-dark" style="width:350px;">
                                        </div>
                                    </div>

                                    <p class="text-lead2 fs-5 fw-bolder mt-4 text-center">Gallery</p>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex">
                                            <div class="image-container">
                                                <img src="https://s3-cdn.cmlabs.co/page/2023/01/24/panduan-dan-cara-mengatasi-error-404-dengan-efektif-205111.png"
                                                    alt="Image 1" class="lightbox-trigger">
                                            </div>

                                            <div class="image-container">
                                                <img src="https://s3-cdn.cmlabs.co/page/2023/01/24/panduan-dan-cara-mengatasi-error-404-dengan-efektif-205111.png"
                                                    alt="Image 2" class="lightbox-trigger">
                                            </div>

                                            <div class="image-container">
                                                <img src="https://s3-cdn.cmlabs.co/page/2023/01/24/panduan-dan-cara-mengatasi-error-404-dengan-efektif-205111.png"
                                                    alt="Image 3" class="lightbox-trigger">
                                            </div>

                                            <div class="lightbox" id="lightbox">
                                                <span class="close-button" id="close-button">&times;</span>
                                                <img src="" alt="Fullscreen Image" class="lightbox-content">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex">
                                            <div class="image-container">
                                                <img src="https://s3-cdn.cmlabs.co/page/2023/01/24/panduan-dan-cara-mengatasi-error-404-dengan-efektif-205111.png"
                                                    alt="Image 3" class="lightbox-trigger">
                                            </div>

                                            <div class="image-container">
                                                <img src="https://s3-cdn.cmlabs.co/page/2023/01/24/panduan-dan-cara-mengatasi-error-404-dengan-efektif-205111.png"
                                                    alt="Image 3" class="lightbox-trigger">
                                            </div>
                                            <div class="image-container">
                                                <img src="https://s3-cdn.cmlabs.co/page/2023/01/24/panduan-dan-cara-mengatasi-error-404-dengan-efektif-205111.png"
                                                    alt="Image 3" class="lightbox-trigger">
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="row justify-content-center g-0">
                                <div class="col-md-4 col-12 mb-4">
                                    <div class="container">
                                        <p class="text-lead2 fs-5 fw-bolder mt-3 text-center">gambar 1</p>
                                        <img src="https://github.com/bakaroti/resource/blob/main/temp1.jpg?raw=true"
                                            alt="Image 1" class="lightbox-trigger img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="container">
                                        <p class="text-lead2 fs-5 fw-bolder mt-3 text-center">gambar 2</p>
                                        <img src="https://github.com/bakaroti/resource/blob/main/temp2.jpg?raw=true"
                                            alt="Image 2" class="lightbox-trigger img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="container">
                                        <p class="text-lead2 fs-5 fw-bolder mt-3 text-center">gambar 3</p>
                                        <img src="https://github.com/bakaroti/resource/blob/main/temp3.jpg?raw=true"
                                            alt="Image 3" class="lightbox-trigger img-fluid">
                                    </div>
                                </div>
                                <div class="row justify-content-center g-0">
                                    <div class="col-md-12 col-12 text-center">
                                        <p class="text-lead2 fs-5 fw-bolder mt-3">gambar banner</p>
                                        <div class="container">
                                            <img src="https://github.com/bakaroti/resource/blob/main/temp1.jpg?raw=true"
                                                alt="Image 1" class="lightbox-trigger img-fluid" style="width:350px;">
                                        </div>
                                    </div>
                                    <p class="text-lead2 fs-5 fw-bolder mt-3 text-center">gallery</p>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex">
                                            <div class="image-container">
                                                <img src="https://github.com/bakaroti/resource/blob/main/temp1.jpg?raw=true"
                                                    alt="Image 1" class="lightbox-trigger">
                                            </div>

                                            <div class="image-container">
                                                <img src="https://github.com/bakaroti/resource/blob/main/temp2.jpg?raw=true"
                                                    alt="Image 2" class="lightbox-trigger">
                                            </div>

                                            <div class="image-container">
                                                <img src="https://github.com/bakaroti/resource/blob/main/temp3.jpg?raw=true"
                                                    alt="Image 3" class="lightbox-trigger">
                                            </div>

                                            <div class="lightbox" id="lightbox">
                                                <span class="close-button" id="close-button">&times;</span>
                                                <img src="" alt="Fullscreen Image" class="lightbox-content">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex">
                                            <div class="image-container">
                                                <img src="https://github.com/bakaroti/resource/blob/main/temp3.jpg?raw=true"
                                                    alt="Image 3" class="lightbox-trigger">
                                            </div>

                                            <div class="image-container">
                                                <img src="https://github.com/bakaroti/resource/blob/main/temp3.jpg?raw=true"
                                                    alt="Image 3" class="lightbox-trigger">
                                            </div>
                                            <div class="image-container">
                                                <img src="https://github.com/bakaroti/resource/blob/main/temp3.jpg?raw=true"
                                                    alt="Image 3" class="lightbox-trigger">
                                            </div>
                                        </div>
                                    </div>
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
                                <button type="submit" class="btn btn-primary btn-block w-75">Submit</button>
                            </div>
                        </form>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
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


<style>
    body {
        background-image: url('/img/bgliq2.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .image-container {
        display: inline-block;
        width: 242px;
        box-sizing: border-box;
        padding: 5px;
        cursor: pointer;
    }

    .image-container img {
        width: 100%;
        height: auto;
    }

    .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .lightbox-content {
        position: relative;
        max-width: 80%;
        max-height: 80%;
        text-align: center;
    }

    .lightbox-image {
        max-width: 100%;
        max-height: 100%;
    }

    .close-button {
        position: absolute;
        top: 50px;
        right: 10px;
        font-size: 30px;
        color: white;
        cursor: pointer;
    }

    .active {
        display: flex;
    }
</style>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
</script>

<script>
    const lightbox = document.getElementById('lightbox');
const lightboxContent = document.querySelector('.lightbox-content');
const lightboxTrigger = document.querySelectorAll('.lightbox-trigger');
const closeButton = document.getElementById('close-button');

lightboxTrigger.forEach(trigger => {
  trigger.addEventListener('click', () => {
    lightboxContent.src = trigger.src;
    lightbox.classList.add('active');
  });
});

closeButton.addEventListener('click', () => {
  lightbox.classList.remove('active');
});
</script>


@endsection