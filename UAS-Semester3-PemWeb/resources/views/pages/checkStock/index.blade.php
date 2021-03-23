@extends('layouts.main')

@section('content')
<div class="card">
	<div class="card-body">
    <h5>Cek Stok</h5>
    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead style="background-color: #15aabf;">
            <tr>
                <th class="th-sm">No.</th>
                <th class="th-sm">Kelas</th>
                <th class="th-sm">Jumlah</th>
                <th class="th-sm">Harga</th>
                <th class="th-sm">Nilai Persediaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $val)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $val->kelas }}</td>
                    <td>{{ $val->jumlah }}</td>
                    <td>{{ $val->harga }}</td>
                    <td>{{ $val->jumlah * $val->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection