@extends('layouts.app')

@section('content')

<h2>Tambah Data Anggota</h2>

    <form action="{{ url('anggota')}}" method="post"> 
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="nama_anggota" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">EMAIL</label>
            <input type="text" name="email" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">ALAMAT</label>
            <textarea name="alamat" class="form-control" id="" cols="10" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="no_hp" id="" class="form-control">
        </div>
        
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>  
    </form>

@endsection