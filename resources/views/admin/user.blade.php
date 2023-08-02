@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Paket</h5>
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
                                    <form action="{{ route('update-paket-user', $user->id) }}" method="POST"
                                        id="update-paket-form">
                                        @csrf
                                        @method('PUT')
                                        <select name="paket_id"
                                            onchange="document.getElementById('update-paket-form').submit()">
                                            @foreach ($pakets as $paket)
                                            <option value="{{ $paket->id }}" {{ $paket->id == $user->paket_id ?
                                                'selected' : '' }}>
                                                {{ $paket->id }} - {{ $paket->nama}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </form>
                                </td>
                                <td>{{ $user->level }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-danger mt-2 mb-3"
                onclick="location.href='{{ route('admindashboard') }}'">BACK</button>
        </div>
    </div>
</div>
@endsection