@extends('layouts.app')

@section('content')

<h2>Data Anggota</h2>

<a href="{{ url('anggota/create') }}" class="btn btn-info mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
        <th>NO HP</th>
        <th>EDIT</th>
        <th>DELETE</th>

    </tr>
    @foreach ($rows as $row)
        <tr>
            <td>{{ $row->id_anggota }}</td>
            <td>{{ $row->nama_anggota }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->no_hp }}</td>
            <td><a href="{{ url ('anggota/edit/'. $row->id_anggota) }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('anggota/'. $row->id_anggota) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger" >
                </form>
            </td>
        </tr>
    @endforeach

</table>

@endsection