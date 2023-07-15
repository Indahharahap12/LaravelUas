@extends('layouts.app')

@section('content')

<h2>Tambah Data Orang Tua</h2>

<form action="{{url('ortu')}}" method="post">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="ortu_nama" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Tempat Tanggal Lahir</label>
        <input type="text" name="ortu_ttl" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">Alamat</label>
        <textarea name="ortu_alamat" class ="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class = "mb-3">
        <label for="">No Hp</label>
        <input type="text" name="ortu_nohp" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Simpan" class ="btn btn-primary">
    </div>

</form>

@endsection