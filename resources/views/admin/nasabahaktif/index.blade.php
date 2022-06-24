@extends('../template/app')
@section('content')

<h1>Nasabah<strong> Aktif / Non Aktif</strong></h1>
<div class="table-responsive">
    <table class="table table-striped" id="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nis</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Status</th>
            <th scope="col">Aktif/Non Aktif</th>
          </tr>
        </thead>
        <tbody>
        @php
            $no = 0;
        @endphp
          @foreach ($data as $item)
            <tr>
                <th scope="row">{{ ++$no }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->kelas->kelas }}</td>
                <td>{{ $item->jurusan->jurusan }}</td>
                <td>{{ $item->status }}</td>
                <td>
                  @foreach ($item->tabunganmasuk as $items)
                  
                  @endforeach
                    @if ($items->id_nasabah = true)
                        {{ "Aktif"}}  
                    @else
                      {{ "Tidak Aktif "}} 
                    @endif
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection