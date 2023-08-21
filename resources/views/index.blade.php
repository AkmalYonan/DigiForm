@extends('layouts.app')

@section('content')
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h1 class="fw-light text-lead2">Bagikan Momen bahagiamu lebih Mudah <br><span class="text-lead">With</span><span
            class="fw-bold"> DigiForm</span></h1>
        @if(Auth::check())
        <a href="{{ route('homeorder') }}" class="btn btn-outline-dark fw-bolder" style="border-bottom-width: 2px">Buat
          Undangan Sekarang</a>
        @else
        <a href="{{ route('login') }}" class="btn btn-outline-dark fw-bolder" style="border-bottom-width: 2px">Buat
          Undangan Sekarang</a>
        @endif
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container py-5">
    <div class="row gap-2 justify-content-around align-items-center">
      <div class="col-12 col-md-5">
        <div class="container text-center">
          <img src="{{ asset('img/index_phone.png') }}" class="img-fluid w-50" alt="" />
        </div>
      </div>
      <div class="col-12 col-md-5">
        <div class="text-start text-center">
          <div class="container">
            <h2 class="fw-light">Kenapa Harus dengan Kita?</h2>
            <p>
              Buat undangan pernikahanmu dengan mudah dan elegan menggunakan platform kami, sambil menjaga lingkungan
              dengan pilihan undangan digital yang ramah lingkungan dan nikmati harga terjangkau tanpa mengorbankan
              kualitas.
            </p>
          </div>

          @if(Auth::check())
          <a href="{{ route('hometemplate') }}" class="btn btn-dark w-75 fw-bolder"
            style="border-bottom-width: 2px">Lihat Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
          @else
          <a href="{{ route('login') }}" class="btn btn-dark w-75 fw-bolder" style="border-bottom-width: 2px">Lihat
            Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="bg-warna1 py-5" id="benefit">
    <div class="container">
      <p class="text-lead2 display-4 ">Benefit</p>
      <div class="row justify-content-center row-cols-3 g-3">
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="bg-warnaIcon2 p-3 rounded-circle">
                  <i class="fa-solid fa-bolt fa-2xl" style="color: #ffffff;"></i>
                </div>
                <div class="ms-3">
                  <span class="fw-bold fs-5">Mudah dan Cepat</span>
                  <br>
                  Buat undangan pernikahan online dengan mudah dan cepat melalui platform kami.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="bg-warnaIcon2 p-3 rounded-circle">
                  <i class="fa-solid fa-share-nodes fa-2xl" style="color: #ffffff; "></i>
                </div>
                <div class="ms-3">
                  <span class="fw-bold fs-5"> Kirim Undangan Secara
                    Digital</span><br> Bagikan undangan pernikahan Anda dengan mudah melalui
                  email atau media
                  sosial.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="bg-warnaIcon2 p-3 rounded-circle">
                  <i class="fa-solid fa-stamp fa-xl" style="color: #ffffff; "></i>
                </div>
                <div class="ms-3">
                  <span class="fw-bold fs-5"> Konfirmasi Tamu Otomatis</span><br> Terima konfirmasi kehadiran tamu
                  secara otomatis melalui fitur
                  RSVP kami.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="bg-warnaIcon2 p-3 rounded-circle">
                  <i class="fa-solid fa-print fa-xl" style="color: #ffffff;"></i>
                </div>
                <div class="ms-3">
                  <span class="fw-bold fs-5"> Cetak Opsi</span><br> Jika
                  diinginkan, cetak undangan pernikahan online Anda dalam bentuk fisik.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="bg-warnaIcon2 p-3 rounded-circle" style="width: 55px;">
                  <i class="fa-solid fa-signature fa-xl" style="color: #ffffff;"></i>
                </div>
                <div class="ms-3">
                  <span class="fw-bold fs-5"> Tampilan Elegan</span><br>
                  Pilih dari berbagai desain undangan pernikahan elegan yang sesuai
                  dengan tema pernikahan Anda.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="bg-warnaIcon2 p-3 rounded-circle">
                  <i class="fa-solid fa-coins fa-xl" style="color: #ffffff;"></i>
                </div>
                <div class="ms-3">
                  <span class="fw-bold fs-5"> Hemat Biaya</span><br>
                  Dapatkan undangan pernikahan online dengan harga terjangkau daripada
                  undangan cetak fisik
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2" id="price">
    <div class="container py-5">
      <div class="container w-75 mb-5">
        <div class="text-center text-dark">
          <p class="display-5">Paket Undangan Digital</p>
          <p>Jelajahi pilihan paket pesanan kami yang beragam, dari
            yang paling ekonomis hingga yang paling mewah. tunggu apa lagi? Segera pesan paket undangan impian
            Anda dan buat acara Anda menjadi sorotan yang tak terlupakan!</p>
        </div>
      </div>
      <div class="row justify-content-center">
        @if ($Pakets)
        @foreach ($Pakets as $paket)
        <div class="col-12 col-md-4" data-aos="fade-up">
          <div class="card mb-3 custom-card">
            <div class="card-body">
              <h5 class="card-title fs-1 text-lead2 fw-bolder" style="color: #B59410">
                {{ $paket->nama }}</h5>
              <p class="fs-4 text-roboto fw-bolder text-lead2 text-hargaPaket">{{ $paket->harga }}</p>
              <p class="card-text">
              <ul class="fw-light fitur-list">
                @foreach ($paket->detailPaketFitur as $detailPaketFitur)
                <li>{{ $detailPaketFitur->fitur->nama }}</li>
                @endforeach
              </ul>
              </p>
              @if(Auth::check())
              <a href="{{ route('hometemplate') }}" class="btn btn-dark w-100 fw-bolder"
                style="border-bottom-width: 2px">Lihat
                Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
              @else
              <a href="{{ route('login') }}" class="btn btn-dark w-100 text-roboto"
                style="border-bottom-width: 2px">Lihat
                Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
              @endif
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </div>

  {{-- PAGE KUPON --}}
  {{--
  <div class="py-5 bg-custom">
    <div class="container" data-aos="fade-up">
      <div class="rounded-4 bg-gradient-4 text-white shadow p-5 text-center mb-5">
        <p class="fw-semibold fs-1">
          Tunggu apalagi ? Yuk segera buat undangan pernikahanmu di <span>DigiForm</span>
        </p>

        <hr class="horizontal-dark">
        <div class="countdown py-4 aos-init">
          <div class="row justify-content-center fs-3 fw-bold contdown">
            <div class="col-6 col-md-2">
              <div class="countdown-item">
                <span id="days" class="countdown-value fs-2"></span><br>
                <span class="countdown-label fs-6">Days</span>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="countdown-item">
                <span id="hours" class="countdown-value fs-2"></span><br>
                <span class="countdown-label fs-6">Hours</span>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="countdown-item">
                <span id="minutes" class="countdown-value fs-2"></span><br>
                <span class="countdown-label fs-6">Minutes</span>
              </div>
            </div>

            <hr class="horizontal-dark my-4">

            <p class="fs-6 text-light">*Potongan harga akan berakhir pada 15 Juli 2025</p>
            @if(Auth::check())
            <a href="{{ route('hometemplate') }}" class="btn btn-light w-50 text-roboto fw-bolder"
              style="border-bottom-width: 2px">Pesan Sekarang</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-light w-50 fw-bolder" style="border-bottom-width: 2px">Pesan
              Sekarang <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="py-5 bg-custom">
    <div class="container">
      <div class="row justify-content-center g-3">
        <p class="fw-bold fs-2 text-center " style="color:#ffffff;">PIlihan Tema Undangan Ekslusif</p>
        <div class="col-md-4" data-aos="fade-up">
          <div class="container pt-3 bg-white rounded-3 pb-2">
            <div class="gambar">
              <img src="https://github.com/bakaroti/resource/blob/main/temp4.jpg?raw=true" class="img-fluid rounded-3"
                alt="">
            </div>
            <div class="teks mt-3 d-flex justify-content-between align-items-center">
              <div>
                <span class="lead fw-bold">AMARA <br><span class="fs-6 fw-light">Free</span></span>
              </div>
              <div class="gap-3 mb-3">
                <a href="{{ route('homeorder') }}" class="my-2 btn btn-sm btn-dark">Order</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <div class="container pt-3 bg-white rounded-3 pb-2">
            <div class="gambar">
              <img src="https://github.com/bakaroti/resource/blob/main/temp3.jpg?raw=true" class="img-fluid rounded-3"
                alt="">
            </div>
            <div class="teks mt-3 d-flex justify-content-between align-items-center">
              <div>
                <span class="lead fw-bold">Prima <br><span class="fs-6 fw-light">Free</span></span>

              </div>
              <div class="gap-3 mb-3">
                <a href="{{ route('homeorder') }}" class="my-2 btn btn-sm btn-dark">Order</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <div class="container pt-3 bg-white rounded-3 pb-2">
            <div class="gambar">
              <img src="https://github.com/bakaroti/resource/blob/main/temp6.jpg?raw=true" class="img-fluid rounded-3"
                alt="">
            </div>
            <div class="teks mt-3 d-flex justify-content-between align-items-center">
              <div>
                <span class="lead fw-bold">Arta <br><span class="fs-6 fw-light">Free</span></span>

              </div>
              <div class="gap-3 mb-3">
                <a href="{{ route('homeorder') }}" class="my-2 btn btn-sm btn-dark">Order</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="py-5" id="contoh">
    <div class="container rounded rounded-3 mb-5">
      <div class="container w-75 py-5">
        <div class="text-center text-dark">
          <p class="display-5">Contoh Undangan Online</p>
          <p>Tunggu apa lagi? Jadilah bagian dari pesta digital kami yang akan dipenuhi dengan kegembiraan dan kejutan.
            Kami mengundangmu untuk merayakan momen istimewa dalam gaya modern dengan undangan online kami.
            Jangan lewatkan kesempatan untuk merasakan pengalaman yang berbeda dengan undangan yang bisa diakses dengan
            satu klik saja. </p>
        </div>
      </div>
    </div>
    <div class="container mb-5 w-75">
      <div class="row justify-content-center gap-3" data-aos="fade-up">
        <div class="col">
          <div class="card shadow-lg rounded">
            <img src="{{ asset('img/akmil2.png') }}" class="card-img-top" alt="..."
              style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bolder">Akmal & Ratna <br><span class="fs-6 fw-lighter">Amartha</span>
              </h5>
              <p class="card-text text-muted">Sesungguhnya hati ini telah terhimpun dalam cinta dan bertemu dalam...</p>
              <a href="https://akmalyonan.github.io/WeddingRatnaAkmalV2/" class="btn btn-outline-dark">Lihat
                Undangan</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-lg rounded">
            <img src="{{ asset('img/foto3.jpg') }}" class="card-img-top" alt="..."
              style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bolder">Arya & Salamah <br><span class="fs-6 fw-lighter">Prima</span>
              </h5>
              <p class="card-text text-muted">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan...</p>
              <a href="https://artaxsora.github.io/Undangan2/" class="btn btn-outline-dark">Lihat Undangan</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-lg rounded">
            <img src="{{ asset('img/hehe.jpg') }}" class="card-img-top" alt="..."
              style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bolder">Dafa & Zee <br><span class="fs-6 fw-lighter">Yonans</span>
              </h5>
              <p class="card-text text-muted"> Puji syukur kehadirat Tuhan YME atas karunianya anda...</p>
              <a href="https://bakaroti.github.io/nikahlagi/" class="btn btn-outline-dark">Lihat Undangan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="py-5 bg-warna2">
    <div class="container">
      <div class="text-center text-white">
        <h2>Apa yang Customer Katakan?</h2>
      </div>
      <div class="container testimonial-inner p-5">
        <div class="row d-flex justify-content-center g-2" data-aos="fade-up">
          <div class="col-md-4 col-12">
            <div class="tour-desc bg-white p-3 rounded-3">
              <div class="tour-text color-grey-3 text-center">&ldquo;Kami senang menggunakan undangan pernikahan
                online. Desainnya modern, praktis, dan tanggapan tamu mudah terkelola! &rdquo;</div>
              <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                  src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/12/12/2586382331.jpg" alt="">
              </div>
              <div class="link-name d-flex justify-content-center">Ahmad & Fitri</div>
              <div class="link-position d-flex justify-content-center">Pengantin Baru</div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="tour-desc bg-white p-3 rounded-3">
              <div class="tour-text color-grey-3 text-center">&ldquo;Undangan digital sangat membantu merencanakan
                pernikahan kami. Desain cantik, pengiriman mudah melalui email dan media sosial.&rdquo;</div>
              <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                  src="https://awsimages.detik.net.id/community/media/visual/2021/04/04/penampilan-aurel-hermansyah-dan-atta-halilintar-saat-hari-pernikahan_169.png?w=600&q=90"
                  alt=""></div>
              <div class="link-name d-flex justify-content-center">Dion & Rina</div>
              <div class="link-position d-flex justify-content-center">Pengantin Baru</div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="tour-desc bg-white p-3 rounded-3">
              <div class="tour-text color-grey-3 text-center">&ldquo;Undangan online yang keren! Teman kami
                memberi pujian atas inovasi ini. Terima kasih banyak,sentuhan istimewa pada pernikahan ...&rdquo;
              </div>
              <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                  src="https://s4.bukalapak.com/bukalapak-kontenz-production/content_attachments/56859/original/FOTO_19.jpg"
                  alt=""></div>
              <div class="link-name d-flex justify-content-center">Ahmad & Fitri</div>
              <div class="link-position d-flex justify-content-center">Pengantin Baru</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="py-5 container w-75">
    <p class="fs-3 fw-bold text-center ">FAQ</p>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            Apakah saya bisa mencetak template undangan pernikahan online jika diperlukan?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Meskipun template undangan pernikahan online lebih cocok untuk didistribusikan secara digital, Anda
            tetap
            dapat mencetaknya jika diperlukan. Anda dapat menyimpan desain undangan dalam format cetak seperti PDF
            dan
            mencetaknya di percetakan atau printer pribadi.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Apa keuntungan menggunakan template undangan pernikahan berbayar?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Template undangan pernikahan berbayar biasanya menawarkan desain yang lebih profesional, lebih banyak
            fitur,
            dan dukungan pelanggan. Selain itu, hak penggunaan penuh seringkali disertakan dalam pembelian, sehingga
            Anda dapat menggunakannya tanpa batasan.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Apakah saya perlu memiliki keahlian desain untuk menggunakan template undangan pernikahan?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Tidak selalu. Banyak template undangan pernikahan sudah didesain dengan baik dan mudah untuk diedit
            bahkan
            oleh orang yang tidak memiliki keahlian desain tinggi. Namun, jika Anda ingin melakukan perubahan yang
            lebih
            kompleks, pengetahuan desain grafis akan membantu.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .testimonial-inner img.tm-people {
    width: 60px;
    height: 60px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -o-object-fit: cover;
    object-fit: cover;
    max-width: none
  }

  .bg-warnaIcon2 {
    background-color: rgba(8, 121, 243, 0.6);
  }

  .accordion-button:not(.collapsed) {
    background-color: #658864;
    color: #ffffff;
  }

  .accordion-button:not(.collapsed):after {
    background-image: url('https://github.com/bakaroti/resource/blob/main/data_image_svg+xml,%E2%80%A6.png?raw=true');
    transform: var(--bs-accordion-btn-icon-transform);
  }
</style>
@include('layouts.footer')
@endsection