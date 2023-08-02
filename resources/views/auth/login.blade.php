@extends('layouts.app')

@section('content')
<section class="h-100">
  <div class="container mt-5 h-100">
    <div class="row justify-content-sm-center h-100">
      <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
        <div class="text-center my-5">
          <img class="shadow rounded-circle" src="img/logo_110.png" alt="logo" width="100">
        </div>
        <div class="card shadow-lg">
          <div class="card-body p-5">
            <h1 class="fs-4 card-title fw-bold mb-4">Log-in</h1>
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="" autocomplete="off">
              @csrf
              <div class="mb-3">
                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autofocus>
                <div class="invalid-feedback">
                  Email is invalid
                </div>
              </div>

              <div class="mb-3">
                <div class="mb-2 w-100">
                  <label class="text-muted" for="password">Password</label>
                  <a href="{{ route('password.request') }}" class="float-end">
                    <!-- Use the correct route for the "Forgot Your Password?" page -->
                    Forgot Password?
                  </a>
                </div>
                <input id="password" type="password" class="form-control" name="password" required>
                <div class="invalid-feedback">
                  Password is required
                </div>
              </div>

              <div class="d-flex align-items-center">
                <div class="form-check">
                  <input type="checkbox" name="remember" id="remember" class="form-check-input">
                  <label for="remember" class="form-check-label">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary ms-auto">
                  Login
                </button>
              </div>
            </form>
          </div>
          <div class="card-footer py-3 border-0">
            <div class="text-center">
              Don't have an account? <a href="register" class="text-dark">Create One</a>
            </div>
          </div>
        </div>
        <div class="text-center mt-5 text-muted">
          Copyright &copy; 2021-2024 &mdash; {{ config('app.name', 'Laravel') }}
        </div>
      </div>
    </div>
  </div>
</section>


@endsection