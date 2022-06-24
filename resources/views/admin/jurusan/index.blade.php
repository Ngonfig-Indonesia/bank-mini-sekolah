@extends('../template/app')
@section('content')

<h1>Data <strong>Jurusan</strong></h1>
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
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#nasabahModal">
        Tambah Data
    </button>
</div>
<div class="table-responsive">
    <table class="table table-striped" id="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @php
            $no = 0;
        @endphp
          @foreach ($data as $item)
            <tr>
                <th scope="row">{{ ++$no }}</th>
                <td>{{ $item->jurusan }}</td>
                <td>
                    <button type="button" class="btn btn-success editJurusan" data-bs-toggle="modal" data-bs-target="#jurusanModal" data-id="{{ $item->id }}">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <a href="{{ route('jurusan.delete',$item->id) }}" class="btn btn-danger" onclick="return confirm('Yakin Anda Ingin Menghapus?')"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/modal.js') }}" type="text/javascript"></script>
@endpush
<div class="modal fade" id="nasabahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('jurusan.create') }}" method="post">
            @csrf
            <div class="modal-body">
                <div class="input-group mt">
                    <span class="input-group-text">Jurusan</span>
                    <input type="text" name="jurusan" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
        </div>
    </div>
  </div>
  <div class="modal fade" id="jurusanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('jurusan.update') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="input-group mt">
                        <span class="input-group-text">Jurusan</span>
                        <input type="hidden" id="id" name="id">
                        <input type="text" name="jurusan" class="form-control" id="jurusans" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>