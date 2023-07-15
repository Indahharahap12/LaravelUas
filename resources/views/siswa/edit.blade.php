@extends('layouts.app')

@section('content')

<h2>Edit Data Siswa</h2>

<form action="{{url('siswa/'. $row->siswa_id)}}" method="post">
    <input type="hidden" name="_method" value= "PATCH">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="siswa_nama" id="" class ="form-control" value="{{$row->siswa_nama}}">
    </div>
    <div class = "mb-3">
        <label for="">Jenis Kelamin</label>
        <input type="text" name="siswa_jk" id="" class ="form-control" value="{{$row->siswa_jk}}">
    </div>
    <div class = "mb-3">
        <label for="">Tempat Tanggal Lahir</label>
        <input type="text" name="siswa_ttl" id="" class ="form-control" value="{{$row->siswa_ttl}}">
    </div>
    <div class = "mb-3">
        <label for="">Alamat</label>
        <textarea name="siswa_alamat" class ="form-control" id="" cols="30" rows="10" >{{$row->siswa_alamat}}</textarea>
    </div>
    <div class = "mb-3">
        <label for="">No Hp</label>
        <input type="text" name="siswa_nohp" id="" class ="form-control" value="{{$row->siswa_nohp}}">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Update" class ="btn btn-primary">
    </div>

</form>

@endsection