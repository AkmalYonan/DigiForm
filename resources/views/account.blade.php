@extends('layouts.app')

@section('content')
<div class="container pt-4">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3 col-12">
        <div class="rounded rounded-4 shadow">
          <div class="py-1 ps-2 py-md-1 ps-md-5">
            <div class="d-flex align-items-center">
              <img class="img img-responsive rounded-circle" width="50" src="img/profiles.jpg" />
              <div class="ms-3 mt-3">
                <span class="fw-bolder text-roboto text-capitalize fs-5">{{ Auth::user()->name }}</span>
                <br>
                @if(isset($namaPaket))
                @if($namaPaket == 'Bronze' || $namaPaket == 1)
                <p class="text-lead2 fw-bolder">Free Account</p>
                @elseif($namaPaket == 'Silver' || $namaPaket == 2)
                <p class="text-lead2 fw-bolder">Silver Account</p>
                @elseif($namaPaket == 'Gold' || $namaPaket == 3)
                <p class="text-lead2 fw-bolder">Gold Account</p>
                @endif
                @endif
              </div>
            </div>
          </div>

          <hr class="hr">
          <div class=" border-dark-subtle text-center">
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
          <div class="text-center">
            <p class="fs-4 fw-semibold">Lainnya</p>
            {{-- <button type="button" class="btn btn-success">Order History</button>
            <button type="button" class="btn btn-info">Order Status</button> --}}
            <a href="{{ route('homechangeplan') }}"><button type="button" class="btn btn-warning">Change
                Plan</button></a>
            {{-- <a href="{{ route('homeorderhistory') }}"><button type="button" class="btn btn-success">Order
                History</button></a> --}}
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-12 mb-3 mb-lg-0">
        <div class="shadow rounded rounded-4">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-bolder text-dark" id="home-tab" data-bs-toggle="tab"
                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                aria-selected="true">Account Information</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-bolder text-dark" id="profile-tab" data-bs-toggle="tab"
                data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                aria-selected="false">Order History</button>
            </li>

          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
              tabindex="0">
              <div class="py-2 px-2 py-5 px-md-5">
                <p class="fs-3 fw-bolder">Account Information</p>
                <form action="{{ route('account.change_password') }}" method="post">
                  <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="username" value="{{ Auth::user()->name }}" disabled />
                    <label for="username">Username</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="gmail" value="{{ Auth::user()->email }}" disabled />
                    <label for="gmail">Gmail</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="gender" value="{{ Auth::user()->gender }}" disabled />
                    <label for="gender">Gender</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="created_at" value="{{ Auth::user()->created_at }}"
                      disabled />
                    <label for="created_at">Account Created</label>
                  </div>
                  {{-- <div class="form-floating">
                    <label class="form-label mt-2 ms-1" for="form3Example4">New Password</label>
                    <input type="text" class="form-control" name="newpassword" placeholder="XYZ...." />
                  </div>
                  <button type="button" class="btn btn-primary mt-4">Submit</button> --}}
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              <div class="py-2 px-2 py-5 px-md-5">
                <p class="fs-3 fw-bolder">Order Information</p>

                <div class="table-responsive">
                  <table class="table table-bordered text-center rounded rounded-3 overflow-hidden">
                    <thead>
                      <tr class="table-success">
                        <th scope="col">ID Pesan</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">Email User</th>
                        <th scope="col">Status Order</th>
                        <th scope="col">Nomor User</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <td>{{ $pesan->id }}</td>
                        <td>{{ $pesan->user->name }}</td>
                        <td>{{ $pesan->data->email }}</td>
                        <td>@if ($pesan->status == 1)
                          Confirmed!
                          @else
                          Not Confirmed
                          @endif</td>
                        <td class="btn btn-link" onclick="location.href='https://wa.me/{{ $pesan->data->no_wa }}'">
                          {{ $pesan->data->no_wa }}</td>
                        <td><a href="{{ route('homeorder') }}" class="btn btn-link">Details</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection