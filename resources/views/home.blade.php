@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body bg-success-subtle">
                    @if (session('activated'))
                    <div class="alert alert-success" role="alert">
                        {{ session('activated') }}
                    </div>
                    @endif

                    {{ __('Selamat! Ini adalah Area Dashboard!') }}
                    <br>
                    <button class="btn btn-danger mt-3 w-100" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection