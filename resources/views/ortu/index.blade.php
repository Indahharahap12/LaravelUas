@extends('layouts.app')

@section('content')

<h2>Data Orang Tua</h2>

<a href = "{{url('ortu/create')}}" class="btn btn-success mb-3">Tambah Data</a>

<table class = "table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($rows as $row)
        <tr>
        <td>{{$row->ortu_id}}</td>
        <td>{{$row->ortu_nama}}</td>
        <td>{{$row->ortu_ttl}}</td>
        <td>{{$row->ortu_alamat}}</td>
        <td>{{$row->ortu_nohp}}</td>
        <td><a href = "{{url('ortu/edit/' . $row->ortu_id) }}" class= "btn btn-info">Edit</a></td>
        <td>
                <form action="{{url('ortu/'. $row->ortu_id)}}" method="post">
                    <input type="hidden" name="_method" value= "Delete">
                    @csrf
                    <input type="submit" value="Delete" class= "btn btn-danger">
                </form>
            </td>   
        </tr>
    @endforeach
</table>

@endsection