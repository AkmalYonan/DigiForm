@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="container shadow-lg py-3 my-3 rounded-3">
                        <p class="lead">Input Template Baru</p>
                        <form action="{{ route('update-paket', ['id' => $pakets->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Isi formulir edit sesuai dengan kebutuhan aplikasi Anda -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $pakets->id }}"
                                    disabled>
                                <label for="floatingInput">ID Template</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $pakets->nama }}"
                                    name="namaBaru" required>
                                <label for="floatingInput">Nama Template Baru</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $pakets->harga }}"
                                    name="hargaBaru" required>
                                <label for="floatingInput">Harga Baru</label>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success w-100 mt-2">Submit</button>
                        </form>
                    </div>
                    <button type="button" class="btn btn-sm btn-danger mt-2 mb-3"
                        onclick="location.href='{{ route('admin-addpaket') }}'">BACK</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection