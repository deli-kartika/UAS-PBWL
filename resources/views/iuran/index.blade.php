@extends('layouts.app')

@section('content')

<h2>Data Iuran</h2>

<a href="{{ url('iuran/create') }}" class="btn btn-info mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>TANGGAL PEMBAYARAN</th>
        <th>JENIS IURAN</th>
        <th>JUMLAH</th>
        <th>EDIT</th>
        <th>DELETE</th>

    </tr>
    @foreach ($rows as $row)
        <tr>
            <td>{{ $row->iuran_id }}</td>
            <td>{{ $row->iuran_tgl }}</td>
            <td>{{ $row->iuran_jenis}}</td>
            <td>{{ $row->iuran_jumlah}}</td>
            <td><a href="{{ url ('iuran/edit/'. $row->iuran_id) }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('iuran/'. $row->iuran_id) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger" >
                </form>
            </td>
        </tr>
    @endforeach

</table>

@endsection