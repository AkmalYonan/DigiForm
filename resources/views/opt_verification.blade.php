@extends('layouts.app')
@section('content')

<style>
    .custom-inputl {
        height: 40px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1.5rem;
        background-color: #f7f7f7;
        margin: 2px;
    }

    /* Remove the arrows from the number input field */
    .custom-inputl::-webkit-inner-spin-button,
    .custom-inputl::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<div class="container pt-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center shadow">
                <div class="card-body my-5">
                    <p class="fw-bold fs-4">OTP VERIFICATION</p>
                    <p>Enter OTP Code sent to your Gmail</p>
                    <form action="{{ route('verifyotp')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col d-flex justify-content-center"> <!-- Center the input field -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <input type="number" name="token" id="otp-input" class="form-control form-control-sm custom-inputl" placeholder="Enter Token">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <p>Tidak Mendapatkan OTP?</p>
                            <a href="{{ route('resend.otp') }}">Resend Code</a>
                        </div>

                        @if (session('activated'))
                            <div class="alert alert-success" role="alert">
                                {{ session('activated') }}
                            </div>
                        @endif

                        <div class="row mb-0 d-flex justify-content-center">
                            <div class="mt-5">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const otpInput = document.getElementById('otp-input');

    otpInput.addEventListener('input', function() {
        if (this.value.length > 6) {
            this.value = this.value.slice(0, 6); // Limit the input to 6 digits
        }
    });
</script>
@endsection
