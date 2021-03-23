@extends('layouts.main')

@section('content')
<div class="card">
	<div class="card-body">
    <h5>Distribusi LKS</h5>
    <form method="POST" action="{{ route('distribusi.store') }}">
    @csrf
        <div class="form-group">
            <label>Nama Sekolah</label>
            <input type="text" name="namaSekolah" placeholder="Masukkan Nama Sekolah" class="form-control"></input>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" class="form-control">
                <option selected disabled>Pilih Kelas</option>
                    @foreach($kelas as $val)
                        <option value="{{ $val->id }}">{{ $val->kelas }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" placeholder="Masukkan Jumlah" class="form-control"></input>
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
    </div>
</div>
<hr>
<div class="card">
	<div class="card-body">
    <h5>Data distribusi LKS</h5>
    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead style="background-color: #15aabf;">
            <tr>
                <th class="th-sm">No.</th>
                <th class="th-sm">Nama Sekolah</th>
                <th class="th-sm">Kelas</th>
                <th class="th-sm">Jumlah</th>
                <th class="th-sm">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $show)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$show->namaSekolah}}</td>
                <td>{{$show->kelas}}</td>
                <td>{{$show->jumlah}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a type="button" class="btn btn-primary" href="{{ route('distribusi.edit', $show->id) }}"><i class="fa fa-edit" style="color: white;"></i></a>
                        <a type="button" class="btn btn-danger delete-btn" href="{{ route('distribusi.destroy', $show->id) }}"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    </div>
</div>
@endsection