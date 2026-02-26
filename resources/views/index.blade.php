@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-white to-rose-50 opacity-90"></div>
    <div
      class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-indigo-200/50 blur-3xl mix-blend-multiply filter">
    </div>
    <div
      class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-rose-200/50 blur-3xl mix-blend-multiply filter">
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="flex flex-col lg:flex-row items-center gap-12">
      <div class="w-full lg:w-1/2 text-center lg:text-left" data-aos="fade-right">
        <span
          class="inline-block py-1 px-3 rounded-full bg-indigo-100 text-indigo-700 font-semibold text-sm mb-6 border border-indigo-200 shadow-sm">
          Platform Digital #1
        </span>
        <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6 display-font">
          Bagikan Momen Bahagiamu Lebih <span
            class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-rose-500">Elegan.</span>
        </h1>
        <p class="text-lg text-slate-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-light">
          Buat undangan pernikahanmu dengan sangat mudah. Modern, interaktif, ramah lingkungan, dan dapat dijangkau oleh
          siapapun, dimanapun.
        </p>
        <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
          <a href="{{ Auth::check() ? route('homeorder') : route('login') }}"
            class="inline-flex justify-center items-center py-3.5 px-8 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-lg transition-all duration-300 shadow-lg shadow-indigo-600/30 hover:shadow-indigo-600/50 hover:-translate-y-0.5">
            Buat Undangan <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
          </a>
          <a href="#contoh"
            class="inline-flex justify-center items-center py-3.5 px-8 rounded-full bg-white hover:bg-slate-50 text-slate-700 font-semibold text-lg transition-all border border-slate-200 shadow-sm hover:shadow-md">
            Lihat Contoh
          </a>
        </div>
      </div>

      <div class="w-full lg:w-1/2 flex justify-center" data-aos="fade-left" data-aos-delay="200">
        <div class="relative w-full max-w-md">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-rose-500 rounded-[2.5rem] blur opacity-30 animate-pulse">
          </div>
          <img src="{{ asset('img/index_phone.png') }}"
            class="relative w-full drop-shadow-2xl hover:-translate-y-2 transition-transform duration-500"
            alt="App Preview" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Benefit Section -->
<section id="benefit" class="py-24 bg-white relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
      <h2 class="text-indigo-600 font-semibold tracking-wide uppercase text-sm mb-3">Keunggulan</h2>
      <h3 class="text-3xl md:text-4xl font-bold text-slate-900 display-font mb-4">Kenapa Memilih DigiForm?</h3>
      <p class="text-slate-600 text-lg">Platform kami dirancang untuk memberikan kemudahan maksimum tanpa mengorbankan
        kualitas dan estetika.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div
        class="bg-slate-50 p-8 rounded-2xl border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-indigo-100 transition-all duration-300 group"
        data-aos="fade-up" data-aos-delay="100">
        <div
          class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 transition-colors">
          <i class="fa-solid fa-bolt text-2xl text-indigo-600 group-hover:text-white transition-colors"></i>
        </div>
        <h4 class="text-xl font-bold text-slate-900 mb-3 display-font">Cepat & Instan</h4>
        <p class="text-slate-600 leading-relaxed">Penyebaran instan, tanpa butuh kurir. Siap dibagikan hanya dalam
          hitungan menit setelah pembuatan.</p>
      </div>
      <!-- Card 2 -->
      <div
        class="bg-slate-50 p-8 rounded-2xl border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-indigo-100 transition-all duration-300 group"
        data-aos="fade-up" data-aos-delay="200">
        <div
          class="w-14 h-14 bg-rose-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-rose-500 transition-colors">
          <i class="fa-solid fa-share-nodes text-2xl text-rose-500 group-hover:text-white transition-colors"></i>
        </div>
        <h4 class="text-xl font-bold text-slate-900 mb-3 display-font">Sebar Tanpa Batas</h4>
        <p class="text-slate-600 leading-relaxed">Satu link untuk ratusan tamu. Bagikan tanpa batas melalui WhatsApp,
          Instagram, Telegram, atau e-mail.</p>
      </div>
      <!-- Card 3 -->
      <div
        class="bg-slate-50 p-8 rounded-2xl border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-indigo-100 transition-all duration-300 group"
        data-aos="fade-up" data-aos-delay="300">
        <div
          class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 transition-colors">
          <i class="fa-solid fa-stamp text-2xl text-emerald-600 group-hover:text-white transition-colors"></i>
        </div>
        <h4 class="text-xl font-bold text-slate-900 mb-3 display-font">Buku Tamu Cerdas</h4>
        <p class="text-slate-600 leading-relaxed">Sistem RSVP modern dan buku tamu terintegrasi memudahkan pendataan
          kehadiran kerabat Anda.</p>
      </div>
      <!-- Card 4 -->
      <div
        class="bg-slate-50 p-8 rounded-2xl border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-indigo-100 transition-all duration-300 group"
        data-aos="fade-up" data-aos-delay="400">
        <div
          class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-amber-500 transition-colors">
          <i class="fa-solid fa-coins text-2xl text-amber-600 group-hover:text-white transition-colors"></i>
        </div>
        <h4 class="text-xl font-bold text-slate-900 mb-3 display-font">Hemat Biaya</h4>
        <p class="text-slate-600 leading-relaxed">Jauh lebih ekonomis dari cetak fisik, memungkinkan alokasi dana untuk
          kebutuhan pesta yang lain.</p>
      </div>
      <!-- Card 5 -->
      <div
        class="bg-slate-50 p-8 rounded-2xl border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-indigo-100 transition-all duration-300 group"
        data-aos="fade-up" data-aos-delay="500">
        <div
          class="w-14 h-14 bg-cyan-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-cyan-500 transition-colors">
          <i class="fa-solid fa-signature text-2xl text-cyan-600 group-hover:text-white transition-colors"></i>
        </div>
        <h4 class="text-xl font-bold text-slate-900 mb-3 display-font">Desain Eksklusif</h4>
        <p class="text-slate-600 leading-relaxed">Dihiasi efek animasi elegan (AOS) dan desain modern yang menjanjikan
          pengalaman premium bagi tamu.</p>
      </div>
      <!-- Card 6 -->
      <div
        class="bg-slate-50 p-8 rounded-2xl border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-indigo-100 transition-all duration-300 group"
        data-aos="fade-up" data-aos-delay="600">
        <div
          class="w-14 h-14 bg-fuchsia-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-fuchsia-600 transition-colors">
          <i class="fa-solid fa-leaf text-2xl text-fuchsia-600 group-hover:text-white transition-colors"></i>
        </div>
        <h4 class="text-xl font-bold text-slate-900 mb-3 display-font">Ramah Lingkungan</h4>
        <p class="text-slate-600 leading-relaxed">Ikut berpartisipasi membantu bumi dengan sistem tanpa kertas
          (Paperless) yang zero-waste.</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section id="price" class="py-24 bg-slate-50 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
      <h2 class="text-indigo-600 font-semibold tracking-wide uppercase text-sm mb-3">Harga & Paket</h2>
      <h3 class="text-3xl md:text-4xl font-bold text-slate-900 display-font mb-4">Investasi Fleksibel untuk Hari Bahagia
      </h3>
      <p class="text-slate-600 text-lg">Pilih tingkat paket pesanan Anda sesuai dengan fitur tambahan dan kemewahan yang
        di inginkan.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center max-w-6xl mx-auto">
      @if ($Pakets)
      @foreach ($Pakets as $index => $paket)
      <div
        class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-2xl hover:border-indigo-100 transition-all duration-300 relative {{ $index == 1 ? 'md:-mt-8 md:mb-8 border-indigo-200 shadow-xl ring-2 ring-indigo-500/20' : '' }}"
        data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
        @if($index == 1)
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
          <span
            class="bg-gradient-to-r from-indigo-500 to-rose-500 text-white text-xs font-bold uppercase tracking-wider py-1 px-4 rounded-full shadow-md">Terpopuler</span>
        </div>
        @endif

        <h3 class="text-2xl font-bold text-slate-900 mb-2 display-font">{{ $paket->nama }}</h3>
        <div class="flex items-baseline mb-6">
          <span class="text-4xl font-extrabold text-indigo-600">{{ $paket->harga }}</span>
        </div>

        <ul class="space-y-4 mb-8">
          @foreach ($paket->detailPaketFitur as $detailPaketFitur)
          <li class="flex items-start">
            <i class="fa-solid fa-check text-emerald-500 mt-1 mr-3 text-sm"></i>
            <span class="text-slate-600">{{ $detailPaketFitur->fitur->nama }}</span>
          </li>
          @endforeach
        </ul>

        <a href="{{ Auth::check() ? route('hometemplate') : route('login') }}"
          class="block w-full text-center {{ $index == 1 ? 'bg-indigo-600 hover:bg-indigo-700 text-white shadow-lg shadow-indigo-600/30' : 'bg-slate-100 hover:bg-slate-200 text-slate-800' }} py-3 px-6 rounded-full font-semibold transition-all duration-300">
          {{ Auth::check() ? 'Pilih Paket' : 'Daftar untuk Memilih' }}
        </a>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</section>

<!-- Themes Showcase -->
<section class="py-24 bg-white border-y border-slate-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16" data-aos="fade-up">
      <h3 class="text-3xl md:text-4xl font-bold text-slate-900 display-font mb-4">Pilihan Tema Eksklusif</h3>
      <p class="text-slate-600 max-w-2xl mx-auto">Kami merancang setiap tema dengan detail tinggi berdasarkan tren UI
        modern terbaru.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Theme Card -->
      <div
        class="group cursor-pointer rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-2xl transition-all duration-500"
        data-aos="fade-up" data-aos-delay="100">
        <div class="relative overflow-hidden aspect-[4/5]">
          <div class="absolute inset-0 bg-slate-900/10 group-hover:bg-transparent transition-colors z-10"></div>
          <img src="https://github.com/bakaroti/resource/blob/main/temp4.jpg?raw=true"
            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
            alt="Theme Amara">
          <div
            class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-slate-900/90 to-transparent z-20 translate-y-2 group-hover:translate-y-0 transition-transform">
            <div class="flex justify-between items-end">
              <div>
                <h4 class="text-white text-2xl font-bold display-font">Amara</h4>
                <span
                  class="bg-emerald-500/20 text-emerald-300 text-xs px-2 py-1 rounded border border-emerald-500/30 mt-2 inline-block">Free
                  Template</span>
              </div>
              <a href="{{ route('homeorder') }}"
                class="bg-white/20 hover:bg-white/40 backdrop-blur-md text-white px-4 py-2 rounded-lg font-medium text-sm transition-colors border border-white/30">Order</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Theme Card -->
      <div
        class="group cursor-pointer rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-2xl transition-all duration-500"
        data-aos="fade-up" data-aos-delay="200">
        <div class="relative overflow-hidden aspect-[4/5]">
          <div class="absolute inset-0 bg-slate-900/10 group-hover:bg-transparent transition-colors z-10"></div>
          <img src="https://github.com/bakaroti/resource/blob/main/temp3.jpg?raw=true"
            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
            alt="Theme Prima">
          <div
            class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-slate-900/90 to-transparent z-20 translate-y-2 group-hover:translate-y-0 transition-transform">
            <div class="flex justify-between items-end">
              <div>
                <h4 class="text-white text-2xl font-bold display-font">Prima</h4>
                <span
                  class="bg-indigo-500/20 text-indigo-300 text-xs px-2 py-1 rounded border border-indigo-500/30 mt-2 inline-block">Free
                  Template</span>
              </div>
              <a href="{{ route('homeorder') }}"
                class="bg-white/20 hover:bg-white/40 backdrop-blur-md text-white px-4 py-2 rounded-lg font-medium text-sm transition-colors border border-white/30">Order</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Theme Card -->
      <div
        class="group cursor-pointer rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-2xl transition-all duration-500"
        data-aos="fade-up" data-aos-delay="300">
        <div class="relative overflow-hidden aspect-[4/5]">
          <div class="absolute inset-0 bg-slate-900/10 group-hover:bg-transparent transition-colors z-10"></div>
          <img src="https://github.com/bakaroti/resource/blob/main/temp6.jpg?raw=true"
            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
            alt="Theme Arta">
          <div
            class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-slate-900/90 to-transparent z-20 translate-y-2 group-hover:translate-y-0 transition-transform">
            <div class="flex justify-between items-end">
              <div>
                <h4 class="text-white text-2xl font-bold display-font">Arta</h4>
                <span
                  class="bg-rose-500/20 text-rose-300 text-xs px-2 py-1 rounded border border-rose-500/30 mt-2 inline-block">Free
                  Template</span>
              </div>
              <a href="{{ route('homeorder') }}"
                class="bg-white/20 hover:bg-white/40 backdrop-blur-md text-white px-4 py-2 rounded-lg font-medium text-sm transition-colors border border-white/30">Order</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Examples Section -->
<section id="contoh" class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-indigo-600 font-semibold tracking-wide uppercase text-sm mb-3">Portofolio</h2>
      <h3 class="text-3xl md:text-4xl font-bold text-slate-900 display-font mb-4">Contoh Hasil Undangan</h3>
      <p class="text-slate-600 max-w-2xl mx-auto">Lihat referensi dari ribuan kerabat kami yang telah menggunakan
        layanan DigiForm.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Example 1 -->
      <div
        class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300"
        data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('img/akmil2.png') }}" class="w-full h-56 object-cover" alt="Example">
        <div class="p-6">
          <h5 class="text-xl font-bold text-slate-800 display-font">Akmal & Ratna</h5>
          <span class="text-indigo-600 text-sm font-semibold mb-3 block">Tema: Amartha</span>
          <p class="text-slate-500 text-sm mb-6 line-clamp-2">Sesungguhnya hati ini telah terhimpun dalam cinta dan
            bertemu dalam ketaatan.</p>
          <a href="https://akmalyonan.github.io/WeddingRatnaAkmalV2/" target="_blank"
            class="text-sm font-semibold text-slate-700 hover:text-indigo-600 flex items-center">
            Lihat Live Demo <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>

      <!-- Example 2 -->
      <div
        class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300"
        data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('img/foto3.jpg') }}" class="w-full h-56 object-cover" alt="Example">
        <div class="p-6">
          <h5 class="text-xl font-bold text-slate-800 display-font">Arya & Salamah</h5>
          <span class="text-indigo-600 text-sm font-semibold mb-3 block">Tema: Prima</span>
          <p class="text-slate-500 text-sm mb-6 line-clamp-2">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia
            menciptakan untukmu.</p>
          <a href="https://artaxsora.github.io/Undangan2/" target="_blank"
            class="text-sm font-semibold text-slate-700 hover:text-indigo-600 flex items-center">
            Lihat Live Demo <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>

      <!-- Example 3 -->
      <div
        class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300"
        data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('img/hehe.jpg') }}" class="w-full h-56 object-cover" alt="Example">
        <div class="p-6">
          <h5 class="text-xl font-bold text-slate-800 display-font">Dafa & Zee</h5>
          <span class="text-indigo-600 text-sm font-semibold mb-3 block">Tema: Yonans</span>
          <p class="text-slate-500 text-sm mb-6 line-clamp-2">Puji syukur kehadirat Tuhan YME atas karunianya Anda dapat
            berkumpul dan berbahagia.</p>
          <a href="https://bakaroti.github.io/nikahlagi/" target="_blank"
            class="text-sm font-semibold text-slate-700 hover:text-indigo-600 flex items-center">
            Lihat Live Demo <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-24 bg-indigo-900 relative overflow-hidden">
  <!-- Decorative background elements -->
  <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-indigo-800 blur-3xl opacity-50"></div>
  <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-indigo-800 blur-3xl opacity-50"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-indigo-300 font-semibold tracking-wide uppercase text-sm mb-3">Kisah Nyata</h2>
      <h3 class="text-3xl md:text-4xl font-bold text-white display-font">Apa Kata Mereka?</h3>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Review 1 -->
      <div class="bg-white/10 backdrop-blur-lg border border-white/20 p-8 rounded-2xl" data-aos="fade-up"
        data-aos-delay="100">
        <div class="flex text-amber-400 mb-4 text-sm">
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
        </div>
        <p class="text-indigo-50 font-light leading-relaxed mb-6 italic">"Kami senang menggunakan undangan pernikahan
          online. Desainnya modern, praktis, dan tanggapan dari tamu mudah terkelola seketika!"</p>
        <div class="flex items-center">
          <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/12/12/2586382331.jpg"
            class="w-12 h-12 rounded-full object-cover border-2 border-indigo-400" alt="Ahmad & Fitri">
          <div class="ml-4">
            <h5 class="text-white font-semibold">Ahmad & Fitri</h5>
            <span class="text-indigo-300 text-xs">Jakarta Pusat</span>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="bg-white/10 backdrop-blur-lg border border-white/20 p-8 rounded-2xl" data-aos="fade-up"
        data-aos-delay="200">
        <div class="flex text-amber-400 mb-4 text-sm">
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
        </div>
        <p class="text-indigo-50 font-light leading-relaxed mb-6 italic">"Undangan digital sangat amat membantu dalam
          merencanakan hari besar kami. Desain super cantik, pengiriman instan."</p>
        <div class="flex items-center">
          <img
            src="https://awsimages.detik.net.id/community/media/visual/2021/04/04/penampilan-aurel-hermansyah-dan-atta-halilintar-saat-hari-pernikahan_169.png?w=600&q=90"
            class="w-12 h-12 rounded-full object-cover border-2 border-indigo-400" alt="Aurel & Atta">
          <div class="ml-4">
            <h5 class="text-white font-semibold">Dion & Rina</h5>
            <span class="text-indigo-300 text-xs">Surabaya</span>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="bg-white/10 backdrop-blur-lg border border-white/20 p-8 rounded-2xl" data-aos="fade-up"
        data-aos-delay="300">
        <div class="flex text-amber-400 mb-4 text-sm">
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
            class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <p class="text-indigo-50 font-light leading-relaxed mb-6 italic">"Teman-teman memuji undangan online ini. Sangat
          kekinian dan memberikan sentuhan berkelas pada pernikahan saya. Sangat berterima kasih!"</p>
        <div class="flex items-center">
          <img
            src="https://s4.bukalapak.com/bukalapak-kontenz-production/content_attachments/56859/original/FOTO_19.jpg"
            class="w-12 h-12 rounded-full object-cover border-2 border-indigo-400" alt="Irfan & Tiara">
          <div class="ml-4">
            <h5 class="text-white font-semibold">Irfan & Tiara</h5>
            <span class="text-indigo-300 text-xs">Yogyakarta</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-slate-50">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12" data-aos="fade-up">
      <h3 class="text-3xl font-bold text-slate-900 display-font mb-4">Tanya Jawab (FAQ)</h3>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-delay="100">
      <!-- FAQ 1 -->
      <details
        class="group bg-white rounded-xl border border-slate-200 overflow-hidden open:ring-1 open:ring-indigo-500/20 open:shadow-md transition-all">
        <summary
          class="flex justify-between items-center font-medium cursor-pointer list-none p-5 text-slate-800 select-none">
          <span>Apakah saya bisa mencetak template undangan online ini?</span>
          <span class="transition group-open:rotate-180 text-indigo-500">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </summary>
        <div class="bg-slate-50 text-slate-600 p-5 pt-0 border-t border-slate-100 leading-relaxed font-light">
          Secara teknis Anda dapat menyimpannya ke bentuk PDF, namun resolusi dan gaya layout undangan dibuat khusus
          untuk optimasi dan penarikan visual langsung pada layar layar *smartphone* atau komputer. Undangan digital
          ditujukan murni untuk ranah paperless.
        </div>
      </details>

      <!-- FAQ 2 -->
      <details
        class="group bg-white rounded-xl border border-slate-200 overflow-hidden open:ring-1 open:ring-indigo-500/20 open:shadow-md transition-all">
        <summary
          class="flex justify-between items-center font-medium cursor-pointer list-none p-5 text-slate-800 select-none">
          <span>Apa spesialisasi fitur berlangganan?</span>
          <span class="transition group-open:rotate-180 text-indigo-500">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </summary>
        <div class="bg-slate-50 text-slate-600 p-5 pt-0 border-t border-slate-100 leading-relaxed font-light">
          Tingkat paket menentukan detail kemewahan tema, batas *upload* kualitas galeri foto, modifikasi pesan khusus
          yang tak terbatas untuk para tamu RSVP, memutar Google Maps API yang kompleks, serta akses live support admin
          24 jam nonstop bila dirasa butuh perombakan kilat.
        </div>
      </details>

      <!-- FAQ 3 -->
      <details
        class="group bg-white rounded-xl border border-slate-200 overflow-hidden open:ring-1 open:ring-indigo-500/20 open:shadow-md transition-all">
        <summary
          class="flex justify-between items-center font-medium cursor-pointer list-none p-5 text-slate-800 select-none">
          <span>Apakah saya perlu keahlian koding / mendesain?</span>
          <span class="transition group-open:rotate-180 text-indigo-500">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </summary>
        <div class="bg-slate-50 text-slate-600 p-5 pt-0 border-t border-slate-100 leading-relaxed font-light">
          Seratus persen tidak. Semua manajemen dikontrol santai hanya melalui panel khusus yang kami modifikasi agar
          *user-friendly* seperti bermain ponsel biasa! Admin kami menjamin platform bebas *error*.
        </div>
      </details>
    </div>
  </div>
</section>

<!-- Minimal Inline Footer Alternative -->
<footer class="bg-slate-900 border-t border-slate-800 pt-16 pb-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
      <div class="md:col-span-1">
        <a href="{{ url('/') }}" class="font-bold text-2xl tracking-tight text-white display-font mb-4 block">
          DigiForm
        </a>
        <p class="text-slate-400 text-sm leading-relaxed mb-6">Undangan digital masa depan yang efisien, hemat biaya,
          dan mendukung zero waste campaign untuk alam sekitar.</p>
        <div class="flex justify-center md:justify-start space-x-4">
          <a href="#" class="text-slate-400 hover:text-white transition-colors"><i
              class="fa-brands fa-instagram text-xl"></i></a>
          <a href="#" class="text-slate-400 hover:text-white transition-colors"><i
              class="fa-brands fa-twitter text-xl"></i></a>
          <a href="#" class="text-slate-400 hover:text-white transition-colors"><i
              class="fa-brands fa-tiktok text-xl"></i></a>
        </div>
      </div>
      <div>
        <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Perusahaan</h4>
        <ul class="space-y-2 text-sm text-slate-400">
          <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Kontak</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Layanan</h4>
        <ul class="space-y-2 text-sm text-slate-400">
          <li><a href="#" class="hover:text-white transition-colors">Pembuatan Undangan</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Tema Kustom</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Integrasi e-Wallet</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Support Live</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Berlangganan</h4>
        <p class="text-slate-400 text-sm mb-4">Dapatkan diskon paket menarik untuk Anda.</p>
        <div class="flex">
          <input type="email" placeholder="Email Anda"
            class="bg-slate-800 border-none rounded-l-lg px-4 py-2 w-full text-white text-sm focus:ring-1 focus:ring-indigo-500">
          <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-r-lg transition-colors"><i
              class="fa-solid fa-paper-plane"></i></button>
        </div>
      </div>
    </div>
    <div
      class="border-t border-slate-800 pt-8 mt-8 flex flex-col md:flex-row justify-between items-center text-sm text-slate-500">
      <p>&copy; 2024 DigiForm Networks by Akmal Yonan. All rights reserved.</p>
      <p class="mt-4 md:mt-0">Diciptakan dengan cinta di Indonesia 🇮🇩</p>
    </div>
  </div>
</footer>
@endsection