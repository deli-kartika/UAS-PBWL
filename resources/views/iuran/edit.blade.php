@extends('layouts.app')

@section('content')

<h2>Edit Data</h2>

    <form action="{{ url('iuran/' . $row->iuran_id) }}" method="post"> 
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">TANGGAL PEMBAYARAN</label>
            <input type="date" name="iuran_tgl" id="" class="form-control" value="{{ $row->iuran_tgl }}">
        </div>
        <div class="mb-3">
            <label for="">JENIS IURAN</label>
            <input type="text" name="iuran_jenis" id="" class="form-control" value="{{ $row->iuran_jenis }}">
        </div>
        <div class="mb-3">
            <label for="">JUMLAH</label>
            <input type="text" name="iuran_jumlah" id="" class="form-control" value="{{ $row->iuran_jumlah }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>  
    </form>

@endsection