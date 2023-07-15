@extends('layouts.app')

@section('content')

<h2>Tambah Data Siswa</h2>

<form action="{{url('siswa')}}" method="post">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="siswa_nama" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Jenis Kelamin</label>
        <input type="text" name="siswa_jk" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Tempat Tanggal Lahir</label>
        <input type="text" name="siswa_ttl" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Alamat</label>
        <textarea name="siswa_alamat" class ="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class = "mb-3">
        <label for="">No Hp</label>
        <input type="text" name="siswa_nohp" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Simpan" class ="btn btn-primary">
    </div>

</form>

@endsection