@extends('/template/app')
@section('content')
    <div class="container">
        <h2 class="mt-3">Edit <strong>Data Alumni</strong></h2>
        <form action="{{ route('alumni.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mt">
                <span class="input-group-text">Nama</span>
                <input type="hidden" name="id" value="{{ $data->id }}">
                <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Angkatan</span>
                <input type="text" name="angkatan" class="form-control" value="{{ $data->angkatan }}" required>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Email</span>
                <input type="text" name="email" class="form-control" value="{{ $data->email }}" required>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Alamat</span>
                <textarea name="alamat" id="" class="form-control">{{ $data->alamat}}</textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Alumni</button>
            </div>
        </form>    
    </div>
@endsection