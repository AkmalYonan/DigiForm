@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">
    <div class="flex flex-col lg:flex-row gap-8">

        <div class="lg:w-1/3">
            <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 sticky top-28">
                <div class="text-center">
                    <div class="relative inline-block mb-4">
                        <img class="w-28 h-28 rounded-full border-4 border-white shadow-md object-cover"
                            src="{{ asset('img/profiles.jpg') }}" alt="User Profile"
                            onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($namaUser->name) }}&background=6366f1&color=fff&size=128'" />
                        <div
                            class="absolute bottom-0 right-0 w-6 h-6 bg-emerald-500 border-2 border-white rounded-full">
                        </div>
                    </div>

                    <h4 class="text-xl font-bold text-slate-800">{{ $namaUser->name }}</h4>
                    <p class="text-sm text-slate-500 mb-6">{{ $namaUser->email }}</p>

                    <div class="h-px bg-slate-100 w-full my-6"></div>

                    <div class="text-left">
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Paket Anda Saat
                            Ini:</p>
                        @if(isset($namaPaket))
                        <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            @php
                            $isBronze = ($namaPaket == 'Bronze' || $namaPaket == 1);
                            $isSilver = ($namaPaket == 'Silver' || $namaPaket == 2);
                            $isGold = ($namaPaket == 'Gold' || $namaPaket == 3);

                            $logo = match(true) {
                            $isBronze => 'bronze_logo.png',
                            $isSilver => 'silver_logo.webp',
                            $isGold => 'gold_logo.png',
                            default => null
                            };
                            @endphp

                            @if($logo)
                            <img src="{{ asset('img/' . $logo) }}" class="w-14 h-14 drop-shadow-md"
                                alt="{{ $namaPaket }}">
                            <div>
                                <p
                                    class="text-xl font-extrabold @if($isBronze) text-amber-600 @elseif($isSilver) text-slate-500 @else text-amber-500 @endif">
                                    {{ $isBronze ? 'Bronze' : ($isSilver ? 'Silver' : 'Gold') }}</p>
                                <p class="text-xs text-slate-500">
                                    {{ $isBronze ? 'Paket Dasar' : ($isSilver ? 'Paket Populer' : 'Paket Premium') }}
                                </p>
                            </div>
                            @else
                            <div
                                class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-400 shrink-0">
                                <i class="fa-solid fa-box-open"></i>
                            </div>
                            <p class="text-sm text-slate-600 font-medium">Belum memiliki paket.</p>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:w-2/3">
            <div class="bg-white rounded-3xl p-6 md:p-10 shadow-lg border border-slate-100 relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-indigo-50 rounded-bl-full -z-0 opacity-50 pointer-events-none">
                </div>

                <div class="text-center mb-10 relative z-10 border-b border-slate-100 pb-6">
                    <span
                        class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-600 mb-4 shadow-sm">
                        <i class="fa-solid fa-pen-to-square text-xl"></i>
                    </span>
                    <h2 class="text-3xl font-extrabold text-slate-800">Update Pesanan</h2>
                    <p class="text-slate-500 mt-2">Perbarui data undangan Anda melalui form di bawah ini.</p>
                </div>

                <form action="{{ route('order-update') }}" method="POST" enctype="multipart/form-data"
                    class="relative z-10 space-y-10">
                    @csrf

                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <h3
                            class="text-lg font-bold text-slate-800 flex items-center mb-5 pb-3 border-b border-slate-200">
                            <i class="fa-solid fa-sliders text-indigo-500 mr-3"></i> Pengaturan Dasar
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @if(isset($templates))
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Pilih Desain:</label>
                                <select name="template_id"
                                    class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none">
                                    @foreach($templates as $template)
                                    <option value="{{ $template->id }}" {{ $template->id == $pesan->id_template ?
                                        'selected' : '' }}>
                                        {{ $template->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @endif

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Pilih Salam:</label>
                                <select name="salam"
                                    class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none">
                                    @foreach(['Selamat Pagi', 'Selamat Siang', 'Selamat Sore', 'Selamat Malam',
                                    'Assalamu`alaikum', 'Om Swastiastu', 'Salam Kebajikan', 'Salam Kristen', 'The
                                    Wedding'] as $salam)
                                    <option value="{{ $salam }}" {{ $pesan->data->salam_pembuka == $salam ? 'selected' :
                                        '' }}>{{ $salam }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <h3
                                class="text-lg font-bold text-slate-800 flex items-center mb-5 pb-3 border-b border-blue-100">
                                <i class="fa-solid fa-mars text-blue-500 mr-3"></i> Data Pria
                            </h3>
                            <input type="text" name="nama_mempelai_pria" value="{{ $pesan->mPria->nama_pria }}"
                                placeholder="Nama Panggilan"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 outline-none"
                                required>
                            <input type="text" name="nama_mempelai_pria_lengkap"
                                value="{{ $pesan->mPria->nama_pria_lengkap }}" placeholder="Nama Lengkap"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 outline-none"
                                required>
                            <div class="grid grid-cols-3 gap-2 align-middle">
                                <label class="text-sm flex items-center text-slate-600">Anak Ke-</label>
                                <input type="number" name="anak_ke_pria" value="{{ $pesan->mPria->anak_ke }}"
                                    class="col-span-2 px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white outline-none"
                                    required>
                            </div>
                            <input type="text" name="nama_ayah_pria" value="{{ $pesan->mPria->nama_ayah }}"
                                placeholder="Nama Ayah"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white outline-none"
                                required>
                            <input type="text" name="nama_ibu_pria" value="{{ $pesan->mPria->nama_ibu }}"
                                placeholder="Nama Ibu"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white outline-none"
                                required>
                            <input type="text" name="username_ig_pria" value="{{ $pesan->mPria->username_ig }}"
                                placeholder="Instagram (Tanpa @)"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white outline-none"
                                required>
                        </div>

                        <div class="space-y-4">
                            <h3
                                class="text-lg font-bold text-slate-800 flex items-center mb-5 pb-3 border-b border-pink-100">
                                <i class="fa-solid fa-venus text-pink-500 mr-3"></i> Data Wanita
                            </h3>
                            <input type="text" name="nama_mempelai_wanita" value="{{ $pesan->mWanita->nama_wanita }}"
                                placeholder="Nama Panggilan"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-pink-500 outline-none"
                                required>
                            <input type="text" name="nama_mempelai_wanita_lengkap"
                                value="{{ $pesan->mWanita->nama_wanita_lengkap }}" placeholder="Nama Lengkap"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-pink-500 outline-none"
                                required>
                            <div class="grid grid-cols-3 gap-2">
                                <label class="text-sm flex items-center text-slate-600">Anak Ke-</label>
                                <input type="number" name="anak_ke_wanita" value="{{ $pesan->mWanita->anak_ke }}"
                                    class="col-span-2 px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white outline-none"
                                    required>
                            </div>
                            <input type="text" name="nama_ayah_wanita" value="{{ $pesan->mWanita->nama_ayah }}"
                                placeholder="Nama Ayah"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white outline-none"
                                required>
                            <input type="text" name="nama_ibu_wanita" value="{{ $pesan->mWanita->nama_ibu }}"
                                placeholder="Nama Ibu"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white outline-none"
                                required>
                            <input type="text" name="username_ig_wanita" value="{{ $pesan->mWanita->username_ig }}"
                                placeholder="Instagram (Tanpa @)"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white outline-none"
                                required>
                        </div>
                    </div>

                    <div class="bg-slate-50 p-6 md:p-8 rounded-2xl border border-slate-100">
                        <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center">
                            <i class="fa-solid fa-calendar-check text-indigo-500 mr-3"></i> Detail Acara Pernikahan
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-4">
                                <label class="block text-sm font-bold text-indigo-900 uppercase tracking-tighter">Akad
                                    Nikah</label>
                                <input type="text" name="lokasi_akad" value="{{ $pesan->data->lokasi_akad }}"
                                    placeholder="Nama Tempat"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl outline-none shadow-sm"
                                    required>
                                <input type="date" name="tgl_akad" value="{{ $pesan->data->tgl_akad }}"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl outline-none shadow-sm"
                                    required>
                                <input type="text" name="jam_akad" value="{{ $pesan->data->jam_akad }}"
                                    placeholder="Waktu (e.g. 08:00 - Selesai)"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl outline-none shadow-sm"
                                    required>
                                <input type="text" name="iframeMaps_akad" value="{{ $pesan->data->link_akad}}"
                                    placeholder="Link Google Maps"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl outline-none shadow-sm"
                                    required>
                            </div>
                            <div class="space-y-4">
                                <label
                                    class="block text-sm font-bold text-indigo-900 uppercase tracking-tighter">Resepsi</label>
                                <input type="text" name="lokasi_resepsi" value="{{ $pesan->data->lokasi_resepsi }}"
                                    placeholder="Nama Tempat"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl outline-none shadow-sm"
                                    required>
                                <input type="date" name="tgl_resepsi" value="{{ $pesan->data->tgl_resepsi }}"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl outline-none shadow-sm"
                                    required>
                                <input type="text" name="jam_resepsi" value="{{ $pesan->data->jam_resepsi }}"
                                    placeholder="Waktu (e.g. 10:00 - 14:00)"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl outline-none shadow-sm"
                                    required>
                                <input type="text" name="iframeMaps_resepsi" value="{{ $pesan->data->link_resepsi}}"
                                    placeholder="Link Google Maps"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl outline-none shadow-sm"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <h3 class="text-xl font-bold text-slate-800 flex items-center">
                            <i class="fa-solid fa-images text-indigo-500 mr-3"></i> Upload Media Baru
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach(['fotoPria' => 'Foto Pria', 'fotoWanita' => 'Foto Wanita', 'fotoCouple' => 'Foto
                            Couple', 'fotoThumbnail' => 'Thumbnail', 'fotoBanner' => 'Banner'] as $name => $label)
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                                <label class="block text-[10px] font-bold uppercase text-slate-400 mb-2">{{ $label
                                    }}</label>
                                <input type="file" name="{{ $name }}"
                                    class="text-xs w-full block file:mr-4 file:py-1 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            </div>
                            @endforeach
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-6 gap-3">
                            @for($i = 1; $i <= 6; $i++) <div
                                class="p-3 bg-slate-50 border border-dashed border-slate-300 rounded-xl text-center">
                                <label class="block text-[9px] font-bold text-slate-400 mb-1">GALLERY {{ $i }}</label>
                                <input type="file" name="foto{{ $i }}" class="text-[9px] w-full">
                        </div>
                        @endfor
                    </div>
            </div>

            <div class="bg-slate-900 p-8 rounded-3xl shadow-inner">
                <h3 class="text-white font-bold mb-6 text-center text-sm tracking-widest uppercase">Media Saat Ini</h3>
                <div class="grid grid-cols-3 gap-4 mb-8">
                    @foreach(['imgThumbnail' => 'Thumbnail', 'imgBanner' => 'Banner', 'imgCouple' => 'Couple'] as $key
                    => $title)
                    <div class="text-center group">
                        <p class="text-slate-500 text-[9px] mb-2 uppercase">{{ $title }}</p>
                        <div class="relative overflow-hidden rounded-xl h-24 border border-slate-700">
                            <img src="{{ asset('storage/'. $pesan->data->$key) }}"
                                class="w-full h-full object-cover transition-transform group-hover:scale-110">
                        </div>
                    </div>
                    @endforeach
                </div>

                @if($pesan->gallery)
                <div class="grid grid-cols-6 gap-2 border-t border-slate-800 pt-6">
                    @foreach(['foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'foto6'] as $foto)
                    <div class="aspect-square rounded-lg overflow-hidden border border-slate-700">
                        <img src="{{ asset('storage/'. $pesan->gallery->$foto) }}" class="w-full h-full object-cover">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <div class="bg-indigo-50 p-6 rounded-2xl border border-indigo-100">
                <h3 class="font-bold text-indigo-900 mb-4 flex items-center">
                    <i class="fa-solid fa-star text-indigo-500 mr-2"></i> Fitur Undangan
                </h3>
                @if(isset($fiturs))
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    @foreach($fiturs as $fitur)
                    @php
                    $isMandatory = $loop->iteration < 7; $isChecked=$fitur_pilih->contains('id_fitur', $fitur->id) ||
                        $isMandatory;
                        @endphp
                        <label
                            class="flex items-center gap-3 p-3 bg-white rounded-xl shadow-sm cursor-pointer border-2 transition-all {{ $isChecked ? 'border-indigo-500 bg-indigo-50/30' : 'border-transparent hover:border-slate-200' }}">
                            <input type="checkbox" name="selected_fiturs[]" value="{{ $fitur->id }}"
                                class="w-5 h-5 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" {{
                                $isChecked ? 'checked' : '' }} {{ $isMandatory ? 'disabled' : '' }}>

                            @if($isMandatory)
                            <input type="hidden" name="selected_fiturs[]" value="{{ $fitur->id }}">
                            @endif
                            <span class="text-sm font-medium text-slate-700">{{ $fitur->nama }}</span>
                        </label>
                        @endforeach
                </div>
                @endif
            </div>

            <div class="pt-6 flex flex-col md:flex-row gap-4 relative z-10">
                <button type="submit"
                    class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 rounded-2xl shadow-lg shadow-indigo-200 transition-all transform hover:-translate-y-1 active:scale-95">
                    Simpan Perubahan
                </button>
                <a href="#"
                    class="flex items-center justify-center bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 font-bold py-4 px-8 rounded-2xl transition-all shadow-sm">
                    <i class="fa-solid fa-eye mr-2"></i> Preview
                </a>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection