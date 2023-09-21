@section('footer')
</div>
<div class="py-4 bg-warna1 text-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-unstyled ">
                    <span class="fw-bolder fs-4">Digiform</span>
                    {{-- <li><a class="text-dark" href="{{ route('home') }}">Home</a></li>
                    <li><a class="text-dark" href="{{ route('hometemplate') }}">Template</a></li>
                    <li><a class="text-dark" href="{{ route('homepricelist') }}">Pricelist</a></li>
                    <li><a class="text-dark" href="{{ route('homeorder') }}">Order</a></li> --}}
                </ul>
            </div>
            <div class="col-md-6">
                <p><i class="fa-solid fa-map-location-dot"> </i> Ruko Villa Melati Mas Blok B8-1 No. 5,
                    Serpong - Tangerang 15323</p>
                <p><i class="fa-solid fa-envelope"> </i> undangan@sap-samara.com</p>
                {{-- <a href="wa.me" class="text-dark"><i class="fa-solid fa-phone"> </i> +6221 5315 1371</a> --}}
                <a href="https://wa.me/{{ $whatsappNumber }}" class="text-dark"><i class="fa-solid fa-phone"> </i> {{
                    $whatsappNumber }}</a>
            </div>
        </div>
    </div>
</div>
@endsection