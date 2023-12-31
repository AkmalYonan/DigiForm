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
            @if ($namaPaket == 1 || $namaPaket == 'Bronze')
            <div class="container px-4 text-start">
              <div class="card mx-5 custom-card">
                <div class="py-1 px-3 py-md-1 px-md-3">
                  <div class="d-flex align-items-center">
                    <img src="img/silver_logo.webp" class="img img-responsive" width="40" alt="Silver" title="Silver">
                    <div class="ms-2 mt-3">
                      <span class="font-tebal text-roboto text-capitalize fs-6">Silver</span>
                      <br>
                      <p class="font-kecil fw-bolder">Gunakan Lebih banyak Fitur! <br><span>Upgrade Silver dengan
                          Rp100rb</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <hr class="horizontal-dark">
            <p class="text-roboto">Paket :</p>
            @if(isset($namaPaket))
            <div class="ms-auto">
              @if($namaPaket == 'Bronze' || $namaPaket == 1)
              <img src="img/bronze_logo.png" class="img img-responsive pb-2" width="60" alt="Bronze" title="Bronze">
              <p class="fs-2 fw-bolder text-lead2">{{ $namaPaket }}</p>
              @elseif($namaPaket == 'Silver' || $namaPaket == 2)
              <img src="img/silver_logo.webp" class="img img-responsive pb-2" width="60" alt="Silver" title="Silver">
              <p class="fs-2 fw-bolder text-lead2">{{ $namaPaket }}</p>
              @elseif($namaPaket == 'Gold' || $namaPaket == 3)
              <img src="img/gold_logo.png" class="img img-responsive pb-2" width="60" alt="Gold" title="Gold">
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
            <form action="{{ route('order-pesan') }}" method="POST" enctype="multipart/form-data">
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

                  <div class="form-floating py-2 pt-3">
                    <select name="salam" id="salam" class="form-control">
                      <option value="Selamat Pagi">Selamat Pagi</option>
                      <option value="Selamat Siang">Selamat Siang</option>
                      <option value="Selamat Sore">Selamat Sore</option>
                      <option value="Selamat Malam">Selamat Malam</option>

                      <option value="Assalamu'alaikum">Assalamu'alaikum</option>
                      <option value="Om Swastiastu">Om Swastiastu</option>
                      <option value="Salam Kebajikan">Salam Kebajikan</option>
                      <option value="Salam Kristen">Salam Kristen</option>
                      <option value="The Wedding">The Wedding</option>
                    </select>
                    <label for="salam">Pilih Salam:</label>

                  </div>
                </div>
              </div>

              <div class="row justify-content-center pt-5 gap-5">
                <div class="col-md-11">
                  <div class="d-flex align-items-center">
                    <p class="text-lead2 fs-4 fw-bolder mt-3">Data Pria</p>
                    <div class="icon-tanya ms-2" data-bs-toggle="tooltip" title="Isilah data dibawah untuk Data Pria!">
                    </div>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama_mempelai_pria" name="nama_mempelai_pria"
                      value="{{ old('nama_mempelai_pria') }}" required>
                    <label for="nama_mempelai_pria">Nama Panggilan Mempelai Pria:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama_mempelai_pria_lengkap"
                      name="nama_mempelai_pria_lengkap" value="{{ old('nama_mempelai_pria_lengkap') }}" required>
                    <label for="nama_mempelai_pria">Nama Lengkap Mempelai Pria:</label>
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
                    <input type="text" class="form-control" id="username_ig_pria" name="username_ig_pria"
                      value="{{ old('username_ig_pria') }}" required>
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
                    <input type="text" class="form-control" id="nama_mempelai_wanita" name="nama_mempelai_wanita"
                      value="{{ old('nama_mempelai_wanita') }}" required>
                    <label for="nama_mempelai_wanita">Nama Panggilan Mempelai Wanita:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama_mempelai_wanita_lengkap"
                      name="nama_mempelai_wanita_lengkap" value="{{ old('nama_mempelai_wanita_lengkap') }}" required>
                    <label for="nama_mempelai_wanita_lengkap">Nama Lengkap Mempelai Wanita:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="anak_ke_wanita" name="anak_ke_wanita"
                      value="{{ old('anak_ke_wanita') }}" required>
                    <label for="anak_ke_wanita">Anak Ke:</label>

                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama_ayah_wanita" name="nama_ayah_wanita"
                      value="{{ old('nama_ayah_wanita') }}" required>
                    <label for="nama_ayah_wanita">Nama Ayah:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama_ibu_wanita" name="nama_ibu_wanita"
                      value="{{ old('nama_ibu_wanita') }}" required>
                    <label for="nama_ibu_wanita">Nama Ibu:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username_ig_wanita" name="username_ig_wanita"
                      value="{{ old('username_ig_pria') }}" required>
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
                    <input type="text" class="form-control" id="lokasi_akad" name="lokasi_akad" required>
                    <label for="lokasi_acara">Lokasi Akad:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lokasi_resepsi" name="lokasi_resepsi" required>
                    <label for="lokasi_acara">Lokasi Resepsi:</label>
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
                    <input type="text" class="form-control" id="jam_akad" name="jam_akad" required>
                    <label for="jam_akad">Jam Akad: ( 08.00 - Selesai )</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="jam_resepsi" name="jam_resepsi" required>
                    <label for="jam_resepsi">Jam Resepsi: ( 08.00 - Selesai )</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="iframeMaps_akad" name="iframeMaps_akad" required>
                    <label for="iframeMaps_akad">Link Maps akad:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="iframeMaps_resepsi" name="iframeMaps_resepsi" required>
                    <label for="iframeMaps_resepsi">Link Maps resepsi</label>
                  </div>
                </div>
                <div class="col-md-11">
                  <div class="d-flex align-items-center">
                    <p class="text-lead2 fs-4 fw-bolder mt-3">Data Kontak</p>
                    <div class="icon-tanya ms-2" data-bs-toggle="tooltip"
                      title="Isilah data dibawah untuk Data Kontak!">
                    </div>
                  </div>
                  <div class="form-floating mb-3  ">
                    <input type="email" class="form-control" id="email" name="email" required>
                    <label for="email">Email:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="no_wa" name="no_wa" required>
                    <label for="no_wa">Nomor WhatsApp:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" required>
                    <label for="nama_panggilan">Nama Panggilan</label>
                  </div>
                  <div class="pt-5">
                    <div class="d-flex align-items-center">
                      <p class="text-lead2 fs-4 fw-bolder mt-3">All Photo</p>
                      <div class="icon-tanya ms-2" data-bs-toggle="tooltip"
                        title="Isilah data dibawah untuk Data Kontak!"></div>
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
                      <input class="form-control" type="file" id="fotoThumbnail" name="fotoThumbnail">
                    </div>
                    <div class=" mb-3">
                      <label for="fotoBanner">Foto Banner</label>
                      <input class="form-control" type="file" id="fotoBanner" name="fotoBanner">
                    </div>
                  </div>
                  <div class="pt-5">
                    <div class="d-flex align-items-center">
                      <p class="text-lead2 fs-4 fw-bolder mt-3">Photo Gallery</p>
                      <div class="icon-tanya ms-2" data-bs-toggle="tooltip"
                        title="Isilah data dibawah untuk Data Kontak!"></div>
                    </div>
                    <div class="mb-3">
                      <label for="foto1">Foto_1</label>
                      <input class="form-control" type="file" id="foto1" name="foto1">
                    </div>
                    <div class=" mb-3">
                      <label for="foto2">Foto_2</label>
                      <input class="form-control" type="file" id="foto2" name="foto2">
                    </div>
                    <div class=" mb-3">
                      <label for="foto3">Foto_3</label>
                      <input class="form-control" type="file" id="foto3" name="foto3">
                    </div>
                    <div class=" mb-3">
                      <label for="foto4">Foto_4</label>
                      <input class="form-control" type="file" id="foto4" name="foto4">
                    </div>
                    <div class=" mb-3">
                      <label for="foto5">Foto_5</label>
                      <input class="form-control" type="file" id="foto5" name="foto5">
                    </div>
                    <div class="mb-3">
                      <label for="foto6">Foto_6</label>
                      <input class="form-control" type="file" id="foto6" name="foto6">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center pt-5 gap-5">
                <div class="col-md-11">
                  @if(isset($fiturs))
                  <label class="mb-2">Select fiturs:</label>
                  <div class="form-check">
                    @foreach($fiturs as $fitur)
                    <div class="mb-2">
                      @if ($loop->iteration <= 6) <input type="checkbox" name="selected_fiturs[]"
                        value="{{ $fitur->id }}" class="form-check-input" id="fitur{{ $fitur->id }}" checked disabled>
                        <input type="hidden" name="selected_fiturs[]" value="{{ $fitur->id }}" class="form-check-input"
                          id="fitur{{ $fitur->id }}">
                        <label class="form-check-label" for="fitur{{ $fitur->id }}">{{ $fitur->nama }}</label>
                    </div>
                    @endif
                    @endforeach
                  </div>
                  @endif
                </div>
              </div>
              <div class="container text-center pt-4">
                <button type="submit" class="btn btn-primary btn-block w-75">Submit</button>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
  integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
</script>

@endsection