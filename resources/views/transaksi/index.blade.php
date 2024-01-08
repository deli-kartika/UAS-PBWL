@extends('layouts.app')

@section('content')

<h2>Data Transaksi</h2>

<a href="{{ url ('transaksi/create') }}" class="btn btn-info mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NAMA ANGGOTA</th>
        <th>JENIS IURAN</th>
        <th>JUMLAH</th>
        <th>TANGGAL JATUH TEMPO</th>
        <th>TANGGAL PEMBAYARAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->transaksi_id}}</td>
        <td>{{ $row->Anggota['nama_anggota'] }}</td>
        <td>{{ $row->Iuran['iuran_jenis'] }}</td>
        <td>{{ $row->jumlah_iuran }}</td>
        <td>{{ $row->transaksi_tgl_bayar }}</td>
        <td>{{ $row->tanggal_jatuhtempo }}</td>
        <td><a href="{{ url ('transaksi/edit/' . $row->transaksi_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('transaksi/'. $row->transaksi_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
    
</table>

@endsection