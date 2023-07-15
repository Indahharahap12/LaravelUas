@extends('layouts.app')

@section('content')

<h2>Edit Data Orang Tua</h2>

<form action="{{url('ortu/'. $row->ortu_id)}}" method="post">
    <input type="hidden" name="_method" value= "PATCH">
    @csrf
    <div class = "mb-3">
        <label for="">Nama</label>
        <input type="text" name="ortu_nama" id="" class ="form-control" value="{{$row->ortu_nama}}">
    </div>
    <div class = "mb-3">
        <label for="">Tempat Tanggal Lahir</label>
        <input type="text" name="ortu_ttl" id="" class ="form-control" value="{{$row->ortu_ttl}}">
    </div>
    <div class = "mb-3">
        <label for="">Alamat</label>
        <textarea name="ortu_alamat" class ="form-control" id="" cols="30" rows="10" >{{$row->ortu_alamat}}</textarea>
    </div>
    <div class = "mb-3">
        <label for="">No Hp</label>
        <input type="text" name="ortu_nohp" id="" class ="form-control" value="{{$row->ortu_nohp}}">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Update" class ="btn btn-primary">
    </div>

</form>

@endsection