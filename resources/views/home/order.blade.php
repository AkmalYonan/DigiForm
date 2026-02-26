@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">
  <div class="flex flex-col lg:flex-row gap-8">

    <!-- Sidebar Profile Profile Summary -->
    <div class="lg:w-1/3">
      <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 sticky top-28">
        <div class="text-center">
          <div class="relative inline-block mb-4">
            <img class="w-28 h-28 rounded-full border-4 border-white shadow-md object-cover"
              src="{{ asset('img/profiles.jpg') }}" alt="User Profile"
              onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($namaUser->name) }}&background=6366f1&color=fff&size=128'" />
            <div class="absolute bottom-0 right-0 w-6 h-6 bg-emerald-500 border-2 border-white rounded-full"></div>
          </div>

          <h4 class="text-xl font-bold text-slate-800 display-font">{{ $namaUser->name }}</h4>
          <p class="text-sm text-slate-500 mb-6">{{ $namaUser->email }}</p>

          @if ($namaPaket == 1 || $namaPaket == 'Bronze')
          <div
            class="bg-gradient-to-r from-slate-100 to-slate-50 rounded-2xl p-4 border border-slate-200 mb-6 text-left relative overflow-hidden group">
            <div
              class="absolute right-0 top-0 w-16 h-16 bg-gradient-to-br from-slate-300 to-slate-400 rounded-bl-full opacity-20 group-hover:scale-110 transition-transform">
            </div>
            <div class="flex items-center gap-3 relative z-10">
              <img src="{{ asset('img/silver_logo.webp') }}" class="w-10 h-10 drop-shadow-sm" alt="Silver"
                title="Silver">
              <div>
                <h5 class="font-bold text-slate-800 text-sm">Upgrade ke Silver</h5>
                <p class="text-xs text-slate-600 mt-0.5 leading-tight">Gunakan lebih banyak fitur! <span
                    class="font-semibold text-indigo-600 block mt-1">+Rp 100.000</span></p>
              </div>
            </div>
          </div>
          @endif

          <div class="h-px bg-slate-100 w-full my-6"></div>

          <div class="text-left">
            <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Paket Anda Saat Ini:</p>
            @if(isset($namaPaket))
            <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100">
              @if($namaPaket == 'Bronze' || $namaPaket == 1)
              <img src="{{ asset('img/bronze_logo.png') }}" class="w-14 h-14 drop-shadow-md" alt="Bronze"
                title="Bronze">
              <div>
                <p class="text-xl font-extrabold text-amber-600 display-font">Bronze</p>
                <p class="text-xs text-slate-500">Paket Dasar</p>
              </div>
              @elseif($namaPaket == 'Silver' || $namaPaket == 2)
              <img src="{{ asset('img/silver_logo.webp') }}" class="w-14 h-14 drop-shadow-md" alt="Silver"
                title="Silver">
              <div>
                <p class="text-xl font-extrabold text-slate-500 display-font">Silver</p>
                <p class="text-xs text-slate-500">Paket Populer</p>
              </div>
              @elseif($namaPaket == 'Gold' || $namaPaket == 3)
              <img src="{{ asset('img/gold_logo.png') }}" class="w-14 h-14 drop-shadow-md" alt="Gold" title="Gold">
              <div>
                <p class="text-xl font-extrabold text-amber-500 display-font">Gold</p>
                <p class="text-xs text-slate-500">Paket Premium</p>
              </div>
              @else
              <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-400 shrink-0">
                <i class="fa-solid fa-box-open"></i>
              </div>
              <p class="text-sm text-slate-600 font-medium">Anda belum memiliki paket. Silakan hubungi admin.</p>
              @endif
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>

    <!-- Order Form Main Context -->
    <div class="lg:w-2/3">
      <div class="bg-white rounded-3xl p-6 md:p-10 shadow-lg border border-slate-100 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-50 rounded-bl-full -z-0 opacity-50 pointer-events-none">
        </div>

        <div class="text-center mb-10 relative z-10 border-b border-slate-100 pb-6">
          <span
            class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-600 mb-4 shadow-sm">
            <i class="fa-solid fa-pen-nib text-xl"></i>
          </span>
          <h2 class="text-3xl font-extrabold text-slate-800 display-font">Form Order Pesanan</h2>
          <p class="text-slate-500 mt-2">Lengkapi data di bawah ini untuk memulai pembuatan undangan Anda.</p>
        </div>

        <form action="{{ route('order-pesan') }}" method="POST" enctype="multipart/form-data"
          class="relative z-10 space-y-10">
          @csrf

          <!-- Section: Pengaturan Dasar -->
          <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
            <h3 class="text-lg font-bold text-slate-800 flex items-center mb-5 pb-3 border-b border-slate-200">
              <i class="fa-solid fa-sliders text-indigo-500 mr-3"></i> Pengaturan Dasar
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              @if(isset($templates))
              <div>
                <label for="template_id" class="block text-sm font-semibold text-slate-700 mb-2">Pilih Desain
                  Template:</label>
                <div class="relative">
                  <select name="template_id" id="template_id"
                    class="w-full pl-4 pr-10 py-3 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors appearance-none font-medium shadow-sm">
                    @foreach($templates as $template)
                    @if ($template)
                    <option value="{{ $template->id }}">{{ $template->nama }}</option>
                    @endif
                    @endforeach
                  </select>
                  <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
                    <i class="fa-solid fa-chevron-down text-sm"></i>
                  </div>
                </div>
              </div>
              @endif

              <div>
                <label for="salam" class="block text-sm font-semibold text-slate-700 mb-2">Pilih Salam Pembuka:</label>
                <div class="relative">
                  <select name="salam" id="salam"
                    class="w-full pl-4 pr-10 py-3 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors appearance-none font-medium shadow-sm">
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
                  <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
                    <i class="fa-solid fa-chevron-down text-sm"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Section: Data Pria -->
            <div>
              <h3 class="text-lg font-bold text-slate-800 flex items-center mb-5 pb-3 border-b border-slate-100">
                <i class="fa-solid fa-mars text-blue-500 w-6"></i> Data Mempelai Pria
              </h3>
              <div class="space-y-4">
                <div>
                  <label for="nama_mempelai_pria" class="block text-sm font-medium text-slate-700 mb-1">Nama
                    Panggilan</label>
                  <input type="text" id="nama_mempelai_pria" name="nama_mempelai_pria"
                    value="{{ old('nama_mempelai_pria') }}" required
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                </div>
                <div>
                  <label for="nama_mempelai_pria_lengkap" class="block text-sm font-medium text-slate-700 mb-1">Nama
                    Lengkap</label>
                  <input type="text" id="nama_mempelai_pria_lengkap" name="nama_mempelai_pria_lengkap"
                    value="{{ old('nama_mempelai_pria_lengkap') }}" required
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                </div>
                <div class="grid grid-cols-3 gap-4">
                  <div class="col-span-1">
                    <label for="anak_ke_pria" class="block text-sm font-medium text-slate-700 mb-1">Anak Ke-</label>
                    <input type="number" id="anak_ke_pria" name="anak_ke_pria" value="{{ old('anak_ke_pria') }}"
                      required
                      class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white text-center">
                  </div>
                </div>
                <div>
                  <label for="nama_ayah_pria" class="block text-sm font-medium text-slate-700 mb-1">Nama Ayah</label>
                  <input type="text" id="nama_ayah_pria" name="nama_ayah_pria" value="{{ old('nama_ayah_pria') }}"
                    required
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                </div>
                <div>
                  <label for="nama_ibu_pria" class="block text-sm font-medium text-slate-700 mb-1">Nama Ibu</label>
                  <input type="text" id="nama_ibu_pria" name="nama_ibu_pria" value="{{ old('nama_ibu_pria') }}" required
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                </div>
                <div>
                  <label for="username_ig_pria" class="block text-sm font-medium text-slate-700 mb-1">Username Instagram
                    (Tanpa @)</label>
                  <div class="flex rounded-xl shadow-sm">
                    <span
                      class="inline-flex items-center px-4 rounded-l-xl border border-r-0 border-slate-200 bg-slate-100 text-slate-500 sm:text-sm font-medium">@</span>
                    <input type="text" id="username_ig_pria" name="username_ig_pria"
                      value="{{ old('username_ig_pria') }}" required
                      class="flex-1 min-w-0 block w-full px-4 py-2.5 rounded-none rounded-r-xl bg-slate-50 border border-slate-200 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                  </div>
                </div>
              </div>
            </div>

            <!-- Section: Data Wanita -->
            <div>
              <h3 class="text-lg font-bold text-slate-800 flex items-center mb-5 pb-3 border-b border-slate-100">
                <i class="fa-solid fa-venus text-rose-500 w-6"></i> Data Mempelai Wanita
              </h3>
              <div class="space-y-4">
                <div>
                  <label for="nama_mempelai_wanita" class="block text-sm font-medium text-slate-700 mb-1">Nama
                    Panggilan</label>
                  <input type="text" id="nama_mempelai_wanita" name="nama_mempelai_wanita"
                    value="{{ old('nama_mempelai_wanita') }}" required
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                </div>
                <div>
                  <label for="nama_mempelai_wanita_lengkap" class="block text-sm font-medium text-slate-700 mb-1">Nama
                    Lengkap</label>
                  <input type="text" id="nama_mempelai_wanita_lengkap" name="nama_mempelai_wanita_lengkap"
                    value="{{ old('nama_mempelai_wanita_lengkap') }}" required
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                </div>
                <div class="grid grid-cols-3 gap-4">
                  <div class="col-span-1">
                    <label for="anak_ke_wanita" class="block text-sm font-medium text-slate-700 mb-1">Anak Ke-</label>
                    <input type="number" id="anak_ke_wanita" name="anak_ke_wanita" value="{{ old('anak_ke_wanita') }}"
                      required
                      class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white text-center">
                  </div>
                </div>
                <div>
                  <label for="nama_ayah_wanita" class="block text-sm font-medium text-slate-700 mb-1">Nama Ayah</label>
                  <input type="text" id="nama_ayah_wanita" name="nama_ayah_wanita" value="{{ old('nama_ayah_wanita') }}"
                    required
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                </div>
                <div>
                  <label for="nama_ibu_wanita" class="block text-sm font-medium text-slate-700 mb-1">Nama Ibu</label>
                  <input type="text" id="nama_ibu_wanita" name="nama_ibu_wanita" value="{{ old('nama_ibu_wanita') }}"
                    required
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                </div>
                <div>
                  <label for="username_ig_wanita" class="block text-sm font-medium text-slate-700 mb-1">Username
                    Instagram (Tanpa @)</label>
                  <div class="flex rounded-xl shadow-sm">
                    <span
                      class="inline-flex items-center px-4 rounded-l-xl border border-r-0 border-slate-200 bg-slate-100 text-slate-500 sm:text-sm font-medium">@</span>
                    <input type="text" id="username_ig_wanita" name="username_ig_wanita"
                      value="{{ old('username_ig_wanita') }}" required
                      class="flex-1 min-w-0 block w-full px-4 py-2.5 rounded-none rounded-r-xl bg-slate-50 border border-slate-200 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Section: Data Pernikahan -->
          <div>
            <h3 class="text-lg font-bold text-slate-800 flex items-center mb-5 pb-3 border-b border-slate-100">
              <i class="fa-regular fa-calendar-check text-emerald-500 w-6"></i> Data Acara Pernikahan
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
              <!-- Akad -->
              <div class="space-y-4 bg-slate-50 p-5 rounded-2xl border border-slate-100">
                <h4 class="font-bold text-slate-700 text-sm uppercase tracking-wider mb-2">Acara Akad Nikah</h4>
                <div>
                  <label for="lokasi_akad" class="block text-sm font-medium text-slate-700 mb-1">Nama Tempat /
                    Gedung</label>
                  <input type="text" id="lokasi_akad" name="lokasi_akad" required
                    class="w-full px-4 py-2 bg-white border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-indigo-500">
                </div>
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label for="tgl_akad" class="block text-sm font-medium text-slate-700 mb-1">Tanggal</label>
                    <input type="date" id="tgl_akad" name="tgl_akad" required
                      class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-slate-900 text-sm focus:ring-2 focus:ring-indigo-500">
                  </div>
                  <div>
                    <label for="jam_akad" class="block text-sm font-medium text-slate-700 mb-1">Jam (WIB)</label>
                    <input type="text" id="jam_akad" name="jam_akad" placeholder="08:00 - Selesai" required
                      class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-slate-900 text-sm focus:ring-2 focus:ring-indigo-500">
                  </div>
                </div>
                <div>
                  <label for="iframeMaps_akad" class="block text-sm font-medium text-slate-700 mb-1">Link Google Maps
                    (Iframe)</label>
                  <input type="text" id="iframeMaps_akad" name="iframeMaps_akad"
                    placeholder="<iframe src='...'></iframe>" required
                    class="w-full px-4 py-2 bg-white border border-slate-200 rounded-xl text-slate-900 font-mono text-sm focus:ring-2 focus:ring-indigo-500">
                </div>
              </div>

              <!-- Resepsi -->
              <div class="space-y-4 bg-slate-50 p-5 rounded-2xl border border-slate-100">
                <h4 class="font-bold text-slate-700 text-sm uppercase tracking-wider mb-2">Acara Resepsi</h4>
                <div>
                  <label for="lokasi_resepsi" class="block text-sm font-medium text-slate-700 mb-1">Nama Tempat /
                    Gedung</label>
                  <input type="text" id="lokasi_resepsi" name="lokasi_resepsi"
                    class="w-full px-4 py-2 bg-white border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-indigo-500">
                </div>
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label for="tgl_resepsi" class="block text-sm font-medium text-slate-700 mb-1">Tanggal</label>
                    <input type="date" id="tgl_resepsi" name="tgl_resepsi"
                      class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-slate-900 text-sm focus:ring-2 focus:ring-indigo-500">
                  </div>
                  <div>
                    <label for="jam_resepsi" class="block text-sm font-medium text-slate-700 mb-1">Jam (WIB)</label>
                    <input type="text" id="jam_resepsi" name="jam_resepsi" placeholder="10:00 - Selesai"
                      class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-slate-900 text-sm focus:ring-2 focus:ring-indigo-500">
                  </div>
                </div>
                <div>
                  <label for="iframeMaps_resepsi" class="block text-sm font-medium text-slate-700 mb-1">Link Google Maps
                    (Iframe)</label>
                  <input type="text" id="iframeMaps_resepsi" name="iframeMaps_resepsi"
                    placeholder="<iframe src='...'></iframe>"
                    class="w-full px-4 py-2 bg-white border border-slate-200 rounded-xl text-slate-900 font-mono text-sm focus:ring-2 focus:ring-indigo-500">
                </div>
              </div>
            </div>
          </div>

          <!-- Section: Media Uploads -->
          <div>
            <h3 class="text-lg font-bold text-slate-800 flex items-center mb-5 pb-3 border-b border-slate-100">
              <i class="fa-regular fa-images text-indigo-500 w-6"></i> Upload Foto
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Main Photos -->
              <div class="bg-indigo-50/50 p-5 rounded-2xl border border-indigo-100/50 space-y-4">
                <h4 class="font-bold text-indigo-900 text-sm uppercase tracking-wider mb-2">Foto Utama</h4>
                <div class="space-y-4">
                  <div>
                    <label for="fotoPria" class="block text-sm font-medium text-slate-700 mb-1">Foto Mempelai
                      Pria</label>
                    <input type="file" id="fotoPria" name="fotoPria" accept="image/*"
                      class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition-colors border border-slate-200 rounded-xl bg-white">
                  </div>
                  <div>
                    <label for="fotoWanita" class="block text-sm font-medium text-slate-700 mb-1">Foto Mempelai
                      Wanita</label>
                    <input type="file" id="fotoWanita" name="fotoWanita" accept="image/*"
                      class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-rose-50 file:text-rose-700 hover:file:bg-rose-100 transition-colors border border-slate-200 rounded-xl bg-white">
                  </div>
                  <div>
                    <label for="fotoCouple" class="block text-sm font-medium text-slate-700 mb-1">Foto Pasangan
                      (Couple)</label>
                    <input type="file" id="fotoCouple" name="fotoCouple" accept="image/*"
                      class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200 transition-colors border border-slate-200 rounded-xl bg-white">
                  </div>
                  <div class="pt-2 border-t border-indigo-100">
                    <label for="fotoThumbnail" class="block text-sm font-medium text-slate-700 mb-1">Foto Cover
                      (Kecil)</label>
                    <input type="file" id="fotoThumbnail" name="fotoThumbnail" accept="image/*"
                      class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200 transition-colors border border-slate-200 rounded-xl bg-white">
                  </div>
                  <div>
                    <label for="fotoBanner" class="block text-sm font-medium text-slate-700 mb-1">Foto Banner
                      (Samping/Hero)</label>
                    <input type="file" id="fotoBanner" name="fotoBanner" accept="image/*"
                      class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200 transition-colors border border-slate-200 rounded-xl bg-white">
                  </div>
                </div>
              </div>

              <!-- Gallery Photos -->
              <div class="bg-amber-50/50 p-5 rounded-2xl border border-amber-100/50 space-y-4">
                <h4 class="font-bold text-amber-900 text-sm uppercase tracking-wider mb-2">Galeri Foto</h4>
                <div class="grid grid-cols-1 gap-3">
                  @for($i = 1; $i <= 6; $i++) <div>
                    <input type="file" id="foto{{$i}}" name="foto{{$i}}" accept="image/*"
                      class="block w-full text-sm text-slate-500 file:mr-4 file:py-1.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 transition-colors border border-slate-200 rounded-lg bg-white">
                </div>
                @endfor
              </div>
              <p class="text-xs text-amber-600 mt-2 font-medium"><i class="fa-solid fa-circle-info mr-1"></i> Opsional:
                Anda dapat mengunggah hingga 6 foto galeri tambahan.</p>
            </div>
          </div>
      </div>

      <!-- Section: Data Kontak Pemesan -->
      <div>
        <h3 class="text-lg font-bold text-slate-800 flex items-center mb-5 pb-3 border-b border-slate-100">
          <i class="fa-solid fa-address-book text-slate-500 w-6"></i> Kontak Pemesan
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 bg-slate-50 p-5 rounded-2xl border border-slate-100">
          <div>
            <label for="nama_panggilan" class="block text-sm font-medium text-slate-700 mb-1">Nama Panggilan
              Admin</label>
            <input type="text" id="nama_panggilan" name="nama_panggilan" required
              class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-colors">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email Aktif</label>
            <input type="email" id="email" name="email" required
              class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-colors">
          </div>
          <div>
            <label for="no_wa" class="block text-sm font-medium text-slate-700 mb-1">Nomor WhatsApp Aktif</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-brands fa-whatsapp text-emerald-500 text-lg"></i>
              </div>
              <input type="text" id="no_wa" name="no_wa" placeholder="08..." required
                class="w-full pl-10 pr-4 py-2.5 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-colors">
            </div>
          </div>
        </div>
      </div>

      <!-- Section: Fitur Terpilih (Readonly) -->
      @if(isset($fiturs) && count($fiturs) > 0)
      <div class="bg-indigo-50 rounded-2xl p-6 border border-indigo-100">
        <h3 class="text-sm font-bold text-indigo-900 mb-3 uppercase tracking-wider">Fitur Paket Anda</h3>
        <div class="flex flex-wrap gap-2">
          @foreach($fiturs as $fitur)
          @if ($loop->iteration <= 6) <div
            class="inline-flex items-center px-3 py-1.5 rounded-lg bg-white border border-indigo-200 shadow-sm opacity-80 cursor-not-allowed">
            <i class="fa-solid fa-check text-emerald-500 mr-2 text-sm"></i>
            <span class="text-sm font-medium text-slate-700">{{ $fitur->nama }}</span>
            <input type="hidden" name="selected_fiturs[]" value="{{ $fitur->id }}">
        </div>
        @endif
        @endforeach
        @if(count($fiturs) > 6)
        <div
          class="inline-flex items-center px-3 py-1.5 rounded-lg bg-indigo-100 border border-indigo-200 text-indigo-700 text-sm font-semibold">
          + {{ count($fiturs) - 6 }} Fitur Lainnya
        </div>
        @endif
      </div>
    </div>
    @endif

    <!-- Submit Button -->
    <div class="pt-6 border-t border-slate-100 mt-10">
      <button type="submit"
        class="w-full md:w-auto md:min-w-[300px] flex justify-center items-center py-4 px-8 rounded-2xl shadow-xl shadow-indigo-500/20 text-white bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 font-extrabold text-lg transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mx-auto hover:-translate-y-1">
        Buat Undangan Sekarang <i class="fa-solid fa-paper-plane ml-3"></i>
      </button>
    </div>

    </form>
  </div>
</div>
</div>
</div>

<style>
  /* Gradient Background override */
  body {
    background-color: #f8fafc;
    /* slate-50 backup */
    background-image: radial-gradient(at 0% 0%, hsla(253, 16%, 7%, 0.05) 0, transparent 50%), radial-gradient(at 50% 0%, hsla(225, 39%, 30%, 0.05) 0, transparent 50%), radial-gradient(at 100% 0%, hsla(339, 49%, 30%, 0.05) 0, transparent 50%);
    background-attachment: fixed;
  }
</style>

@endsection