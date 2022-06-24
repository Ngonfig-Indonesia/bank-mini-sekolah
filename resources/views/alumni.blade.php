@extends('/portal/app')
@section('content')
<div class="site-section">
    <div class="container">
        <h2 class="mt-5">Data Nama Alumni</h2>
        <div class="row table-responsive">
            <table class="table table-striped" id="tabless">
                <thead>
                    <tr>
                        <th class="scope">No</th>
                        <th class="scope">Nama</th>
                        <th class="scope">Angkatan</th>
                        <th class="scope">Email</th>
                        <th class="scope">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($alumni as $item)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->angkatan }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->alamat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection