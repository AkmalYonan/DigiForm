@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row justify-content-center g-2">
        <div class="col-12 col-md-3">
            <div class="card bg-dark-subtle" onclick="location.href='{{ route('admin-addtemplate') }}'">
                <div class="card-body animate-dark">
                    <h5 class="card-title fs-6">Total Template (Design)</h5>
                    <p class="card-text fs-1 fw-bolder">{{ $totalTemplates }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card bg-info-subtle" onclick="location.href='{{ route('admin-addpaket') }}'">
                <div class="card-body animate-dark">
                    <h5 class="card-title">Total Paket</h5>
                    <p class="card-text fs-1 fw-bolder">{{ $totalPakets }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card bg-danger-subtle" onclick="location.href='{{ route('admin-user') }}'">
                <div class="card-body animate-dark">
                    <h5 class="card-title">Total User</h5>
                    <p class="card-text fs-1 fw-bolder">{{ $totalUser }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card bg-warning-subtle" onclick="location.href='{{ route('admin-addfitur') }}'">
                <div class="card-body animate-dark">
                    <h5 class="card-title">Total Fitur</h5>
                    <p class="card-text fs-1 fw-bolder">{{ $totalFitur }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card bg-warning-subtle" onclick="location.href='{{ route('admin-viewPesan') }}'">
                <div class="card-body animate-dark">
                    <h5 class="card-title">Total Pesanan</h5>
                    <p class="card-text fs-1 fw-bolder">{{ $totalPesan }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card bg-danger-subtle" onclick="location.href='{{ route('admin-addlevel') }}'">
                <div class="card-body animate-dark">
                    <h5 class="card-title">Total Level</h5>
                    <p class="card-text fs-1 fw-bolder">{{ $totalLevel }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card bg-primary-subtle" onclick="location.href='{{ route('admin-settingPaket') }}'">
                <div class="card-body animate-dark">
                    <h5 class="card-title">Detail Paket Template</h5>
                    <p class="card-text fs-1 fw-bolder">NULL</p>
                </div>
            </div>
        </div>
        {{-- <div class="col-12 col-md-3">
            <div class="card bg-info-subtle">
                <div class="card-body animate-dark">
                    <h5 class="card-title">Detail Paket Fitur</h5>
                    <p class="card-text fs-1 fw-bolder">NULL</p>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="row mt-3">
        <div class="col-12 col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-3">Setting Website / Dashboard</h5>
                    <form action=" {{ route('admin-settingHp') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nomor HP Website :</label>
                            <div class="row justify-content-center">
                                <div class="col-7 col-md-10">
                                    @foreach ($admins as $admin)
                                    <input type="text" class="form-control" id="noHp" name="noHp"
                                        placeholder="+628123xxx" value="{{ $admin->noHp }}" required>
                                    @endforeach
                                </div>
                                <div class="col-5 col-md-2">
                                    <button type="submit" class="btn shadow btn-dark mb-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action=" {{ route('admin-settingEmail') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Email Admin Website :</label>
                            <div class="row justify-content-center">
                                <div class="col-7 col-md-10">
                                    @foreach ($admins as $admin)
                                    <input type="text" class="form-control" id="emailAdmin" name="emailAdmin"
                                        placeholder="email@email.com" value="{{ $admin->emailAdmin }}" required>
                                    @endforeach
                                </div>
                                <div class="col-5 col-md-2">
                                    <button type="submit" class="btn shadow btn-dark mb-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-3">Recent Order User</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID Pesan</th>
                                    <th scope="col">Account User</th>
                                    <th scope="col">Email Pesan</th>
                                    <th scope="col">Order At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesans as $pesan)
                                <tr>
                                    <th scope="row">{{ $pesan->id }}</th>
                                    <td>{{ $pesan->id_user }} - {{ $pesan->user->name }}</td>
                                    <td>{{ $pesan->data->email }}</td>
                                    <td>{{$pesan->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection