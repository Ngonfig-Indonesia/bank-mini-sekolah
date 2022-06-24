@extends('/portal/app')
@section('content')
<div class="site-section">
    <div class="container">
        <h2 class="mt-5">Data Guru</h2>
        <div class="row table-responsive">
            <table class="table table-striped" id="tabless">
                <thead>
                    <tr>
                        <th class="scope">No</th>
                        <th class="scope">Nip</th>
                        <th class="scope">Nama</th>
                        <th class="scope">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($guru as $item)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <h2 class="mt-2">Data Siswa</h2>
        <div class="row table-responsive">
            <table class="table table-striped" id="tables">
                <thead>
                    <tr>
                        <th class="scope">No</th>
                        <th class="scope">Nis</th>
                        <th class="scope">Nama</th>
                        <th class="scope">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($siswa as $item)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection