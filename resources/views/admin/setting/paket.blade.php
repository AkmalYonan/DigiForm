@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="container shadow-lg py-3 my-3 rounded-3">
                <p class="lead">Setting Template<span class="font-kecil"><br>Pilih Paket untuk Mensetting bagian
                        Template</span>
                </p>
                <form action="{{ route('admin-updatedetailTemplate') }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="pb-3">
                        <select class="form-select">
                            @foreach ($pakets as $paket)
                            <option value="{{$paket->id}}">{{$paket->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    @foreach ($templates as $template)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$template->id}}" name="checkbox"
                            id="flexCheck{{$template->id}}"> <!-- Unique ID for each checkbox -->
                        <label class="form-check-label" for="flexCheck{{$template->id}}">
                            {{$template->nama}}
                        </label>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-sm btn-success w-100 mt-2">Submit</button>
                </form>
            </div>
            <button type="button" class="btn btn-sm btn-danger mt-2 mb-3"
                onclick="location.href='{{ route('admindashboard') }}'">BACK</button>
        </div>
        <div class="col-12 col-md-6">
            <div class="container shadow-lg py-3 my-3 rounded-3">
                <p class="lead">Setting Fitur <span class="font-kecil"><br>Pilih Paket untuk Mensetting bagian
                        Fitur</span>
                </p>
                <form action="{{ route('admin-updatedetailTemplate') }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="pb-3">
                        <select class="form-select" id="paketDropdown-fitur">
                            @foreach ($pakets as $paket)
                            <option value="{{$paket->id}}">{{$paket->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    @foreach ($fiturs as $fitur)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$fitur->id}}" name="checkbox"
                            id="flexCheckFitur{{$fitur->id}}"> <!-- Unique ID for each checkbox -->
                        <label class="form-check-label" for="flexCheckFitur{{$fitur->id}}">
                            {{$fitur->nama}}
                        </label>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-sm btn-success w-100 mt-2">Submit</button>
                </form>
            </div>
            <button type="button" class="btn btn-sm btn-danger mt-2 mb-3"
                onclick="location.href='{{ route('admindashboard') }}'">BACK</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery library -->
<script>
    $(document).ready(function () {
        // Saat dropdown paket berubah
        $('#paketDropdown-fitur').change(function () {
            // Dapatkan ID paket yang dipilih
            var selectedPaketID = $(this).val();

            // Reset semua checkbox terlebih dahulu
            $('input[type="checkbox"]').prop('checked', false);

            // Centang checkbox yang sesuai dengan paket yang dipilih
            $('input[type="checkbox"][data-fitur-paket="' + selectedPaketID + '"]').prop('checked', true);
        });
    });
</script>


@endsection