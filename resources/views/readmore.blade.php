@extends('/portal/app')
@section('content')
<div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="mb-5">
            <div class="text-center mt-5">
                <h2>{{ $informasi->judul}}</h2>
            </div>
            <div class="text-center">
                <img src="{{ asset('storage/infromasi/'.$informasi->gambar) }}" alt="" width="50%">
            </div>
            <div class="">
                <p>{!! $informasi->informasi !!}</p>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection