@extends('layouts.app')
@section('content')
<div class="container pt-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header fs-4 text-center fw-bold">VERIFICATION</div>

                <div class="card-body">
                    <form action="{{ route('verifyotp')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Code Verification') }}</label>
                                    <input type="number" name="token" class="form-control" placeholder="Enter Token">
                                </div>
                            </div>
                        </div>
                        @if (session('activated'))
                        <div class="alert alert-success" role="alert">
                            {{ session('activated') }}
                        </div>
                        @endif

                        <div class="row mb-0 d-flex justify-content-between">
                            <div class="col-md-8 offset-md-4 text-end">
                                <button type="sub" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('resend.otp') }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">Re-send OTP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection