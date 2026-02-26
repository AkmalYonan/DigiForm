@extends('layouts.app')

@section('content')
<section class="min-h-[calc(100vh-80px)] flex bg-slate-50 relative overflow-hidden py-12">
    <!-- Decorative Blobs -->
    <div
        class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-indigo-200/50 blur-3xl mix-blend-multiply filter">
    </div>
    <div
        class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-rose-200/50 blur-3xl mix-blend-multiply filter">
    </div>

    <div class="container mx-auto px-4 flex justify-center items-center relative z-10">
        <div class="w-full max-w-lg">

            <div class="text-center mb-8">
                <div
                    class="w-20 h-20 rounded-full bg-indigo-100 flex items-center justify-center mx-auto mb-4 border-4 border-white shadow-sm">
                    <i class="fa-solid fa-envelope-open-text text-3xl text-indigo-600"></i>
                </div>
                <h1 class="text-3xl font-extrabold text-slate-900 display-font">{{ __('Verifikasi Email Anda') }}</h1>
                <p class="text-slate-500 mt-2">Selangkah lagi untuk bergabung dengan kami</p>
            </div>

            <div
                class="bg-white rounded-3xl shadow-xl shadow-indigo-100/50 border border-slate-100 p-8 sm:p-10 text-center">

                @if (session('resent'))
                <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl relative flex items-start text-left"
                    role="alert">
                    <i class="fa-solid fa-circle-check text-emerald-500 mr-3 mt-0.5 text-lg"></i>
                    <span class="block sm:inline text-sm font-medium">{{ __('Link verifikasi terbaru telah dikirim ke
                        alamat email Anda.') }}</span>
                </div>
                @endif

                <p class="text-slate-600 mb-6 leading-relaxed">
                    {{ __('Sebelum melanjutkan, mohon cek kotak masuk email Anda untuk link verifikasi pendaftaran.') }}
                    <br><br>
                    {{ __('Jika Anda belum menerima email tersebut, klik tombol di bawah untuk meminta kembali.') }}
                </p>

                <form class="inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit"
                        class="w-full flex justify-center py-3.5 px-4 rounded-xl shadow-lg shadow-indigo-600/30 text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-bold text-base transition-all hover:-translate-y-0.5">
                        <i class="fa-solid fa-paper-plane mr-2 mt-1"></i> {{ __('Kirim Ulang Link Verifikasi Email') }}
                    </button>
                </form>
            </div>

            <div class="text-center mt-8 text-sm text-slate-500 font-light">
                Copyright &copy; 2021-2024 &mdash; {{ config('app.name', 'DigiForm') }}
            </div>
        </div>
    </div>
</section>
@endsection