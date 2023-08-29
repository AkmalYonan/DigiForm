{{-- @dd($pesan) --}}
@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fs-3 fw-bold text-center">Detail Pesan</h5>
                </div>
                <div class="card-body ">
                    <div class="container">
                        <table class="table ">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $pesan->id }}</td>
                                </tr>
                                <tr>
                                    <td>Template</td>
                                    <td>{{ $pesan->template->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Salam Pembuka</td>
                                    <td>{{ $pesan->data->salam_pembuka }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="row py-2 my-4">
                            <div class="col-md-6 col-6">
                                <h5>Data Mempelai Pria</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama Panggilan</td>
                                            <td>{{ $pesan->mPria->nama_pria }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td>{{ $pesan->mPria->nama_pria_lengkap }}</td>
                                        </tr>
                                        <tr>
                                            <td>Anak Ke</td>
                                            <td>{{ $pesan->mPria->anak_ke }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ayah</td>
                                            <td>{{ $pesan->mPria->nama_ayah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ibu</td>
                                            <td>{{ $pesan->mPria->nama_ibu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Username IG</td>
                                            <td>{{ $pesan->mPria->username_ig }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 col-6">
                                <h5>Data Mempelai Wanita</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama Pangilan</td>
                                            <td>{{ $pesan->mWanita->nama_wanita }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama lengkap</td>
                                            <td>{{ $pesan->mWanita->nama_wanita_lengkap }}</td>
                                        </tr>
                                        <tr>
                                            <td>Anak Ke</td>
                                            <td>{{ $pesan->mWanita->anak_ke }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ayah</td>
                                            <td>{{ $pesan->mWanita->nama_ayah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ibu</td>
                                            <td>{{ $pesan->mWanita->nama_ibu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Username IG</td>
                                            <td>{{ $pesan->mWanita->username_ig }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-6">
                                <h5>Informasi Acara</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Lokasi Akad</td>
                                                <td>{{ $pesan->data->lokasi_akad }}</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi resepsi</td>
                                                <td>{{ $pesan->data->lokasi_resepsi }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Akad</td>
                                                <td>{{ $pesan->data->tgl_akad }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Resepsi</td>
                                                <td>{{ $pesan->data->tgl_resepsi }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jam Akad</td>
                                                <td>{{ $pesan->data->jam_akad }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jam Resepsi</td>
                                                <td>{{ $pesan->data->jam_resepsi }}</td>
                                            </tr>
                                            {{-- <tr>
                                                <td>Link Maps Akad</td>
                                                <td>{{ $pesan->data->iframeMaps_akad }}</td>
                                            </tr>
                                            <tr>
                                                <td>Link Maps Akad</td>
                                                <td>{{ $pesan->data->iframeMaps_resepsi }}</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <h5>Fitur</h5>
                                <table class="table">
                                    <tbody>
                                        @foreach ($fiturs as $fitur)
                                        <tr>
                                            <td>{{ $fitur->fitur_name->nama }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5>Kontak</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $pesan->data->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. WhatsApp</td>
                                            <td>{{ $pesan->data->no_wa }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Panggilan</td>
                                            <td>{{ $pesan->data->nama_panggilan }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button onclick="location.href='{{ route('order-edit') }}'"
                                                    class="btn btn-success btn-m w-100" @if (Auth::check() &&
                                                    $pesan->status === '1' || Auth::check() &&
                                                    $pesan->status === '2')
                                                    disabled
                                                    @endif>Edited</button>
                                            </td>

                                            <td>
                                                <form action="{{route('preview-order')}}" method="POST" target="_blank">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$pesan->id}}">
                                                    <button type="submit" id="preview"
                                                        class="btn btn-warning btn-m w-100">Preview</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="container text-center py-3">
                                        <p class="text-lead2 fs-3">Result<br>
                                            <span class="fs-6">Hasil Undangan akan Bisa dilihat disini</span>
                                        </p>
                                        <div class="card-body">
                                            @if (Auth::check())
                                            @if ($pesan->status === '0')
                                            <form action="{{ route('confirm-order') }}" method="POST">
                                                @csrf
                                                <button type="submit" id="preview" name="confirm"
                                                    class="btn btn-primary btn-m w-75">Confirm!</button>
                                            </form>
                                            @elseif ($cooldownRemaining < 0) <button id="preview"
                                                class="btn btn-primary btn-m w-75" disabled>
                                                Harap Tunggu!<br><span id="cooldown-timer">{{ $cooldownRemaining }}
                                                    minutes remaining</span>
                                                </button>
                                                @elseif ($pesan->status === '2')
                                                <a href="{{ route('result-order', ['namaPasangan' => $pesan->data->nama_pasangan, 'encrypted' => $pesan->encrypted])}}"
                                                    class="btn btn-warning btn-m w-100 my-1" target="_blank">Lihat
                                                    Preview</a>
                                                <!-- Target -->
                                                <div class="card shadow w-100">
                                                    <input id="foo" class=""
                                                        value="{{ route('result-order', ['namaPasangan' => $pesan->data->nama_pasangan, 'encrypted' => $pesan->encrypted])}}">

                                                    <!-- Trigger -->
                                                    <button class="btn" data-clipboard-target="#foo">
                                                        <i class="fa-solid fa-clipboard"></i>
                                                    </button>
                                                    @else
                                                    <a href="{{ route('result-order', ['namaPasangan' => $pesan->data->nama_pasangan, 'encrypted' => $pesan->encrypted])}}"
                                                        class="btn btn-warning btn-m w-100 my-1" target="_blank">Lihat
                                                        Preview</a>
                                                    <!-- Target -->
                                                    <div class="card shadow w-100">
                                                        <input id="foo" class=""
                                                            value="{{ route('result-order', ['namaPasangan' => $pesan->data->nama_pasangan, 'encrypted' => $pesan->encrypted])}}">
                                                        <!-- Trigger -->
                                                        <button class="btn" data-clipboard-target="#foo">
                                                            <i class="fa-solid fa-clipboard"></i>
                                                        </button>
                                                    </div>
                                                    @endif
                                                    @endif
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');

    @if ($pesan->status > 0)
        // Timestamp saat konfirmasi pesanan
        var confirmedTimestamp = {{ strtotime($pesan->updated_at) * 1000 }};
        var countdownElement = document.getElementById('cooldown-timer');

        function updateCooldownTimer() {
            var currentTime = new Date().getTime();
            var timeRemaining = confirmedTimestamp + (60 * 60 * 1000) - currentTime;

            var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            countdownElement.innerHTML = minutes + 'm ' + seconds + 's ';

            if (timeRemaining < 0) {
                countdownElement.innerHTML = ''; // Hapus timer ketika 60 menit berlalu
            } else {
                setTimeout(updateCooldownTimer, 1000);
            }
        }

        updateCooldownTimer();
    @endif
    </script>

    @endsection