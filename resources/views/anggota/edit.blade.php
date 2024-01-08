@extends('layouts.app')

@section('content')

<h2>Edit Data Anggota</h2>

    <form action="{{ url('anggota/' . $row->id_anggota) }}" method="post"> 
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="nama_anggota" id="" class="form-control" value="{{ $row->nama_anggota }}">
        </div>
        <div class="mb-3">
            <label for="">EMAIL</label>
            <input type="text" name="email" id="" class="form-control" value="{{ $row->email }}">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <textarea name="alamat" class="form-control" id="" cols="10" rows="5">{{ $row->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="no_hp" id="" class="form-control" value="{{ $row->no_hp }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>  
    </form>

@endsection