@extends('layouts.main')

@section('content')
<div class="card">
	<div class="card-body">
    <h5>Edit Stock LKS</h5>
    <form method="POST" action="{{ route('stock.update',$data) }}">
    @csrf @method('patch')
        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" class="form-control">
                @foreach($kelas as $val)
                    @if($data->kelas == $val->id)
                        <option value="{{ $val->id }}" selected>{{ $val->kelas }}</option>
                    @else
                        <option value="{{ $val->id }}">{{ $val->kelas }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" placeholder="Masukkan Jumlah" class="form-control" value="{{ $data->jumlah }}"></input>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" placeholder="Masukkan Harga" class="form-control" value="{{ $data->harga }}"></input>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
    </div>
</div>
<!-- <hr>
<div class="card">
	<div class="card-body">
    <h5>Data Stock LKS</h5>
    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead style="background-color: #15aabf;">
            <tr>
                <th class="th-sm">No</th>
                <th class="th-sm">Kelas</th>
                <th class="th-sm">Jumlah</th>
                <th class="th-sm">Harga</th>
                <th class="th-sm">Nilai Persediaan</th>
                <th class="th-sm">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>6</td>
                <td>250</td>
                <td>40000</td>
                <td>Wadidaw</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div> -->
@endsection