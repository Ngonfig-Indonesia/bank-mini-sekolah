@extends('/template/app')
@section('content')
    <div class="container">
        <h2 class="mt-3">Edit <strong>Data Guru</strong></h2>
        <form action="{{ route('update.guru') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mt">
                <span class="input-group-text">Nip</span>
                <input type="hidden" name="id" value="{{ $guru->id }}">
                <input type="text" name="nip" class="form-control" value="{{ $guru->nip }}" required>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Nama</span>
                <input type="text" name="nama" class="form-control" value="{{ $guru->nama }}" required>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Alamat</span>
                <textarea name="alamat" id="" class="form-control">{{ $guru->alamat }}</textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Guru</button>
            </div>
        </form>    
    </div>
@endsection