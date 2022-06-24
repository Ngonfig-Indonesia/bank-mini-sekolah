@extends('/template/app')
@section('content')
    <div class="container">
        <h2 class="mt-3">Edit <strong>Halaman Informasi</strong></h2>
        <form action="{{ route('informasi.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mt">
                <span class="input-group-text">Judul</span>
                <input type="hidden" name="id" value="{{ $data->id }}">
                <input type="text" name="judul" class="form-control" value="{{ $data->judul }}" required>
            </div>
            <div class="mt-2">
                <textarea name="informasi" class="form-control" id="my-editor" width="100%">{{ $data->informasi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2" value="Update">Update</button>
        </form>
    </div>
@endsection
@push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#my-editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush