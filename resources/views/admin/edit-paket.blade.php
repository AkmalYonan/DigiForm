@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">

    <div class="flex justify-center items-center min-h-[60vh]">
        <div
            class="w-full max-w-lg bg-white rounded-3xl p-6 md:p-10 border border-slate-100 shadow-xl shadow-indigo-100/50">

            <div class="flex flex-col items-center mb-8 pb-6 border-b border-slate-100 text-center">
                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-500 to-blue-600 text-white flex items-center justify-center mb-4 shadow-lg shadow-indigo-500/30">
                    <i class="fa-solid fa-pen-to-square text-2xl"></i>
                </div>
                <h1 class="text-2xl font-extrabold text-slate-900 display-font">Edit Paket</h1>
                <p class="text-slate-500 mt-1 text-sm">Ubah detail dan harga paket berlangganan</p>
            </div>

            <form action="{{ route('update-paket', ['id' => $pakets->id]) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="idPaket" class="block text-sm font-semibold text-slate-700 mb-1">ID Paket <span
                            class="text-rose-500">*</span></label>
                    <input type="text" id="idPaket" value="#{{ $pakets->id }}" disabled
                        class="w-full px-4 py-3 bg-slate-100 border border-slate-200 rounded-xl text-slate-500 font-medium cursor-not-allowed">
                </div>

                <div>
                    <label for="namaBaru" class="block text-sm font-semibold text-slate-700 mb-1">Nama Paket <span
                            class="text-rose-500">*</span></label>
                    <input type="text" id="namaBaru" name="namaBaru" value="{{ $pakets->nama }}" required autofocus
                        class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors shadow-sm">
                </div>

                <div>
                    <label for="hargaBaru" class="block text-sm font-semibold text-slate-700 mb-1">Harga (Rp) <span
                            class="text-rose-500">*</span></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="text-slate-500 font-bold">Rp</span>
                        </div>
                        <input type="text" id="hargaBaru" name="hargaBaru" value="{{ $pakets->harga }}" required
                            class="w-full pl-12 pr-4 py-3 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors shadow-sm font-bold">
                    </div>
                </div>

                <div class="pt-4 flex gap-3">
                    <a href="{{ route('admin-addpaket') }}"
                        class="w-1/3 flex justify-center py-3.5 px-4 rounded-xl text-slate-600 bg-slate-100 hover:bg-slate-200 font-bold transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="w-2/3 flex justify-center py-3.5 px-4 rounded-xl shadow-lg shadow-emerald-500/20 text-white bg-emerald-600 hover:bg-emerald-700 font-bold transition-all hover:-translate-y-0.5">
                        <i class="fa-solid fa-save mr-2 mt-1"></i> Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>

</div>
@endsection