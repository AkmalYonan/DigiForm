@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">

    <div class="mb-8">
        <h1 class="text-3xl font-extrabold text-slate-900 display-font">Admin Dashboard</h1>
        <p class="text-slate-500 mt-1">Ringkasan aktivitas dan manajemen data platform</p>
    </div>

    <!-- Stat Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <!-- Card 1 -->
        <a href="{{ route('admin-addtemplate') }}" class="block group">
            <div
                class="bg-gradient-to-br from-indigo-500 to-blue-600 rounded-2xl p-6 shadow-lg shadow-indigo-500/30 text-white transform transition-transform group-hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute right-0 top-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-indigo-100 text-sm font-medium mb-1">Total Template</p>
                        <h3 class="text-3xl font-bold">{{ $totalTemplates }}</h3>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-layer-group text-xl"></i>
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="{{ route('admin-addpaket') }}" class="block group">
            <div
                class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl p-6 shadow-lg shadow-emerald-500/30 text-white transform transition-transform group-hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute right-0 top-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-emerald-100 text-sm font-medium mb-1">Total Paket</p>
                        <h3 class="text-3xl font-bold">{{ $totalPakets }}</h3>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-box-open text-xl"></i>
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 3 -->
        <a href="{{ route('admin-user') }}" class="block group">
            <div
                class="bg-gradient-to-br from-rose-500 to-pink-600 rounded-2xl p-6 shadow-lg shadow-rose-500/30 text-white transform transition-transform group-hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute right-0 top-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-rose-100 text-sm font-medium mb-1">Total User</p>
                        <h3 class="text-3xl font-bold">{{ $totalUser }}</h3>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-users text-xl"></i>
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 4 -->
        <a href="{{ route('admin-addfitur') }}" class="block group">
            <div
                class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl p-6 shadow-lg shadow-amber-500/30 text-white transform transition-transform group-hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute right-0 top-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-amber-100 text-sm font-medium mb-1">Total Fitur</p>
                        <h3 class="text-3xl font-bold">{{ $totalFitur }}</h3>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-star text-xl"></i>
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 5 -->
        <a href="{{ route('admin-viewPesan') }}" class="block group">
            <div
                class="bg-gradient-to-br from-cyan-500 to-sky-600 rounded-2xl p-6 shadow-lg shadow-cyan-500/30 text-white transform transition-transform group-hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute right-0 top-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-cyan-100 text-sm font-medium mb-1">Total Pesanan</p>
                        <h3 class="text-3xl font-bold">{{ $totalPesan }}</h3>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-shopping-cart text-xl"></i>
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 6 -->
        <a href="{{ route('admin-addlevel') }}" class="block group">
            <div
                class="bg-gradient-to-br from-fuchsia-500 to-purple-600 rounded-2xl p-6 shadow-lg shadow-fuchsia-500/30 text-white transform transition-transform group-hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute right-0 top-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-fuchsia-100 text-sm font-medium mb-1">Total Level</p>
                        <h3 class="text-3xl font-bold">{{ $totalLevel }}</h3>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-turn-up text-xl"></i>
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 7 -->
        <a href="{{ route('admin-settingPaketTemplate') }}" class="block group">
            <div
                class="bg-gradient-to-br from-slate-700 to-slate-800 rounded-2xl p-6 shadow-lg shadow-slate-700/30 text-white transform transition-transform group-hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute right-0 top-0 -mt-4 -mr-4 w-24 h-24 bg-white/5 rounded-full blur-xl"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-slate-300 text-sm font-medium mb-1">Detail Paket Template</p>
                        <h3 class="text-2xl font-bold mt-1">Setting</h3>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-sliders text-xl text-slate-300"></i>
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 8 -->
        <a href="{{ route('admin-settingPaketFitur') }}" class="block group">
            <div
                class="bg-gradient-to-br from-slate-700 to-slate-800 rounded-2xl p-6 shadow-lg shadow-slate-700/30 text-white transform transition-transform group-hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute right-0 top-0 -mt-4 -mr-4 w-24 h-24 bg-white/5 rounded-full blur-xl"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-slate-300 text-sm font-medium mb-1">Detail Paket Fitur</p>
                        <h3 class="text-2xl font-bold mt-1">Setting</h3>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-cogs text-xl text-slate-300"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Secondary Areas: Forms & Table -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        <!-- Setting Forms -->
        <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
            <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center">
                <i class="fa-solid fa-gear text-indigo-500 mr-3"></i> Setting Website
            </h2>

            <div class="space-y-6">
                <!-- Phone Setting -->
                <form action="{{ route('admin-settingHp') }}" method="POST"
                    class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    @csrf
                    @method('PUT')
                    <label class="block text-sm font-semibold text-slate-700 mb-3">Nomor WA / HP Website</label>
                    <div class="flex flex-col sm:flex-row gap-3">
                        @foreach ($admins as $admin)
                        <div class="relative flex-grow">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-brands fa-whatsapp text-emerald-500"></i>
                            </div>
                            <input type="text" id="noHp" name="noHp" placeholder="+628123xxx" value="{{ $admin->noHp }}"
                                required
                                class="w-full pl-10 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                        </div>
                        @endforeach
                        <button type="submit"
                            class="px-6 py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-xl transition-colors shadow-sm whitespace-nowrap">
                            Simpan
                        </button>
                    </div>
                </form>

                <!-- Email Setting -->
                <form action="{{ route('admin-settingEmail') }}" method="POST"
                    class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    @csrf
                    @method('PUT')
                    <label class="block text-sm font-semibold text-slate-700 mb-3">Email Admin Website</label>
                    <div class="flex flex-col sm:flex-row gap-3">
                        @foreach ($admins as $admin)
                        <div class="relative flex-grow">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-regular fa-envelope text-indigo-500"></i>
                            </div>
                            <input type="text" id="emailAdmin" name="emailAdmin" placeholder="admin@email.com"
                                value="{{ $admin->emailAdmin }}" required
                                class="w-full pl-10 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                        </div>
                        @endforeach
                        <button type="submit"
                            class="px-6 py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-xl transition-colors shadow-sm whitespace-nowrap">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm flex flex-col">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-slate-900 flex items-center">
                    <i class="fa-solid fa-clock-rotate-left text-indigo-500 mr-3"></i> Recent Orders
                </h2>
                <a href="{{ route('admin-viewPesan') }}"
                    class="text-sm font-semibold text-indigo-600 hover:text-indigo-700">Lihat Semua</a>
            </div>

            <div class="overflow-x-auto flex-grow rounded-xl border border-slate-100">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider">
                            <th class="p-4 font-semibold border-b border-slate-200">ID</th>
                            <th class="p-4 font-semibold border-b border-slate-200">Account User</th>
                            <th class="p-4 font-semibold border-b border-slate-200">Email Undangan</th>
                            <th class="p-4 font-semibold border-b border-slate-200">Waktu Order</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 bg-white text-sm">
                        @forelse ($pesans as $pesan)
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 text-slate-900 font-medium">#{{ $pesan->id }}</td>
                            <td class="p-4 text-slate-600">
                                <div class="flex items-center">
                                    <div
                                        class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center text-xs font-bold mr-2">
                                        {{ substr($pesan->user->name, 0, 1) }}
                                    </div>
                                    {{ $pesan->user->name }}
                                </div>
                            </td>
                            <td class="p-4 text-slate-500">{{ $pesan->data->email }}</td>
                            <td class="p-4 text-slate-500 whitespace-nowrap">{{ $pesan->created_at->format('d M Y, H:i')
                                }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="p-6 text-center text-slate-500">Belum ada order masuk</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection