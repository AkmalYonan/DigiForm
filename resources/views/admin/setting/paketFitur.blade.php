@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="container shadow-lg py-3 my-3 rounded-3">
                <p class="lead">Setting Template<span class="font-kecil"><br>Pilih Paket untuk Mensetting bagian
                        Template</span>
                </p>
                <div class="pb-3">
                    <select class="form-select">
                        @foreach ($pakets as $paket)
                        <option value="{{$paket->id}}">{{$paket->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <form action="{{ route('admin-updatedetailTemplate') }}" method="POST">
                    @csrf
                    @method('patch')
                    @foreach ($templates as $template)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
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
                <div class="pb-3">
                    <select class="form-select">
                        @foreach ($pakets as $paket)
                        <option value="{{$paket->id}}">{{$paket->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <form action="{{ route('admin-updatedetailFitur') }}" method="POST">
                    @csrf
                    @method('patch')
                    @foreach ($fiturs as $fitur)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
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
@endsection