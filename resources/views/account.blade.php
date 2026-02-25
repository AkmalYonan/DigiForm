@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">
  <div class="flex flex-col lg:flex-row gap-8">

    <!-- Sidebar Profile -->
    <div class="lg:w-1/3">
      <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 sticky top-28">
        <div class="text-center">
          <div class="relative inline-block mb-4">
            <img class="w-28 h-28 rounded-full border-4 border-white shadow-md object-cover"
              src="{{ asset('img/profiles.jpg') }}" alt="User Profile"
              onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=6366f1&color=fff&size=128'" />
            <div class="absolute bottom-0 right-0 w-6 h-6 bg-emerald-500 border-2 border-white rounded-full"></div>
          </div>

          <h4 class="text-xl font-bold text-slate-800 display-font">{{ Auth::user()->name }}</h4>
          <p class="text-sm text-slate-500 mb-6">{{ Auth::user()->email }}</p>

          @if ($namaPaket == 1 || $namaPaket == 'Bronze')
          <a href="{{ route('homepricelist') }}" class="block group">
            <div
              class="bg-gradient-to-r from-slate-100 to-slate-50 rounded-2xl p-4 border border-slate-200 mb-6 text-left relative overflow-hidden">
              <div
                class="absolute right-0 top-0 w-16 h-16 bg-gradient-to-br from-slate-300 to-slate-400 rounded-bl-full opacity-20 group-hover:scale-110 transition-transform">
              </div>
              <div class="flex items-center gap-3 relative z-10">
                <img src="{{ asset('img/silver_logo.webp') }}" class="w-10 h-10 drop-shadow-sm" alt="Silver"
                  title="Silver">
                <div>
                  <h5 class="font-bold text-slate-800 text-sm">Upgrade ke Silver</h5>
                  <p class="text-xs text-slate-600 mt-0.5 leading-tight">Gunakan lebih banyak fitur! <span
                      class="font-semibold text-indigo-600 block mt-1">+Rp 49.000</span></p>
                </div>
              </div>
            </div>
          </a>
          @endif

          <div class="h-px bg-slate-100 w-full my-6"></div>

          <div class="text-left">
            <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Tipe Akun:</p>
            @if(isset($namaPaket))
            <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100">
              @if($namaPaket == 'Bronze' || $namaPaket == 1)
              <img src="{{ asset('img/bronze_logo.png') }}" class="w-14 h-14 drop-shadow-md" alt="Bronze"
                title="Bronze">
              <div>
                <p class="text-xl font-extrabold text-amber-600 display-font">Bronze</p>
                <p class="text-xs text-slate-500">Free Account</p>
              </div>
              @elseif($namaPaket == 'Silver' || $namaPaket == 2)
              <img src="{{ asset('img/silver_logo.webp') }}" class="w-14 h-14 drop-shadow-md" alt="Silver"
                title="Silver">
              <div>
                <p class="text-xl font-extrabold text-slate-500 display-font">Silver</p>
                <p class="text-xs text-slate-500">Premium Account</p>
              </div>
              @elseif($namaPaket == 'Gold' || $namaPaket == 3)
              <img src="{{ asset('img/gold_logo.png') }}" class="w-14 h-14 drop-shadow-md" alt="Gold" title="Gold">
              <div>
                <p class="text-xl font-extrabold text-amber-500 display-font">Gold</p>
                <p class="text-xs text-slate-500">VIP Account</p>
              </div>
              @else
              <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-400 shrink-0">
                <i class="fa-solid fa-box-open"></i>
              </div>
              <p class="text-sm text-slate-600 font-medium">Anda belum memiliki paket. Silakan hubungi admin.</p>
              @endif
            </div>
            @endif
          </div>

          <div class="mt-6 border-t border-slate-100 pt-6">
            <a href="{{ route('homechangeplan') }}"
              class="flex items-center justify-center px-4 py-3 bg-slate-50 hover:bg-slate-100 text-slate-700 rounded-xl font-semibold transition-colors border border-slate-200">
              <i class="fa-solid fa-box-open mr-2 text-indigo-500"></i> Ganti Paket / Change Plan
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content area -->
    <div class="lg:w-2/3">
      <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden" x-data="{ tab: 'profile' }">

        <!-- Custom Tailwind Tabs Header -->
        <div
          class="flex border-b border-slate-100 flex-col sm:flex-row divide-y sm:divide-y-0 sm:divide-x divide-slate-100">
          <button @click="tab = 'profile'"
            :class="{ 'bg-slate-50 text-indigo-600 font-bold border-b-2 border-indigo-500': tab === 'profile', 'text-slate-500 hover:text-slate-700 hover:bg-slate-50 font-medium border-b-2 border-transparent': tab !== 'profile' }"
            class="flex-1 py-4 px-6 text-center transition-all focus:outline-none">
            <i class="fa-regular fa-id-card mr-2"></i> Account Information
          </button>
          <button @click="tab = 'order'"
            :class="{ 'bg-slate-50 text-indigo-600 font-bold border-b-2 border-indigo-500': tab === 'order', 'text-slate-500 hover:text-slate-700 hover:bg-slate-50 font-medium border-b-2 border-transparent': tab !== 'order' }"
            class="flex-1 py-4 px-6 text-center transition-all focus:outline-none">
            <i class="fa-solid fa-clock-rotate-left mr-2"></i> Order History
          </button>
        </div>

        <!-- Tab Content -->
        <div class="p-6 md:p-10">

          <!-- Profile Tab -->
          <div x-show="tab === 'profile'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            style="display: none;">
            <h3 class="text-2xl font-bold text-slate-800 mb-6 flex items-center">
              <span
                class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3 shadow-sm">
                <i class="fa-solid fa-user-pen"></i>
              </span>
              Edit Profil
            </h3>

            <form action="{{ route('account-editAccount') }}" method="POST" class="space-y-6">
              @csrf
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="username" class="block text-sm font-semibold text-slate-700 mb-2">Username</label>
                  <input type="text" id="username" name="username" value="{{ Auth::user()->name }}"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors focus:bg-white"
                    required>
                </div>
                <div>
                  <label for="gmail" class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                  <input type="email" id="gmail" name="gmail" value="{{ Auth::user()->email }}" disabled
                    class="w-full px-4 py-3 bg-slate-100 border border-slate-200 rounded-xl text-slate-500 cursor-not-allowed">
                </div>
                <div>
                  <label for="gender" class="block text-sm font-semibold text-slate-700 mb-2">Gender</label>
                  <input type="text" id="gender" name="gender" value="{{ Auth::user()->gender }}" disabled
                    class="w-full px-4 py-3 bg-slate-100 border border-slate-200 rounded-xl text-slate-500 cursor-not-allowed">
                </div>
                <div>
                  <label for="created_at" class="block text-sm font-semibold text-slate-700 mb-2">Account
                    Created</label>
                  <input type="text" id="created_at" name="created_at" value="{{ Auth::user()->created_at }}" disabled
                    class="w-full px-4 py-3 bg-slate-100 border border-slate-200 rounded-xl text-slate-500 cursor-not-allowed">
                </div>
              </div>
              <div class="pt-4 border-t border-slate-100 text-right">
                <button type="submit"
                  class="inline-flex justify-center items-center py-3 px-8 rounded-xl shadow-lg shadow-emerald-500/20 text-white bg-emerald-600 hover:bg-emerald-700 font-bold transition-all hover:-translate-y-0.5">
                  Simpan Perubahan <i class="fa-solid fa-save ml-2"></i>
                </button>
              </div>
            </form>
          </div>

          <!-- Order History Tab -->
          <div x-show="tab === 'order'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
            <h3 class="text-2xl font-bold text-slate-800 mb-6 flex items-center">
              <span
                class="w-10 h-10 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center mr-3 shadow-sm">
                <i class="fa-solid fa-clock-rotate-left"></i>
              </span>
              Riwayat Order
            </h3>

            @if (Auth::user()->is_order == 1 && isset($pesans) && count($pesans) > 0)
            <!-- For multiple orders if $pesans is passed -->
            <div class="overflow-x-auto rounded-xl border border-slate-200 shadow-sm">
              <table class="w-full text-left border-collapse">
                <thead>
                  <tr class="bg-indigo-50 text-indigo-800 text-xs uppercase tracking-wider">
                    <th class="p-4 font-bold border-b border-indigo-100">ID Pesan</th>
                    <th class="p-4 font-bold border-b border-indigo-100">Status</th>
                    <th class="p-4 font-bold border-b border-indigo-100">Nomor WhatsApp</th>
                    <th class="p-4 font-bold border-b border-indigo-100 text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white text-sm">
                  @foreach($pesans as $p)
                  <tr class="hover:bg-slate-50 transition-colors">
                    <td class="p-4 text-slate-900 font-semibold align-middle">#{{ $p->id }}</td>
                    <td class="p-4 align-middle">
                      @if ($p->status == 1)
                      <span
                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 border border-emerald-200">
                        <i class="fa-solid fa-circle-check mr-1.5"></i> Confirmed
                      </span>
                      @else
                      <span
                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800 border border-amber-200">
                        <i class="fa-solid fa-clock mr-1.5"></i> Pending
                      </span>
                      @endif
                    </td>
                    <td class="p-4 align-middle">
                      <a href="https://wa.me/{{ $p->data->no_wa }}" target="_blank"
                        class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-medium">
                        <i class="fa-brands fa-whatsapp mr-1.5 text-lg"></i> {{ $p->data->no_wa }}
                      </a>
                    </td>
                    <td class="p-4 text-center align-middle">
                      <a href="{{ route('homeorder') }}"
                        class="inline-flex items-center px-3 py-1.5 bg-indigo-50 hover:bg-indigo-100 text-indigo-700 rounded-lg text-xs font-bold transition-colors">
                        Lihat Detail
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            @elseif (Auth::user()->is_order == 1 && isset($pesan))
            <!-- Fallback exact match for old single order logic -->
            <div class="overflow-x-auto rounded-xl border border-slate-200 shadow-sm">
              <table class="w-full text-left border-collapse">
                <thead>
                  <tr class="bg-indigo-50 text-indigo-800 text-xs uppercase tracking-wider">
                    <th class="p-4 font-bold border-b border-indigo-100">ID Pesan</th>
                    <th class="p-4 font-bold border-b border-indigo-100">Status</th>
                    <th class="p-4 font-bold border-b border-indigo-100">Nomor WhatsApp</th>
                    <th class="p-4 font-bold border-b border-indigo-100 text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white text-sm">
                  <tr class="hover:bg-slate-50 transition-colors">
                    <td class="p-4 text-slate-900 font-semibold align-middle">#{{ $pesan->id }}</td>
                    <td class="p-4 align-middle">
                      @if ($pesan->status == 1)
                      <span
                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 border border-emerald-200">
                        <i class="fa-solid fa-circle-check mr-1.5"></i> Confirmed
                      </span>
                      @else
                      <span
                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800 border border-amber-200">
                        <i class="fa-solid fa-clock mr-1.5"></i> Pending
                      </span>
                      @endif
                    </td>
                    <td class="p-4 align-middle">
                      <a href="https://wa.me/{{ $pesan->data->no_wa }}" target="_blank"
                        class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-medium">
                        <i class="fa-brands fa-whatsapp mr-1.5 text-lg"></i> {{ $pesan->data->no_wa }}
                      </a>
                    </td>
                    <td class="p-4 text-center align-middle">
                      <a href="{{ route('homeorder') }}"
                        class="inline-flex items-center px-3 py-1.5 bg-indigo-50 hover:bg-indigo-100 text-indigo-700 rounded-lg text-xs font-bold transition-colors">
                        Lihat Detail
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            @else
            <!-- Empty State -->
            <div class="text-center py-12 px-4 bg-slate-50 rounded-2xl border border-slate-100 border-dashed">
              <div
                class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-sm text-slate-400">
                <i class="fa-solid fa-box-open text-2xl"></i>
              </div>
              <h4 class="text-lg font-bold text-slate-800 mb-2">Belum Ada Order</h4>
              <p class="text-slate-500 mb-6">Anda belum pernah melakukan pemesanan undangan digital.</p>
              <a href="{{ route('homeorder') }}"
                class="inline-flex justify-center items-center py-2.5 px-6 rounded-xl shadow-lg shadow-indigo-500/20 text-white bg-indigo-600 hover:bg-indigo-700 font-bold transition-all hover:-translate-y-0.5">
                Pesan Sekarang <i class="fa-solid fa-arrow-right ml-2"></i>
              </a>
            </div>
            @endif
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Alpine.js for Tabs (Lightweight, ideal for exact replacing Bootstrap JS tabs) -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

<style>
  body {
    background-color: #f8fafc;
  }
</style>
@endsection