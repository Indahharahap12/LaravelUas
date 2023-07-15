@extends('layouts.app')

@section('content')

<h2>Data Jurusan</h2>

<a href = "{{url('jurusan/create')}}" class="btn btn-success mb-3">Tambah Data</a>

<table class = "table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nama Jurusan</th>
        <th>Nama Siswa</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($rows as $row)
        <tr>
        <td>{{$row->jurusan_id}}</td>
        <td>{{$row->jurusan_nama}}</td>
        <td>{{$row->jurusan_nama_siswa}}</td>
        <td><a href = "{{url('jurusan/edit/' . $row->jurusan_id) }}" class= "btn btn-info">Edit</a></td>
        <td>
                <form action="{{url('jurusan/'. $row->jurusan_id)}}" method="post">
                    <input type="hidden" name="_method" value= "Delete">
                    @csrf
                    <input type="submit" value="Delete" class= "btn btn-danger">
                </form>
            </td>   
        </tr>
    @endforeach
</table>

@endsection