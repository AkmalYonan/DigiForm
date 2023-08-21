@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center py-5">
        <div class="col-md-6">
            <div class="card shadow">

                <div class="card-body">

                    <div class="container text-center">
                        <div class="fw-bold">{{ __('Reset Password') }}</div>
                        <p>You can reset your password here.</p>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" id="mail-addon">&#9993;</span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Enter your email address">
                                </div>
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    {{ __('Send Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
