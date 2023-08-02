@extends('layouts.app')

@section('content')
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h1 class="fw-light text-lead2">Bagikan Momen bahagiamu lebih Mudah <br><span class="text-lead">With</span><span
            class="fw-bold"> DigiForm</span></h1>
        @if(Auth::check())
        <a href="{{ route('hometemplate') }}" class="btn btn-outline-dark fw-bolder"
          style="border-bottom-width: 2px">Lihat Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
        @else
        <a href="{{ route('login') }}" class="btn btn-outline-dark fw-bolder" style="border-bottom-width: 2px">Lihat
          Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
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
      <div class="col-12 col-md-5 w-50">
        <div class="text-start">
          <h2 class="fw-light">Why With Us ?</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Repellendus ab nulla dolorum autem nisi officiis blanditiis
            voluptatem hic, assumenda aspernatur facere ipsam nemo ratione
            cumque magnam enim fugiat reprehenderit expedita.
          </p>
          @if(Auth::check())
          <a href="{{ route('hometemplate') }}" class="btn btn-dark w-100 fw-bolder"
            style="border-bottom-width: 2px">Lihat Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
          @else
          <a href="{{ route('login') }}" class="btn btn-dark w-100 fw-bolder" style="border-bottom-width: 2px">Lihat
            Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="bg-warna1 py-5">
    <div class="container">
      <p class="text-lead2 display-4 ms-3">Benefit</p>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6">
          <ul class="fs-6">
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel
              eveniet enim dolore molestiae! Harum, repellat nostrum odit ab
              neque tempore suscipit, aspernatur cum recusandae, officia
              quos itaque nesciunt dolorum dignissimos.
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
              earum debitis similique cupiditate odit ex suscipit? Nulla
              iusto consectetur voluptatum, temporibus labore praesentium
              nisi quasi beatae laborum nostrum, consequuntur nam.
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              autem voluptatem cupiditate est. Reiciendis assumenda
              blanditiis qui animi fugiat nam cumque, debitis quae deleniti
              eligendi pariatur optio. Reprehenderit, laborum sunt?
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-6">
          <ul class="fs-6">
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel
              eveniet enim dolore molestiae! Harum, repellat nostrum odit ab
              neque tempore suscipit, aspernatur cum recusandae, officia
              quos itaque nesciunt dolorum dignissimos.
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
              earum debitis similique cupiditate odit ex suscipit? Nulla
              iusto consectetur voluptatum, temporibus labore praesentium
              nisi quasi beatae laborum nostrum, consequuntur nam.
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              autem voluptatem cupiditate est. Reiciendis assumenda
              blanditiis qui animi fugiat nam cumque, debitis quae deleniti
              eligendi pariatur optio. Reprehenderit, laborum sunt?
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container py-5">
      <div class="row justify-content-center">
        @foreach ($Pakets as $paket)
        <div class="col-12 col-md-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title fs-2">
                {{ $paket->nama }} <br /><span class="fs-6 fw-light">{{ $paket->harga }}</span>
              </h5>
              <p class="card-text">
              <ul class="fw-light">
                @foreach ( $Fiturs as $fitur)
                <li>{{ $fitur->nama}}</li>
                @endforeach
              </ul>
              </p>
              @if(Auth::check())
              <a href="{{ route('hometemplate') }}" class="btn btn-dark w-100 fw-bolder"
                style="border-bottom-width: 2px">Lihat
                Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
              @else
              <a href="{{ route('login') }}" class="btn btn-dark w-100 fw-bolder" style="border-bottom-width: 2px">Lihat
                Templates <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
              @endif
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="py-5 bg-custom">
    <div class="container">
      <div class="rounded-4 text-white shadow p-5 text-center mb-5">
        <p class="fw-semibold fs-1">
          Tunggu apalagi ? Yuk segera buat undangan pernikahanmu di <span>DigiForm</span>
        </p>
        <div class="countdown py-4" data-aos="fade-up">
          <div class="row justify-content-center fs-3 pb-3 fw-bold contdown">
            <div class="col-6 col-md-2">
              <div class="countdown-item border p-3 rounded-3">
                <span id="days" class="countdown-value"></span><br />
                <span class="countdown-label">Days</span>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="countdown-item border p-3 rounded-3">
                <span id="hours" class="countdown-value"></span><br />
                <span class="countdown-label">Hours</span>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="countdown-item border p-3 rounded-3">
                <span id="minutes" class="countdown-value"></span><br />
                <span class="countdown-label">Minutes</span>
              </div>
            </div>
          </div>
          <p class="lead">*Potongan harga akan berakhir pada 15 Juli 2023</p>
          @if(Auth::check())
          <a href="{{ route('hometemplate') }}" class="btn btn-light w-50 fw-bolder"
            style="border-bottom-width: 2px">Pesan Sekarang <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
          @else
          <a href="{{ route('login') }}" class="btn btn-light w-50 fw-bolder" style="border-bottom-width: 2px">Pesan
            Sekarang <i class="fa-solid fa-right-to-bracket fa-lg ps-2"></i></a>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container rounded rounded-3 mb-5">
      <div class="container w-75 py-5">
        <div class="text-center text-dark">
          <p class="lead">Contoh Undangan</p>
          <p class="display-5">Contoh Undangan Online</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque corporis quos iure qui possimus
            magni, quia temporibus, vitae assumenda modi odit neque. Deleniti sapiente nam, facere sequi
            recusandae ipsam modi!</p>
        </div>
      </div>
    </div>
    <div class="container w-75">
      <div class="row justify-content-center gap-3">
        <div class="col">
          <div class="card shadow-lg rounded">
            <img src="{{ asset('img/akmil2.png') }}" class="card-img-top" alt="..."
              style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bolder">Something & Something <br><span class="fs-6 fw-lighter">Elegant</span>
              </h5>
              <p class="card-text text-muted"> Lorem ipsum dolor sit, amet consectetur adipisicing elit...</p>
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
              <h5 class="card-title fw-bolder">Something & Something <br><span class="fs-6 fw-lighter">Elegant</span>
              </h5>
              <p class="card-text text-muted"> Lorem ipsum dolor sit, amet consectetur adipisicing elit...</p>
              <a href="https://artaxsora.github.io/Undangan2/" class="btn btn-outline-dark">Lihat Undangan</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-lg rounded">
            <img src="{{ asset('img/hehe.jpg') }}" class="card-img-top" alt="..."
              style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bolder">Something & Something <br><span class="fs-6 fw-lighter">Elegant</span>
              </h5>
              <p class="card-text text-muted"> Lorem ipsum dolor sit, amet consectetur adipisicing elit...</p>
              <a href="https://bakaroti.github.io/nikahlagi/" class="btn btn-outline-dark">Lihat Undangan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <div class="py-5 bg-warna1">
    <div class="container w-50 text-center">
      <p class="fs-5 fw-bold">For Your Information, You can Contact Me</p>
      <a href="#" class="btn btn-outline-dark w-25 fw-bold" style="border-bottom-width: 2px">DigiForm</a>
    </div>
  </div>
  </div>
</section>
@endsection