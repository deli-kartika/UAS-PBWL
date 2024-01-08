<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use Illuminate\Http\Request;

class IuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows  = Iuran::all();
        return view('iuran.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('iuran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Iuran::create ([
            'iuran_tgl' =>  $request->iuran_tgl,
            'iuran_jenis' => $request->iuran_jenis,
            'iuran_jumlah' =>  $request->iuran_jumlah
        ]);
        return redirect('iuran');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Iuran::find($id);
        return view('iuran.edit', compact('row'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Iuran::findOrFail($id);

        $row->update([
            'iuran_tgl' =>  $request->iuran_tgl,
            'iuran_jenis' => $request->iuran_jenis,
            'iuran_jumlah' =>  $request->iuran_jumlah
        ]);

        return redirect('iuran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Iuran::findOrFail($id);

        $row->delete();

        return redirect('iuran');
    }
}
