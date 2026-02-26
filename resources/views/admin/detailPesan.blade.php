@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <div class="flex items-center gap-3">
                <h1 class="text-3xl font-extrabold text-slate-900 display-font">Detail Order <span
                        class="text-indigo-600">#{{ $pesan?->id }}</span></h1>
                @if ($pesan?->status == 1)
                <span
                    class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-xs font-bold border border-emerald-200 shadow-sm"><i
                        class="fa-solid fa-circle-check mr-1"></i> Confirmed</span>
                @else
                <span
                    class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-xs font-bold border border-amber-200 shadow-sm"><i
                        class="fa-solid fa-clock mr-1"></i> Pending</span>
                @endif
            </div>
            <p class="text-slate-500 mt-2">Data lengkap mempelai dan informasi acara</p>
        </div>
        <div class="flex gap-3">
            <form action="{{ route('admin-deletePesan', ['id' => $pesan->id]) }}" method="POST" class="m-0">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data pesanan ini?')"
                    class="inline-flex items-center justify-center px-4 py-2.5 bg-rose-50 hover:bg-rose-100 text-rose-600 rounded-xl font-bold transition-colors border border-rose-200 shadow-sm">
                    <i class="fa-solid fa-trash mr-2 text-sm"></i> Hapus
                </button>
            </form>
            <a href="{{ route('admin-viewPesan') }}"
                class="inline-flex items-center justify-center px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl font-bold transition-colors border border-slate-200 shadow-sm">
                Kembali
            </a>
        </div>
    </div>

    <!-- Core Info Card -->
    <div class="bg-white rounded-3xl p-6 lg:p-8 border border-slate-100 shadow-sm mb-8 w-full">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 divide-y md:divide-y-0 md:divide-x divide-slate-100">
            <div class="flex flex-col md:pr-6 py-2">
                <span class="text-sm font-semibold text-slate-500 mb-1">ID Transaksi / Pesanan</span>
                <span class="text-xl font-bold text-slate-900">OM-{{ str_pad($pesan->id, 5, '0', STR_PAD_LEFT) }}</span>
            </div>
            <div class="flex flex-col md:px-6 py-2">
                <span class="text-sm font-semibold text-slate-500 mb-1">Template Dipilih</span>
                <div class="flex items-center">
                    <div
                        class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center mr-3 border border-indigo-100">
                        <i class="fa-solid fa-palette text-sm"></i>
                    </div>
                    <span class="text-lg font-bold text-slate-900">{{ $pesan->template->nama ?? '-' }}</span>
                </div>
            </div>
            <div class="flex flex-col md:pl-6 py-2">
                <span class="text-sm font-semibold text-slate-500 mb-1">Salam Pembuka Undangan</span>
                <span class="text-base text-slate-900 italic font-medium">"{{ $pesan->data->salam_pembuka }}"</span>
            </div>
        </div>
    </div>

    <!-- Second Row: Split Mempelai -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">

        <!-- Pria -->
        <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50 rounded-bl-full -z-0"></div>
            <h3 class="text-lg font-bold text-slate-900 mb-5 relative z-10 flex items-center">
                <i class="fa-solid fa-mars text-indigo-500 mr-2 text-xl"></i> Data Mempelai Pria
            </h3>

            <table class="w-full text-sm relative z-10">
                <tbody class="divide-y divide-slate-50">
                    <tr>
                        <td class="py-3 text-slate-500 font-medium w-1/3">Nama Lengkap</td>
                        <td class="py-3 font-bold text-slate-900">{{ $pesan->mPria->nama_pria }}</td>
                    </tr>
                    <tr>
                        <td class="py-3 text-slate-500 font-medium h-fit">Keluarga</td>
                        <td class="py-3 font-medium text-slate-900">Anak ke-{{ $pesan->mPria->anak_ke }} dari pasangan
                            <br><span class="font-bold">Bpk. {{ $pesan->mPria->nama_ayah }}</span> & <span
                                class="font-bold">Ibu {{ $pesan->mPria->nama_ibu }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 text-slate-500 font-medium">Username IG</td>
                        <td class="py-3 font-bold text-indigo-600">{{ $pesan->mPria->username_ig ?? '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Wanita -->
        <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-rose-50 rounded-bl-full -z-0"></div>
            <h3 class="text-lg font-bold text-slate-900 mb-5 relative z-10 flex items-center">
                <i class="fa-solid fa-venus text-rose-500 mr-2 text-xl"></i> Data Mempelai Wanita
            </h3>

            <table class="w-full text-sm relative z-10">
                <tbody class="divide-y divide-slate-50">
                    <tr>
                        <td class="py-3 text-slate-500 font-medium w-1/3">Nama Lengkap</td>
                        <td class="py-3 font-bold text-slate-900">{{ $pesan->mWanita->nama_wanita }}</td>
                    </tr>
                    <tr>
                        <td class="py-3 text-slate-500 font-medium">Keluarga</td>
                        <td class="py-3 font-medium text-slate-900">Anak ke-{{ $pesan->mWanita->anak_ke }} dari pasangan
                            <br><span class="font-bold">Bpk. {{ $pesan->mWanita->nama_ayah }}</span> & <span
                                class="font-bold">Ibu {{ $pesan->mWanita->nama_ibu }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 text-slate-500 font-medium">Username IG</td>
                        <td class="py-3 font-bold text-rose-600">{{ $pesan->mWanita->username_ig ?? '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Third Row: Acara & Kontak -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">

        <!-- Informasi Acara -->
        <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
            <h3 class="text-lg font-bold text-slate-900 mb-5 flex items-center border-b border-slate-100 pb-4">
                <i class="fa-regular fa-calendar-check text-sky-500 mr-2 text-xl"></i> Informasi Acara
            </h3>

            <table class="w-full text-sm">
                <tbody class="divide-y divide-slate-50">
                    <!-- Akad -->
                    <tr class="bg-slate-50/50 rounded-lg">
                        <td colspan="2" class="px-3 pt-4 pb-2 font-bold text-slate-900 uppercase tracking-wide text-xs">
                            Acara Akad Nikah</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-3 text-slate-500 font-medium w-2/5">Waktu</td>
                        <td class="py-3 px-3 font-bold text-slate-900">{{ $pesan->data->tgl_akad }} &middot; {{
                            $pesan->data->jam_akad }} WIB</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-3 text-slate-500 font-medium align-top">Lokasi</td>
                        <td class="py-3 px-3 font-medium text-slate-900 leading-relaxed">{{ $pesan->data->lokasi_akad }}
                            <br> <a href="{{ $pesan->data->link_akad }}" target="_blank"
                                class="text-sky-600 hover:underline text-xs mt-1 inline-block"><i
                                    class="fa-solid fa-map-location-dot"></i> Lihat Map</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-3 text-slate-500 font-medium align-middle">Gmap Iframe</td>
                        <td class="py-3 px-3">
                            <form action="{{ route('updateMapsUserAkad', ['id' => $pesan->id]) }}" method="POST"
                                class="m-0">
                                @csrf
                                @method('PUT')
                                <input type="text" name="updateMapsUserAkad" value="{{ $pesan->data->iframeMaps_akad }}"
                                    onchange="this.form.submit()"
                                    class="w-full text-xs bg-slate-100 border border-slate-200 rounded-lg px-3 py-2 text-slate-600 focus:bg-white focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-colors"
                                    placeholder="Paste embed iframe here...">
                            </form>
                        </td>
                    </tr>

                    <!-- Resepsi -->
                    <tr class="bg-slate-50/50 rounded-lg">
                        <td colspan="2" class="px-3 pt-6 pb-2 font-bold text-slate-900 uppercase tracking-wide text-xs">
                            Acara Resepsi</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-3 text-slate-500 font-medium w-2/5">Waktu</td>
                        <td class="py-3 px-3 font-bold text-slate-900">{{ $pesan->data->tgl_resepsi }} &middot; {{
                            $pesan->data->jam_resepsi }} WIB</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-3 text-slate-500 font-medium align-top">Lokasi</td>
                        <td class="py-3 px-3 font-medium text-slate-900 leading-relaxed">{{ $pesan->data->lokasi_resepsi
                            }} <br> <a href="{{ $pesan->data->link_resepsi }}" target="_blank"
                                class="text-sky-600 hover:underline text-xs mt-1 inline-block"><i
                                    class="fa-solid fa-map-location-dot"></i> Lihat Map</a></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-3 text-slate-500 font-medium align-middle">Gmap Iframe</td>
                        <td class="py-3 px-3">
                            <form action="{{ route('updateMapsUserResepsi', ['id' => $pesan->id]) }}" method="POST"
                                class="m-0">
                                @csrf
                                @method('PUT')
                                <input type="text" name="updateMapsUserResepsi"
                                    value="{{ $pesan->data->iframeMaps_resepsi }}" onchange="this.form.submit()"
                                    class="w-full text-xs bg-slate-100 border border-slate-200 rounded-lg px-3 py-2 text-slate-600 focus:bg-white focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-colors"
                                    placeholder="Paste embed iframe here...">
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Kontak & Summary -->
        <div class="space-y-6">
            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm relative overflow-hidden">
                <div class="absolute right-0 bottom-0 text-slate-50 -mr-6 -mb-6">
                    <i class="fa-solid fa-address-book text-9xl"></i>
                </div>
                <h3
                    class="text-lg font-bold text-slate-900 mb-5 relative z-10 flex items-center border-b border-slate-100 pb-4">
                    <i class="fa-solid fa-address-card text-emerald-500 mr-2 text-xl"></i> Kontak Pemesan
                </h3>

                <table class="w-full text-sm relative z-10">
                    <tbody class="divide-y divide-slate-50">
                        <tr>
                            <td class="py-3 text-slate-500 font-medium w-1/3">Panggilan</td>
                            <td class="py-3 font-bold text-slate-900">Kak {{ $pesan->data->nama_panggilan }}</td>
                        </tr>
                        <tr>
                            <td class="py-3 text-slate-500 font-medium">Email</td>
                            <td class="py-3 font-medium text-slate-900">{{ $pesan->data->email }}</td>
                        </tr>
                        <tr>
                            <td class="py-3 text-slate-500 font-medium">WhatsApp</td>
                            <td class="py-3">
                                <a href="https://wa.me/{{ $pesan->data->no_wa }}" target="_blank"
                                    class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-bold bg-emerald-50 hover:bg-emerald-100 px-3 py-1.5 rounded-lg transition-colors border border-emerald-100">
                                    <i class="fa-brands fa-whatsapp text-lg mr-2"></i> {{ $pesan->data->no_wa }}
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <a href="{{ route('admin-viewPesan') }}"
                class="w-full flex justify-center py-4 px-6 rounded-2xl border border-slate-200 shadow-sm text-slate-700 bg-white hover:bg-slate-50 font-bold text-base transition-all group">
                <i class="fa-solid fa-arrow-left mr-2 mt-0.5 group-hover:-translate-x-1 transition-transform"></i>
                Kembali ke Daftar Pesanan
            </a>
        </div>

    </div>

</div>
@endsection