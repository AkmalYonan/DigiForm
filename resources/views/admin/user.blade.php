@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Paket</h5><button type="button" class="btn btn-sm btn-danger mt-2 mb-3"
                        onclick="location.href='{{ route('admindashboard') }}'">BACK</button>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Birthdate</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Paket_ID</th>
                                    <th scope="col">Level Account</th>
                                    <th scope="col">Is Order ?</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->birthdate }}</td>
                                    <td>{{ $user->gender }}</td>
                                    {{-- <td>{{ $user->paket_id }}</td> --}}
                                    <td>
                                        <form action="{{ route('update-paket-user', ['id' =>  $user->id]) }}"
                                            method="POST" id="update-paket-form">
                                            @csrf
                                            @method('PUT')
                                            <select name="paket_id" onchange="this.form.submit()" @if ($user->id ==
                                                auth()->user()->id) disabled @endif>
                                                @foreach ($pakets as $paket)
                                                <option value="{{ $paket->id }}" {{ $paket->id == $user->paket_id ?
                                                    'selected' : '' }}>
                                                    {{ $paket->id }} - {{ $paket->nama}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </td>
                                    <td>
                                        {{-- {{ $user->level }} --}}
                                        <form action="{{ route('update-level-user', ['id' =>  $user->id]) }}"
                                            method="POST" id="update-level-form">
                                            @csrf
                                            @method('PUT')
                                            <select name="level" onchange="this.form.submit()" @if ($user->id ==
                                                auth()->user()->id) disabled @endif>
                                                @foreach ($levels as $level)
                                                <option value="{{ $level->id }}" {{ $level->id == $user->level ?
                                                    'selected' : '' }}>
                                                    {{ $level->id }} - {{ $level->kelas}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </td>
                                    <td>@if ($user->is_order == 1) <span class="text-success fw-bolder">Sudah
                                            Order!</span>@else Belum @endif</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <form action="{{ route('delete-user', ['id' => $user->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ps-2 text-danger btn btn-link"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                @if ($user->id ==
                                                auth()->user()->id) disabled @endif><i
                                                    class="fa-solid fa-trash fa-lg"></i></button>
                                        </form>
                                    </td>
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