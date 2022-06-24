@extends('/portal/app')
@section('content')
<div class="site-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            @foreach ($profil as $item)
                <div class="text-center">
                    <img src="{{ asset('storage/profil/'.$item->gambar) }}" alt="" width="30%">
                    <h2>{{ $item->judul }}</h2>
                </div>
                {!! $item->des !!}
            @endforeach
        </div>
    </div>
</div>
@endsection