{{-- @dd($datas) --}}
@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-12">
            <h5 class="fs-3 fw-bold pb-3 text-lead2 text-center">Detail Pesan</h5>
            <div class="table-responsive">
                <table class="table table-bordered text-center rounded rounded-3 overflow-hidden">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">ID Pesan</th>
                            <th scope="col">ID User</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Email User</th>
                            <th scope="col">Status Order</th>
                            <th scope="col">Nomor User</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($pesans as $pesan)
                        <tr>
                            <td>{{ $pesan->id }}</td>
                            <td>{{ $pesan->id_user }}</td>
                            <td>{{ $pesan->user->name }}</td>
                            <td>{{ $pesan->data->email }}</td>
                            <td>
                                <form action="{{ route('admin-updateStatus', ['id' =>  $pesan->id]) }}" method="POST"
                                    id="admin-updateStatus">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" onchange="this.form.submit()">
                                        <option value="0" @if ($pesan->status == 0) selected @endif> 0 - unConfirm
                                        </option>
                                        <option value="1" @if ($pesan->status == 1) selected @endif> 1 - Confirmed
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td class="btn btn-link" onclick="location.href='https://wa.me/{{ $pesan->data->no_wa }}'">
                                https://wa.me/{{ $pesan->data->no_wa }}</td>
                            <td><a href="{{ route('admin-viewPesan') }}/{{ $pesan->data->id_pesan }}"
                                    class="btn btn-link">Details</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection