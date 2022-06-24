@extends('/portal/app')
@section('content')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="text-center mt-4">
                <h2>Berita <strong>Sekolah</strong></h2>
            </div>
            @foreach ($informasis as $item)
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="{{ asset('storage/infromasi/'.$item->gambar) }}" class="img-fluid rounded-start" >
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul}}</h5>
                            <p class="card-text">{!! Str::limit($item->informasi, 400)!!}</p>
                            <a href="{{ route('informasi.detail',$item->id) }}">Read More</a>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $informasis->links() }}
    </div>
</div>
@endsection