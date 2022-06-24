@extends('/template/app')
@section('content')
    <div class="container">
        <h2 class="mt-3">Edit <strong>Data Siswa</strong></h2>
        <form action="{{ route('update.siswa') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mt">
                <span class="input-group-text">Nis</span>
                <input type="hidden" name="id" value="{{ $siswa->id }}">
                <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" required>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Nama</span>
                <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Alamat</span>
                <textarea name="alamat" id="" class="form-control">{{ $siswa->alamat }}</textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Siswa</button>
            </div>
        </form>    
    </div>
@endsection