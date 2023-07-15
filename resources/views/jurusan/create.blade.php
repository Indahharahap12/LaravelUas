@extends('layouts.app')

@section('content')

<h2>Tambah Data Jurusan</h2>

<form action="{{url('jurusan')}}" method="post">
    @csrf
    <div class = "mb-3">
        <label for="">Nama Jurusan</label>
        <input type="text" name="jurusan_nama" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Nama Siswa</label>
        <input type="text" name="jurusan_nama_siswa" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Simpan" class ="btn btn-primary">
    </div>

</form>

@endsection