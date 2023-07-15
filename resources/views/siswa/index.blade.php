@extends('layouts.app')

@section('content')

<h2>Data Siswa Baru</h2>

<a href = "{{url('siswa/create')}}" class="btn btn-success mb-3">Add New</a>

<table class = "table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($rows as $row)
        <tr>
        <td>{{$row->siswa_id}}</td>
        <td>{{$row->siswa_nama}}</td>
        <td>{{$row->siswa_jk}}</td>
        <td>{{$row->siswa_ttl}}</td>
        <td>{{$row->siswa_alamat}}</td>
        <td>{{$row->siswa_nohp}}</td>
        <td><a href = "{{url('siswa/edit/' . $row->siswa_id) }}" class= "btn btn-info">Edit</a></td>
        <td>
                <form action="{{url('siswa/'. $row->siswa_id)}}" method="post">
                    <input type="hidden" name="_method" value= "Delete">
                    @csrf
                    <input type="submit" value="Delete" class= "btn btn-danger">
                </form>
            </td>   
        </tr>
    @endforeach
</table>

@endsection