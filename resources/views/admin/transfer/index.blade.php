@extends('../template/app')
@section('content')

<h1>Data <strong>Transfer</strong></h1>
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
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#nasabahModal">
        <i class="bi bi-send-plus"></i> Transaction
    </button>
</div>
<div class="table-responsive">
    <table class="table table-striped" id="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Transaksi</th>
            <th scope="col">No Rekening</th>
            <th scope="col">Nama Pengirim</th>
            <th scope="col">Nama Penerima</th>
            <th scope="col">Nominal</th>
            @can('isAdmin')
            <th scope="col">Action</th>
            @elsecan('isTeller')
            @endcan
          </tr>
        </thead>
        <tbody>
        @php
            $no = 0;
        @endphp
          @foreach ($data as $item)
            <tr>
                <th scope="row">{{ ++$no }}</th>
                <td>{{ $item->transaksi }}</td>
                <td>{{ $item->nasabah_pengirim->no_rekening }}</td>
                <td>
                  @if ($item->nasabah_pengirim->id == $item->id_pengirim)
                      {{ $item->nasabah_pengirim->nama }}
                  @endif
                </td>
                <td>
                  @if ($item->nasabah_penerima->id == $item->id_penerima)
                      {{ $item->nasabah_penerima->nama }}
                  @endif
                </td>
                <td>Rp {{ number_format($item->jumlah_pengirim) }}</td>
                @can('isAdmin')
                <td>
                  <a href="{{ route('transfer.delete',$item->id) }}" class="btn btn-danger" onclick="return confirm('Yakin Anda Ingin Menghapus?')"><i class="bi bi-trash"></i></a>
                </td>
                @elsecan('isTeller')
                @endcan
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
<div class="modal fade" id="nasabahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Transfer Rekening</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('transfer.create') }}" method="post">
            @csrf
            <div class="modal-body">
                <div class="input-group mt-2">
                    <span class="input-group-text">No Rekening</span>
                    <input type="hidden" name="transaksi" value="{{ $hasil }}">
                    <select class="form-select" aria-label="Default select example" name="id_pengirim">
                        <option selected>.:: Pilih Rekening Pengirim ::.</option>
                        @foreach ($nasabah as $rekening)
                            <option value="{{ $rekening->id }}" aria-required="true">{{$rekening->no_rekening}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mt-2">
                  <span class="input-group-text">No Rekening</span>
                  <input type="hidden" name="transaksi" value="{{ $hasil }}">
                  <select class="form-select" aria-label="Default select example" name="id_penerima">
                      <option selected>.:: Pilih Rekening Penerima ::.</option>
                      @foreach ($nasabah as $rekening)
                          <option value="{{ $rekening->id }}" aria-required="true">{{$rekening->no_rekening}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Nominal Pengirim</span>
                    <input type="number" name="jumlah_pengirim" class="form-control" placeholder="Nominal" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="bi bi-send-check"></i> Send Transaction</button>
            </div>
        </form>
        </div>
    </div>
  </div>
@endsection
  @push('script')
  {{-- <script src="{{ asset('js/select2.js') }}" type="text/javascript"></script> --}}
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
  @endpush