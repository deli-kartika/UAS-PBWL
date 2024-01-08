@extends('layouts.app')

@section('content')

<h2>Edit Data Transaksi</h2>

<form action="{{ url('transaksi/' . $row->transaksi_id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">NAMA ANGGOTA</label>
        <select name="anggota_id" id="anggota_id" class="form-control" required>
            @foreach ($anggota as $Anggota)
                <option value="{{ $Anggota->id_anggota }}">{{ $Anggota->nama_anggota }}</option>
            @endforeach
            </select>     
    </div>

    <div class="mb-3">
        <label for="">JENIS IURAN</label>
        <select name="id_iuran" id="id_iuran" class="form-control" required>
            @foreach ($iuran as $Iuran)
                <option value="{{ $Iuran->iuran_id }}">{{ $Iuran->iuran_jenis }}</option>
            @endforeach
            </select>
    </div>

    <div class="mb-3">
        <label for="">JUMLAH</label>
        <input type="text" name="jumlah_iuran" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">TANGGAL BAYAR</label>
        <input type="date" name="transaksi_tgl_bayar" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">TANGGAL JATUH TEMPO</label>
        <input type="date" name="tanggal_jatuhtempo" id="" class="form-control">
    </div>

    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>


@endsection