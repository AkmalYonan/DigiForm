{{-- @dd($pesan) --}}
@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">
    <div class="flex flex-col gap-8">

        <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden relative">
            <div
                class="absolute top-0 right-0 w-64 h-64 bg-indigo-50 rounded-bl-full -z-0 opacity-50 pointer-events-none">
            </div>

            <div class="p-8 border-b border-slate-100 relative z-10 text-center">
                <span
                    class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-600 mb-4 shadow-sm">
                    <i class="fa-solid fa-circle-info text-xl"></i>
                </span>
                <h2 class="text-3xl font-extrabold text-slate-800 display-font">Detail Pesan</h2>
                <p class="text-slate-500 mt-2">Ringkasan informasi pesanan undangan Anda</p>
            </div>

            <div class="p-6 md:p-10 relative z-10">
                <div class="bg-slate-50 rounded-2xl p-6 mb-10 border border-slate-100">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">ID Pesanan</span>
                            <span class="text-lg font-semibold text-slate-800">#{{ $pesan->id }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Desain
                                Template</span>
                            <span class="text-lg font-semibold text-indigo-600">{{ $pesan->template->nama }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Salam Pembuka</span>
                            <span class="text-lg font-semibold text-slate-800">{{ $pesan->data->salam_pembuka }}</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
                    <div class="space-y-4">
                        <h3 class="text-lg font-bold text-slate-800 flex items-center pb-3 border-b border-slate-100">
                            <i class="fa-solid fa-mars text-blue-500 mr-3"></i> Data Mempelai Pria
                        </h3>
                        <div class="overflow-hidden rounded-2xl border border-slate-100">
                            <table class="w-full text-left text-sm">
                                <tbody class="divide-y divide-slate-100">
                                    <tr class="bg-white">
                                        <td class="p-3 font-medium text-slate-500 w-1/3">Panggilan</td>
                                        <td class="p-3 text-slate-800">{{ $pesan->mPria->nama_pria }}</td>
                                    </tr>
                                    <tr class="bg-slate-50/50">
                                        <td class="p-3 font-medium text-slate-500">Nama Lengkap</td>
                                        <td class="p-3 text-slate-800">{{ $pesan->mPria->nama_pria_lengkap }}</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="p-3 font-medium text-slate-500">Anak Ke</td>
                                        <td class="p-3 text-slate-800">{{ $pesan->mPria->anak_ke }}</td>
                                    </tr>
                                    <tr class="bg-slate-50/50">
                                        <td class="p-3 font-medium text-slate-500">Ayah / Ibu</td>
                                        <td class="p-3 text-slate-800">{{ $pesan->mPria->nama_ayah }} / {{
                                            $pesan->mPria->nama_ibu }}</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="p-3 font-medium text-slate-500">Instagram</td>
                                        <td class="p-3 text-indigo-600 font-semibold">@ {{$pesan->mPria->username_ig}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-bold text-slate-800 flex items-center pb-3 border-b border-slate-100">
                            <i class="fa-solid fa-venus text-rose-500 mr-3"></i> Data Mempelai Wanita
                        </h3>
                        <div class="overflow-hidden rounded-2xl border border-slate-100">
                            <table class="w-full text-left text-sm">
                                <tbody class="divide-y divide-slate-100">
                                    <tr class="bg-white">
                                        <td class="p-3 font-medium text-slate-500 w-1/3">Panggilan</td>
                                        <td class="p-3 text-slate-800">{{ $pesan->mWanita->nama_wanita }}</td>
                                    </tr>
                                    <tr class="bg-slate-50/50">
                                        <td class="p-3 font-medium text-slate-500">Nama Lengkap</td>
                                        <td class="p-3 text-slate-800">{{ $pesan->mWanita->nama_wanita_lengkap }}</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="p-3 font-medium text-slate-500">Anak Ke</td>
                                        <td class="p-3 text-slate-800">{{ $pesan->mWanita->anak_ke }}</td>
                                    </tr>
                                    <tr class="bg-slate-50/50">
                                        <td class="p-3 font-medium text-slate-500">Ayah / Ibu</td>
                                        <td class="p-3 text-slate-800">{{ $pesan->mWanita->nama_ayah }} / {{
                                            $pesan->mWanita->nama_ibu }}</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="p-3 font-medium text-slate-500">Instagram</td>
                                        <td class="p-3 text-indigo-600 font-semibold">@ {{$pesan->mWanita->username_ig}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
                    <div class="space-y-4">
                        <h3 class="text-lg font-bold text-slate-800 flex items-center pb-3 border-b border-slate-100">
                            <i class="fa-solid fa-calendar-check text-emerald-500 mr-3"></i> Informasi Acara
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <p class="text-xs font-bold text-slate-400 uppercase">Akad Nikah</p>
                                <p class="text-sm text-slate-800 mt-1 font-semibold">{{ $pesan->data->tgl_akad }}</p>
                                <p class="text-xs text-slate-500">{{ $pesan->data->jam_akad }}</p>
                                <p class="text-xs text-slate-600 mt-2 italic">{{ $pesan->data->lokasi_akad }}</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <p class="text-xs font-bold text-slate-400 uppercase">Resepsi</p>
                                <p class="text-sm text-slate-800 mt-1 font-semibold">{{ $pesan->data->tgl_resepsi }}</p>
                                <p class="text-xs text-slate-500">{{ $pesan->data->jam_resepsi }}</p>
                                <p class="text-xs text-slate-600 mt-2 italic">{{ $pesan->data->lokasi_resepsi }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-bold text-slate-800 flex items-center pb-3 border-b border-slate-100">
                            <i class="fa-solid fa-wand-magic-sparkles text-amber-500 mr-3"></i> Fitur Aktif
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($fiturs as $fitur)
                            <span
                                class="px-4 py-2 bg-indigo-50 text-indigo-700 rounded-xl text-xs font-bold border border-indigo-100">
                                <i class="fa-solid fa-check mr-1"></i> {{ $fitur->fitur_name->nama }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="h-px bg-slate-100 w-full mb-10"></div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                    <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100 space-y-4">
                        <h3 class="text-lg font-bold text-slate-800 mb-4">Informasi Kontak</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-envelope w-5 text-indigo-500"></i> {{ $pesan->data->email }}
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-whatsapp w-5 text-emerald-500 text-lg"></i> {{ $pesan->data->no_wa
                                }}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-3 pt-4">
                            <button onclick="location.href='{{ route('order-edit') }}'"
                                class="w-full py-3 bg-white border border-slate-200 text-slate-700 rounded-xl font-bold text-sm shadow-sm hover:bg-slate-100 transition-all disabled:opacity-50 disabled:cursor-not-allowed"
                                @if (Auth::check() && ($pesan->status === '1' || $pesan->status === '2')) disabled
                                @endif>
                                <i class="fa-solid fa-pen-to-square mr-2"></i> Edit
                            </button>

                            <form action="{{route('preview-order')}}" method="POST" target="_blank">
                                @csrf
                                <input type="hidden" name="id" value="{{$pesan->id}}">
                                <button type="submit"
                                    class="w-full py-3 bg-amber-500 text-white rounded-xl font-bold text-sm shadow-md shadow-amber-200 hover:bg-amber-600 transition-all">
                                    <i class="fa-solid fa-eye mr-2"></i> Preview
                                </button>
                            </form>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-indigo-600 to-indigo-800 p-8 rounded-3xl text-white shadow-xl shadow-indigo-200 relative overflow-hidden text-center">
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-2">Result Undangan</h3>
                            <p class="text-indigo-100 text-xs mb-6 opacity-80">Link undangan digital Anda dapat diakses
                                di bawah ini</p>

                            @if (Auth::check())
                            @if ($pesan->status === '0')
                            <form action="{{ route('confirm-order') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full py-4 bg-white text-indigo-700 rounded-2xl font-extrabold text-lg shadow-lg hover:scale-105 transition-transform">
                                    KONFIRMASI SEKARANG!
                                </button>
                            </form>
                            @elseif (isset($cooldownRemaining) && $cooldownRemaining > 0)
                            <div class="p-4 bg-indigo-900/40 border border-indigo-400/30 rounded-2xl">
                                <p class="text-sm font-bold">Harap Tunggu Proses Sistem</p>
                                <span id="cooldown-timer"
                                    class="text-2xl font-mono font-bold block mt-1 tracking-widest text-amber-400">
                                    {{ $cooldownRemaining }}m
                                </span>
                            </div>
                            @else
                            <div class="space-y-4">
                                <a href="{{ route('result-order', ['namaPasangan' => $pesan->data->nama_pasangan, 'encrypted' => $pesan->encrypted])}}"
                                    target="_blank"
                                    class="inline-block w-full py-3 bg-emerald-500 text-white rounded-xl font-bold hover:bg-emerald-600 transition-colors shadow-lg">
                                    <i class="fa-solid fa-up-right-from-square mr-2"></i> Buka Undangan
                                </a>

                                <div class="flex bg-white/10 p-2 rounded-2xl border border-white/20 gap-2">
                                    <input id="foo" readonly
                                        class="bg-transparent border-none text-xs w-full px-2 focus:ring-0 text-white overflow-hidden text-ellipsis"
                                        value="{{ route('result-order', ['namaPasangan' => $pesan->data->nama_pasangan, 'encrypted' => $pesan->encrypted])}}">
                                    <button
                                        class="bg-white text-indigo-700 p-2 rounded-xl hover:bg-indigo-50 transition-colors shrink-0"
                                        data-clipboard-target="#foo">
                                        <i class="fa-solid fa-clipboard"></i>
                                    </button>
                                </div>
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

<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
<script>
    new ClipboardJS('.bg-white');

    @if ($pesan->status > 0)
        var confirmedTimestamp = {{ strtotime($pesan->updated_at) * 1000 }};
        var countdownElement = document.getElementById('cooldown-timer');

        function updateCooldownTimer() {
            var currentTime = new Date().getTime();
            var timeRemaining = confirmedTimestamp + (60 * 60 * 1000) - currentTime;

            if (timeRemaining < 0) {
                if(countdownElement) countdownElement.innerHTML = 'Selesai! Silakan Refresh';
                return;
            }

            var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            if(countdownElement) {
                countdownElement.innerHTML = minutes + 'm ' + seconds + 's ';
                setTimeout(updateCooldownTimer, 1000);
            }
        }
        updateCooldownTimer();
    @endif
</script>
@endsection