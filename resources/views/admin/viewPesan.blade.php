@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-extrabold text-slate-900 display-font">Daftar Pesanan</h1>
            <p class="text-slate-500 mt-1">Pantau semua pesanan undangan digital masuk</p>
        </div>
        <a href="{{ route('admindashboard') }}"
            class="inline-flex items-center justify-center px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg font-medium transition-colors border border-slate-200 shadow-sm whitespace-nowrap">
            <i class="fa-solid fa-arrow-left mr-2 text-sm"></i> Kembali
        </a>
    </div>

    <!-- Data Table -->
    <div class="bg-white rounded-3xl p-6 lg:p-8 border border-slate-100 shadow-sm w-full">
        <div class="flex items-center mb-6 pb-4 border-b border-slate-100">
            <div class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3">
                <i class="fa-solid fa-cart-shopping text-sm"></i>
            </div>
            <h2 class="text-xl font-bold text-slate-900">Pesanan Pelanggan</h2>
        </div>

        <div class="overflow-x-auto rounded-xl border border-slate-100 shadow-inner">
            <table class="w-full text-left border-collapse whitespace-nowrap">
                <thead>
                    <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider">
                        <th class="p-4 font-semibold border-b border-slate-200 text-center">ID Pesan</th>
                        <th class="p-4 font-semibold border-b border-slate-200">Customer Info</th>
                        <th class="p-4 font-semibold border-b border-slate-200">Kontak WA</th>
                        <th class="p-4 font-semibold border-b border-slate-200 w-48 text-center">Status</th>
                        <th class="p-4 font-semibold border-b border-slate-200 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white text-sm">
                    @forelse ($pesans as $pesan)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="p-4 text-slate-500 text-center font-bold">#{{ $pesan->id }}</td>

                        <!-- Customer Info -->
                        <td class="p-4">
                            <div class="flex flex-col">
                                <span class="font-bold text-slate-900">{{ $pesan->user->name ?? 'Unknown User' }} <span
                                        class="text-xs text-slate-400 font-normal ml-1">(ID: {{ $pesan->id_user
                                        }})</span></span>
                                <span class="text-xs text-slate-500 mt-0.5"><i class="fa-regular fa-envelope mr-1"></i>
                                    {{ $pesan->data->email ?? 'Email Kosong' }}</span>
                            </div>
                        </td>

                        <!-- WA -->
                        <td class="p-4">
                            <a href="https://wa.me/{{ $pesan->data->no_wa ?? 'WA Tidak Tersedia' }}" target="_blank"
                                class="inline-flex items-center text-emerald-600 hover:text-emerald-700 bg-emerald-50 hover:bg-emerald-100 px-3 py-1.5 rounded-lg text-xs font-semibold transition-colors border border-emerald-100">
                                <i class="fa-brands fa-whatsapp text-sm mr-1.5"></i> Hubungi WA
                            </a>
                        </td>

                        <!-- Status Form -->
                        <td class="p-4">
                            <form action="{{ route('admin-updateStatus', ['id' => $pesan->id]) }}" method="POST"
                                class="m-0 relative">
                                @csrf
                                @method('PUT')
                                <div class="relative">
                                    <select name="status" onchange="this.form.submit()"
                                        class="block w-full text-xs py-2 pl-3 pr-8 rounded-lg outline-none appearance-none font-bold cursor-pointer border shadow-sm transition-colors {{ $pesan->status == 1 ? 'bg-emerald-50 border-emerald-200 text-emerald-700 focus:ring-2 focus:ring-emerald-500' : 'bg-amber-50 border-amber-200 text-amber-700 focus:ring-2 focus:ring-amber-500' }}">
                                        <option value="0" {{ $pesan->status == 0 ? 'selected' : '' }}>Pending /
                                            Unconfirmed</option>
                                        <option value="1" {{ $pesan->status == 1 ? 'selected' : '' }}>Confirmed /
                                            Dibayar</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 {{ $pesan->status == 1 ? 'text-emerald-500' : 'text-amber-500' }}">
                                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                    </div>
                                </div>
                            </form>
                        </td>

                        <!-- Action -->
                        <td class="p-4 text-center">
                            <a href="{{ route('admin-viewPesan') }}/{{ $pesan->data->id_pesan }}"
                                class="inline-flex items-center justify-center px-3 py-1.5 bg-indigo-50 hover:bg-indigo-100 text-indigo-600 rounded-lg text-xs font-bold transition-colors border border-indigo-100">
                                <i class="fa-solid fa-eye mr-1.5"></i> Detail Pesanan
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5"
                            class="p-10 text-center text-slate-500 flex flex-col items-center justify-center">
                            <i class="fa-solid fa-box-open text-5xl mb-4 text-slate-300"></i>
                            <p class="text-lg">Belum ada pesanan masuk.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection