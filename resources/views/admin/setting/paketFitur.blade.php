@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pt-28">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-extrabold text-slate-900 display-font">Pengaturan Paket Khusus Fitur</h1>
            <p class="text-slate-500 mt-1">Atur fitur yang tersedia untuk paket spesifik</p>
        </div>
        <a href="{{ route('admindashboard') }}"
            class="inline-flex items-center justify-center px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg font-medium transition-colors border border-slate-200 shadow-sm whitespace-nowrap">
            <i class="fa-solid fa-arrow-left mr-2 text-sm"></i> Kembali
        </a>
    </div>

    <!-- Setting Fitur -->
    <div class="bg-white rounded-3xl p-6 lg:p-8 border border-slate-100 shadow-sm relative overflow-hidden">
        <div class="absolute right-0 top-0 w-48 h-48 bg-amber-50 rounded-bl-full -z-0"></div>

        <div class="flex items-start mb-6 pb-4 border-b border-slate-100 relative z-10">
            <div
                class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-400 to-orange-500 text-white flex items-center justify-center mr-4 shadow-lg shadow-amber-500/30 shrink-0">
                <i class="fa-solid fa-star text-2xl"></i>
            </div>
            <div class="pt-1">
                <h2 class="text-xl font-bold text-slate-900 leading-tight">Setting Fitur</h2>
                <p class="text-sm text-slate-500 mt-1">Pilih fitur yang aktif untuk paket ini</p>
            </div>
        </div>

        <form action="{{ route('admin-updatedetailFitur') }}" method="POST"
            class="relative z-10 w-full max-w-2xl mx-auto mt-8">
            @csrf
            @method('patch')

            <div class="mb-8 bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <label for="paketDropdown-fitur" class="block text-sm font-bold text-slate-700 mb-2">Pilih
                    Paket:</label>
                <div class="relative">
                    <select id="paketDropdown-fitur" name="dropdownFitur"
                        class="w-full text-base pl-4 pr-10 py-3.5 bg-white border border-slate-200 rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors appearance-none font-bold cursor-pointer shadow-sm">
                        @foreach ($pakets as $paket)
                        <option value="{{$paket->id}}" @if ($loop->iteration == 1) selected @endif>{{$paket->nama}}
                        </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                        <i class="fa-solid fa-chevron-down text-base"></i>
                    </div>
                </div>
            </div>

            <script>
                let banyak_fitur = 0; 
            </script>
            <div class="space-y-3 mb-8 bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                <h4 class="text-base font-bold text-slate-700 mb-4 border-b border-slate-100 pb-3"><i
                        class="fa-solid fa-list-check text-amber-500 mr-2"></i> Daftar Fitur:</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 max-h-[400px] overflow-y-auto pr-2">
                    @foreach ($fiturs as $fitur)
                    <script>
                        banyak_fitur++; 
                    </script>
                    <label
                        class="flex items-center p-3.5 bg-slate-50 hover:bg-white rounded-xl border border-slate-200 cursor-pointer hover:border-amber-400 transition-all shadow-sm relative group">
                        <div class="flex items-center h-5">
                            <input type="checkbox" value="{{$fitur->id}}" name="checkboxFitur[]"
                                id="flexCheckFitur{{$loop->iteration}}"
                                class="w-5 h-5 text-amber-500 bg-white border-slate-300 rounded focus:ring-amber-500 focus:ring-2 cursor-pointer"
                                @if(in_array($fitur->id, $detail_bronze[1])) checked @endif>
                        </div>
                        <div class="ml-3 text-sm">
                            <span class="font-bold text-slate-800">{{$fitur->nama}}</span>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>

            <button type="submit"
                class="w-full flex justify-center py-4 px-4 rounded-xl shadow-lg shadow-emerald-500/20 text-white bg-emerald-600 hover:bg-emerald-700 font-bold text-lg transition-all hover:-translate-y-0.5">
                <i class="fa-solid fa-save mr-2 mt-1.5"></i> Simpan Pengaturan Fitur
            </button>
        </form>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const detail_fitur = document.querySelector('#paketDropdown-fitur');

    function checkInclude(array, value){
        for(let i = 0; i < array.length; i++){
            if(value == array[i]){
                return true;
            }
        }
        return false;
    }

    detail_fitur.addEventListener('change', function(){
        $.ajax({
            url: '{{ route('paket-change') }}',
            type: 'POST',
            data : {
                _token : '{{ csrf_token() }}',
                id_paket: detail_fitur.value,
                sesi : 'fitur'
            },
            success : function({detail_paket}){
                const fiturs_id = detail_paket.map(detil => detil.fitur_id);
                for(let i = 1; i <= banyak_fitur; i++){
                    const check = document.querySelector('#flexCheckFitur' + i);
                    if ( checkInclude(fiturs_id, check.value)) {
                        check.checked = true;
                    } else {
                        check.checked = false;
                    }
                }
            }
        })
    })
</script>
@endsection