@extends('layouts.app')

@section('content')
<section class="">
    <!-- Jumbotron -->
    <div class="mt-5"></div>
    <div class="px-4 py-4 px-md-5 text-center text-lg-start">
        <div class="container">
            <div class="row justify-content-center gx-lg-5 mt-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card rounded-4 shadow-lg">
                        <div class="card-body mt-4 px-md-5">
                            <div class="text-center">
                                <h2 class="fw-bolder text-lead2">Register</h2>
                                <p class="fw-bold">Silahkan Register untuk Memulai Pesanan</p>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row row-cols-2 ">
                                    <div class="col-12 col-md-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input id="name" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required
                                                        autocomplete="name" autofocus>
                                                    <label for="floatingInput">{{ __('Name') }}</label>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email">
                                                    <label for="email">{{ __('Email Address') }}</label>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="new-password">
                                                    <label for="password">{{ __('Password') }}</label>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                        name="password_confirmation" required
                                                        autocomplete="new-password">
                                                    <label for="password-confirm">{{ __('Confirm Password')
                                                        }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-floating mb-3">
                                                    <select id="gender"
                                                        class="form-select @error('gender') is-invalid @enderror"
                                                        name="gender" required>
                                                        <option value="">Select Gender</option>
                                                        <option value="laki">Laki-laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                    <label for="gender">{{ __('Gender') }}</label>
                                                    @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input id="birthdate" type="date"
                                                        class="form-control @error('birthdate') is-invalid @enderror"
                                                        name="birthdate" required>
                                                    <label for="birthdate">{{ __('Birth of Date') }}</label>
                                                    @error('birthdate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input id="referral_code" type="text"
                                                        class="form-control @error('referral_code') is-invalid @enderror"
                                                        name="referral_code" value="{{ old('referral_code') }}"
                                                        autocomplete="off" disabled>
                                                    <label for="referral_code">{{ __('Referral Code')
                                                        }}</label>
                                                    @error('referral_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <button type="submit" class="btn btn-primary w-100">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12"></div>
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