<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Anggota;
use App\Models\Iuran;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::all();
       return view('transaksi.index' , compact('rows'));

       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = Anggota::all();
        $iuran = Iuran::all();
        return view('transaksi.create', compact('anggota','iuran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'anggota_id'            => $request->anggota_id,
            'id_iuran'              => $request->id_iuran,
            'jumlah_iuran'          => $request->jumlah_iuran,
            'transaksi_tgl_bayar'   => $request->transaksi_tgl_bayar,
            'tanggal_jatuhtempo'    => $request->tanggal_jatuhtempo
       
        ]);
        return redirect ('transaksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row        = Transaksi::find($id);
        $anggota    = Anggota::all();
        $iuran      = Iuran::all();
        return view('transaksi.edit', compact('row','anggota','iuran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row =Transaksi::findOrFail($id);

        $row->update([
            'anggota_id'            => $request->anggota_id,
            'id_iuran'              => $request->id_iuran,
            'jumlah_iuran'          => $request->jumlah_iuran,
            'transaksi_tgl_bayar'   => $request->transaksi_tgl_bayar,
            'tanggal_jatuhtempo'    => $request->tanggal_jatuhtempo
        ]);
        return redirect ('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row =Transaksi::findOrFail($id);

        $row->delete();

        return redirect ('transaksi');
    }
}
