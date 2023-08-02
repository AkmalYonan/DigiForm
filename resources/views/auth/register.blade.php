@extends('layouts.app')

@section('content')
<section class="">
    <!-- Jumbotron -->
    <div class="mt-5"></div>
    <div class="px-4 py-4 px-md-5 text-center text-lg-start">
        <div class="container">
            <div class="row justify-content-center gx-lg-5 mt-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card shadow-lg">
                        <div class="card-body mt-4 px-md-5">
                            <div class="text-center">
                                <h2 class="fw-bolder">Register</h2>
                                <p class="fw-bold">Silahkan Register untuk Memulai Pesanan</p>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row row-cols-2">
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">{{ __('Name') }}</label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="referral_code" class="form-label">{{ __('Referral Code')
                                                }}</label>
                                            <input id="referral_code" type="text"
                                                class="form-control @error('referral_code') is-invalid @enderror"
                                                name="referral_code" value="{{ old('referral_code') }}"
                                                autocomplete="off" disabled>
                                            @error('referral_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">{{ __('Gender') }}</label>
                                            <select id="gender"
                                                class="form-select @error('gender') is-invalid @enderror" name="gender"
                                                required>
                                                <option value="">Select Gender</option>
                                                <option value="laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                            @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="birthdate" class="form-label">{{ __('Birth of Date') }}</label>
                                            <input id="birthdate" type="date"
                                                class="form-control @error('birthdate') is-invalid @enderror"
                                                name="birthdate" required>
                                            @error('birthdate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password-confirm" class="form-label">{{ __('Confirm Password')
                                                }}</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <div class="col-md-12 text-end my-5">
                                            <button type="submit" class="btn btn-primary w-100">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2021-2024 &mdash; {{ config('app.name', 'Laravel') }}
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>

@endsection