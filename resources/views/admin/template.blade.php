@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card bg-dark-subtle">
                <div class="card-body">
                    <h5 class="card-title fs-6">Total Template (Design)</h5>
                    <p class="card-text fs-1 fw-bolder">{{ $totalTemplates }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="container shadow-lg py-3 my-3 rounded-3">
                        <p class="lead">Input Template Baru</p>
                        <form action="{{ route('store-template') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="namaTemplate" class="form-control" id="floatingInput" required>
                                <label for="floatingInput">Nama Template</label>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success w-100 mt-2">Submit</button>
                        </form>
                    </div>
                    <button type="button" class="btn btn-sm btn-danger mt-2 mb-3"
                        onclick="location.href='{{ route('admindashboard') }}'">BACK</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Template</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($templates as $template)
                            <tr>
                                <td>{{ $template->id }}</td>
                                <td>{{ $template->nama }}</td>
                                <td class="ps-3">
                                    <a href="{{ route('edit-template', ['id' => $template->id]) }}">
                                        <i class="fa-solid fa-pen-to-square fa-lg"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('delete-template', ['id' => $template->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a type="submit" class="ps-2 text-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                class="fa-solid fa-trash fa-lg"></i></a>
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
@endsection