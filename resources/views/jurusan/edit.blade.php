@extends('layouts.app')

@section('content')

<h2>Edit Data Jurusan</h2>

<form action="{{url('jurusan/'. $row->jurusan_id)}}" method="post">
    <input type="hidden" name="_method" value= "PATCH">
    @csrf
    <div class = "mb-3">
        <label for="">Nama Jurusan</label>
        <input type="text" name="jurusan_nama" id="" class ="form-control" value="{{$row->jurusan_nama}}">
    </div>
    <div class = "mb-3">
        <label for="">Nama Siswa</label>
        <input type="text" name="jurusan_nama_siswa" id="" class ="form-control" value="{{$row->jurusan_nama_siswa}}">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Update" class ="btn btn-primary">
    </div>

</form>

@endsection