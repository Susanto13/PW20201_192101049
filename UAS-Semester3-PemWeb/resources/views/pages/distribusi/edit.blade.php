@extends('layouts.main')

@section('content')
<div class="card">
	<div class="card-body">
    <h5>Edit Distribusi LKS</h5>
    <form method="POST" action="{{ route('distribusi.update', $data) }}">
    @csrf @method('patch')
        <div class="form-group">
            <label>Nama Sekolah</label>
            <input type="text" name="namaSekolah" value="{{ $data->namaSekolah }}" placeholder="Masukkan Nama Sekolah" class="form-control"></input>
        </div>
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
            <input type="number" name="jumlah" value="{{ $data->jumlah }}" placeholder="Masukkan Jumlah" class="form-control"></input>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
    </div>
</div>
@endsection