{{-- @dd($detail_bronze) --}}
@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-4">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="container shadow-lg py-3 my-3 rounded-3">
                <p class="lead">Setting Template<span class="font-kecil"><br>Pilih Paket untuk Mensetting bagian
                        Template</span>
                </p>
                <form action="{{ route('admin-updatedetailTemplate') }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="pb-3">
                        <select class="form-select" id="paketSelect" name="dropdownTemplate">
                            @foreach ($pakets as $paket)
                            <option value="{{$paket->id}}" @if ($loop->iteration == 1)
                                selected
                                @endif>{{$paket->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <script>
                        let banyak_template = 0;
                    </script>
                    @foreach ($templates as $template)
                    <script>
                        banyak_template++;
                    </script>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$template->id}}"
                            name="checkboxTemplate[]" id="flexCheck{{$loop->iteration}}" @if (in_array($template->id,
                        $detail_bronze[0]))
                        checked
                        @endif>
                        <!-- Unique ID for each checkbox -->
                        <label class="form-check-label" for="flexCheck{{$loop->iteration}}">
                            {{$template->nama}}
                        </label>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-sm btn-success w-100 mt-2">Submit</button>
                </form>
            </div>
            <button type="button" class="btn btn-sm btn-danger mt-2 mb-3"
                onclick="location.href='{{ route('admindashboard') }}'">BACK</button>
        </div>
        {{-- <div class="col-12 col-md-3">

        </div> --}}
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const detail_template = document.querySelector('#paketSelect');
    const detail_fitur = document.querySelector('#paketDropdown-fitur');

    function checkInclude(array, value){
        for(let i = 0; i < array.length; i++){
            if(value == array[i]){
                return true;
            }
        }
        return false;
    }

    detail_template.addEventListener('change', function(){
        // console.log('tes ubah paket');
        $.ajax({
            url: '{{ route('paket-change') }}',
            type: 'POST',
            data : {
                _token : '{{ csrf_token() }}',
                id_paket: detail_template.value,
                sesi : 'template'
            },
            success : function({detail_paket}){
                console.log(detail_paket);
                const templates_id = detail_paket.map(detil => detil.template_id);
                // console.log(templates_id);
                for(let i = 1; i <= banyak_template; i++){
                    const check = document.querySelector('#flexCheck' + i);
                    // console.log(check.value);
                    if ( checkInclude(templates_id, check.value)) {
                        // console.log('berhasil');
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