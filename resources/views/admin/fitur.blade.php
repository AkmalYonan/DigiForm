@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-extrabold text-slate-900 display-font">Manajemen Fitur</h1>
            <p class="text-slate-500 mt-1">Kelola data fitur undangan digital sistem</p>
        </div>
        <a href="{{ route('admindashboard') }}"
            class="inline-flex items-center justify-center px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg font-medium transition-colors border border-slate-200 shadow-sm">
            <i class="fa-solid fa-arrow-left mr-2 text-sm"></i> Kembali ke Dashboard
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- Left Column: Stats & Add Form -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Stat Card -->
            <div
                class="bg-gradient-to-br from-amber-400 to-orange-500 rounded-3xl p-6 shadow-lg shadow-amber-500/30 text-white relative overflow-hidden">
                <div class="absolute right-0 top-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-amber-100 text-sm font-medium mb-1">Total Fitur Aktif</p>
                        <h3 class="text-4xl font-bold">{{ $totalFiturs }}</h3>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-star text-xl"></i>
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                <div class="flex items-center mb-6 pb-4 border-b border-slate-100">
                    <div class="w-8 h-8 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center mr-3">
                        <i class="fa-solid fa-plus text-sm"></i>
                    </div>
                    <h2 class="text-lg font-bold text-slate-900">Tambah Fitur Baru</h2>
                </div>

                <form action="{{ route('store-fitur') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="namaFitur" class="block text-sm font-medium text-slate-700 mb-1">Nama Fitur</label>
                        <input type="text" id="namaFitur" name="namaFitur" required
                            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 focus:bg-white transition-colors"
                            placeholder="Cth: Galeri Foto">
                    </div>

                    <button type="submit"
                        class="w-full mt-2 flex justify-center py-2.5 px-4 rounded-xl shadow-md shadow-emerald-500/20 text-white bg-emerald-600 hover:bg-emerald-700 font-bold transition-all hover:-translate-y-0.5">
                        Simpan Data
                    </button>
                </form>
            </div>
        </div>

        <!-- Right Column: Data Table -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm h-full">
                <div class="flex items-center mb-6 pb-4 border-b border-slate-100">
                    <div class="w-8 h-8 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center mr-3">
                        <i class="fa-solid fa-list text-sm"></i>
                    </div>
                    <h2 class="text-lg font-bold text-slate-900">Daftar Fitur</h2>
                </div>

                <div class="overflow-x-auto rounded-xl border border-slate-100">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider">
                                <th class="p-4 font-semibold border-b border-slate-200 w-16 text-center">ID</th>
                                <th class="p-4 font-semibold border-b border-slate-200">Nama Fitur</th>
                                <th class="p-4 font-semibold border-b border-slate-200 text-center w-32">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white text-sm">
                            @forelse ($fiturs as $fitur)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="p-4 text-slate-500 text-center font-medium">#{{ $fitur->id }}</td>
                                <td class="p-4 text-slate-900 font-bold">{{ $fitur->nama }}</td>
                                <td class="p-4">
                                    <div class="flex items-center justify-center space-x-3">
                                        <!-- Edit -->
                                        <a href="{{ route('edit-fitur', ['id' => $fitur->id]) }}"
                                            class="text-amber-500 hover:text-amber-600 hover:bg-amber-50 p-2 rounded-lg transition-colors border border-transparent hover:border-amber-200 tooltip"
                                            title="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <!-- Delete -->
                                        <form action="{{ route('delete-fitur', ['id' => $fitur->id]) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus fitur ini?')"
                                                class="text-rose-500 hover:text-rose-600 hover:bg-rose-50 p-2 rounded-lg transition-colors border border-transparent hover:border-rose-200 tooltip"
                                                title="Hapus">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3"
                                    class="p-8 text-center text-slate-500 flex flex-col items-center justify-center">
                                    <i class="fa-solid fa-inbox text-4xl mb-3 text-slate-300"></i>
                                    <p>Belum ada data fitur tersedia.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection