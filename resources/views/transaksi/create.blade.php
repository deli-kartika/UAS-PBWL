@extends('layouts.app')

@section('content')

<h2>Tambah Data Transaksi</h2>

<form action="{{ url('transaksi') }}" method="post">
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
        <input type="TEXT" name="jumlah_iuran" id="" class="form-control">
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
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection