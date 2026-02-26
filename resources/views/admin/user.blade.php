@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-extrabold text-slate-900 display-font">Manajemen User</h1>
            <p class="text-slate-500 mt-1">Kelola data pelanggan dan level hak akses akun</p>
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
                <i class="fa-solid fa-users text-sm"></i>
            </div>
            <h2 class="text-xl font-bold text-slate-900">Daftar Pengguna Terdaftar</h2>
        </div>

        <div class="overflow-x-auto rounded-xl border border-slate-100 shadow-inner">
            <table class="w-full text-left border-collapse whitespace-nowrap">
                <thead>
                    <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider">
                        <th class="p-4 font-semibold border-b border-slate-200">ID</th>
                        <th class="p-4 font-semibold border-b border-slate-200">Info User</th>
                        <th class="p-4 font-semibold border-b border-slate-200">Gender & TTL</th>
                        <th class="p-4 font-semibold border-b border-slate-200 w-48">Paket</th>
                        <th class="p-4 font-semibold border-b border-slate-200 w-40">Level</th>
                        <th class="p-4 font-semibold border-b border-slate-200">Status Order</th>
                        <th class="p-4 font-semibold border-b border-slate-200">Tergabung</th>
                        <th class="p-4 font-semibold border-b border-slate-200 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white text-sm">
                    @forelse ($users as $user)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="p-4 text-slate-500 text-center font-medium">#{{ $user->id }}</td>

                        <!-- Info User -->
                        <td class="p-4 p-x-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <div
                                        class="h-10 w-10 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold shadow-sm">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-bold text-slate-900">{{ $user->name }}</div>
                                    <div class="text-xs text-slate-500">{{ $user->email }}</div>
                                </div>
                            </div>
                        </td>

                        <!-- Gender/Birthdate -->
                        <td class="p-4">
                            <div class="text-slate-900 capitalize">{{ $user->gender }}</div>
                            <div class="text-xs text-slate-500">{{ $user->birthdate ? date('d M Y',
                                strtotime($user->birthdate)) : '-' }}</div>
                        </td>

                        <!-- Paket select via form -->
                        <td class="p-4">
                            <form action="{{ route('update-paket-user', ['id' => $user->id]) }}" method="POST"
                                class="m-0">
                                @csrf
                                @method('PUT')
                                <div class="relative">
                                    <select name="paket_id" onchange="this.form.submit()"
                                        class="block w-full text-xs py-2 pl-3 pr-8 bg-slate-50 border border-slate-200 text-slate-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 appearance-none font-medium cursor-pointer">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pakets as $paket)
                                        <option value="{{ $paket->id }}" {{ $paket->id == $user->paket_id ? 'selected' :
                                            '' }}>
                                            #{{ $paket->id }} - {{ $paket->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                    </div>
                                </div>
                            </form>
                        </td>

                        <!-- Level select via form -->
                        <td class="p-4">
                            <form action="{{ route('update-level-user', ['id' => $user->id]) }}" method="POST"
                                class="m-0">
                                @csrf
                                @method('PUT')
                                @php $isCurrentUser = ($user->id == auth()->user()->id); @endphp
                                <div class="relative">
                                    <select name="level" onchange="this.form.submit()" {{ $isCurrentUser ? 'disabled'
                                        : '' }}
                                        class="block w-full text-xs py-2 pl-3 pr-8 bg-slate-50 border border-slate-200 text-slate-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 appearance-none font-medium {{ $isCurrentUser ? 'cursor-not-allowed opacity-70' : 'cursor-pointer' }}">
                                        @foreach ($levels as $level)
                                        <option value="{{ $level->id }}" {{ $level->id == $user->level ? 'selected' : ''
                                            }}>
                                            {{ $level->kelas }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                    </div>
                                </div>
                            </form>
                        </td>

                        <!-- Status Order -->
                        <td class="p-4">
                            @if ($user->is_order == 1)
                            <span
                                class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-xs font-bold flex items-center w-fit border border-emerald-200 shadow-sm">
                                <i class="fa-solid fa-circle-check mr-1.5"></i> Sudah Order
                            </span>
                            @else
                            <span
                                class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-medium flex items-center w-fit border border-slate-200 shadow-sm">
                                <i class="fa-solid fa-circle-xmark mr-1.5"></i> Belum
                            </span>
                            @endif
                        </td>

                        <!-- Created At -->
                        <td class="p-4 text-xs text-slate-500">
                            {{ $user->created_at->format('d M Y') }}<br>
                            {{ $user->created_at->format('H:i') }}
                        </td>

                        <!-- Action -->
                        <td class="p-4 text-center">
                            @php $isCurrentUser = ($user->id == auth()->user()->id); @endphp
                            <form action="{{ route('delete-user', ['id' => $user->id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" {{
                                    $isCurrentUser ? 'disabled' : '' }}
                                    class="text-rose-500 hover:text-rose-600 hover:bg-rose-50 p-2 rounded-lg transition-colors border border-transparent hover:border-rose-200 tooltip {{ $isCurrentUser ? 'opacity-50 cursor-not-allowed' : '' }}"
                                    title="{{ $isCurrentUser ? 'Tidak bisa hapus diri sendiri' : 'Hapus User' }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8"
                            class="p-10 text-center text-slate-500 flex flex-col items-center justify-center">
                            <i class="fa-solid fa-users-slash text-5xl mb-4 text-slate-300"></i>
                            <p class="text-lg">Belum ada user terdaftar.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection