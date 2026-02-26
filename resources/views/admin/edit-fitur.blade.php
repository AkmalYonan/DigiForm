@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">

    <div class="flex justify-center items-center min-h-[60vh]">
        <div
            class="w-full max-w-lg bg-white rounded-3xl p-6 md:p-10 border border-slate-100 shadow-xl shadow-indigo-100/50">

            <div class="flex flex-col items-center mb-8 pb-6 border-b border-slate-100 text-center">
                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-400 to-orange-500 text-white flex items-center justify-center mb-4 shadow-lg shadow-amber-500/30">
                    <i class="fa-solid fa-pen-to-square text-2xl"></i>
                </div>
                <h1 class="text-2xl font-extrabold text-slate-900 display-font">Edit Fitur</h1>
                <p class="text-slate-500 mt-1 text-sm">Modifikasi data fitur undangan</p>
            </div>

            <form action="{{ route('update-template', ['id' => $fiturs->id]) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="idFitur" class="block text-sm font-semibold text-slate-700 mb-1">ID Fitur <span
                            class="text-rose-500">*</span></label>
                    <input type="text" id="idFitur" value="#{{ $fiturs->id }}" disabled
                        class="w-full px-4 py-3 bg-slate-100 border border-slate-200 rounded-xl text-slate-500 font-medium cursor-not-allowed">
                </div>

                <div>
                    <label for="namaBaru" class="block text-sm font-semibold text-slate-700 mb-1">Nama Fitur <span
                            class="text-rose-500">*</span></label>
                    <input type="text" id="namaBaru" name="namaBaru" value="{{ $fiturs->nama }}" required autofocus
                        class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors shadow-sm">
                </div>

                <div class="pt-4 flex gap-3">
                    <a href="{{ route('admin-addfitur') }}"
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