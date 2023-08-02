@extends('layouts.app')

@section('content')
<div class="container pt-4">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body text-center">
            <img class="img img-responsive rounded-circle my-3" width="130" src="img/profiles.jpg" />
            <h3></h3>
            <p></p>
            <a class="btn btn-danger btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </div>

        <div class="container py-2 my-4 rounded border border-dark-subtle text-center">
          <p class="fs-4 fw-semibold">Account Type</p>
          @if(isset($namaPaket))
          @if($namaPaket == 'Bronze' || $namaPaket == 1)
          <img src="img/bronze_logo.png" class="img img-responsive pb-2" width="60" alt="Bronze" title="Bronze">
          @elseif($namaPaket == 'Silver' || $namaPaket == 2)
          <img src="img/silver_logo.webp" class="img img-responsive pb-2" width="60" alt="Silver" title="Silver">
          @elseif($namaPaket == 'Gold' || $namaPaket == 3)
          <img src="img/gold_logo.png" class="img img-responsive pb-2" width="60" alt="Gold" title="Gold">
          @endif
          <!-- Default image jika tidak ada kondisi yang cocok -->
          {{-- <img src="{{ asset('img/default_logo.png') }}" class="img img-responsive" width="60" alt="Default"
            title="Default">
          @endif --}}

          <p class="fs-5 text-dark fw-bold">{{ $namaPaket }}</p>
          @else
          <p>Anda belum memiliki paket. Silahkan Untuk Hubungi Admin</p>
          @endif
        </div>
        <div class="container py-4 my-4 rounded border border-dark-subtle text-center">
          <p class="fs-4 fw-semibold">Lainnya</p>
          {{-- <button type="button" class="btn btn-success">Order History</button>
          <button type="button" class="btn btn-info">Order Status</button> --}}
          <a href="{{ route('homechangeplan') }}"><button type="button" class="btn btn-warning">Change Plan</button></a>
        </div>
      </div>
      <div class="col-lg-6 mb-3 mb-lg-0">
        <div class="card">
          <div class="card-body py-5 px-md-5">
            <p class="fs-3 fw-bolder">Account Information</p>
            <form action="{{ route('account.change_password') }}" method="post">
              <div class="form-outline mb-2">
                <label class="form-label mt-2 ms-1" for="form3Example3">Username</label>
                <input type="text" id="form3Example3" class="form-control" name="username"
                  value="{{ Auth::user()->name }}" disabled />
              </div>

              <div class="form-outline">
                <label class="form-label mt-2 ms-1" for="form3Example4">Gmail</label>
                <input type="text" id="form3Example4" class="form-control" name="gmail"
                  value="{{ Auth::user()->email }}" disabled />
              </div>
              <div class="form-outline">
                <label class="form-label mt-2 ms-1" for="form3Example4">Gender</label>
                <input type="text" id="form3Example4" class="form-control" name="gender"
                  value="{{ Auth::user()->gender }}" disabled />
              </div>
              <div class="form-outline">
                <label class="form-label mt-2 ms-1" for="form3Example4">Account Created</label>
                <input type="text" id="form3Example4" class="form-control" name="created_at"
                  value="{{ Auth::user()->created_at }}" disabled />
              </div>
              {{-- <div class="form-outline">
                <label class="form-label mt-2 ms-1" for="form3Example4">New Password</label>
                <input type="text" id="form3Example4" class="form-control" name="newpassword" placeholder="XYZ...." />
              </div>
              <button type="button" class="btn btn-primary mt-4">Submit</button> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection