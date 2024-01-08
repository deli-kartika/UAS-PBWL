@extends('layouts.app')

@section('content')

<h2>Tambah Data</h2>

    <form action="{{ url('iuran')}}" method="post"> 
        @csrf
        <div class="mb-3">
            <label for="">TANGGAL PEMBAYARAN</label>
            <input type="date" name="iuran_tgl" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">JENIS IURAN</label>
            <input type="text" name="iuran_jenis" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">JUMLAH</label>
            <input type="text" name="iuran_jumlah" id="" class="form-control">
        </div>
        
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>  
    </form>

@endsection