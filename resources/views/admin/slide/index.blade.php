@extends('/template/app')
@section('content')
    <div class="container">
        <h2 class="mt-3">Halaman Slide Show</h2>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>
        <div class="container">
        @if (session('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Galeri
        </button>
        <div class="card mt-2">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="scope">Judul</th>
                                <th class="scope">Gambar</th>
                                <th class="scope">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->judul }}</td>
                                <td><img src="{{ asset('/storage/slide/'.$item->gambar) }}" width="10%"></td>
                                <td><a href="{{ route('slide.delete', $item->id) }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Slide Gambar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <form action="{{ route('slide.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mt">
                            <span class="input-group-text">Judul</span>
                            <input type="text" name="judul" class="form-control" required>
                        </div>
                        <div class="input-group mt-2">
                            <input type="file" name="gambar" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Slide</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
@endsection