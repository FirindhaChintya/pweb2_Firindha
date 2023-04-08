<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa;


class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Penyewa::all();
        return view('datasewa', [
            'data'=>$data
        ]);
    }
    public function simpan(Request $request)
    {
        $simpan=Penyewa::create([
            'nama penyewa'=>$request->nama_penyewa,
            'id_penyewa'=>$request->id_penyewa,
            'nama_barang'=>$request->nama_barang,
            'telepon'=>$request->nomor_telepon,
            'harga'=>$request->harga,
            'tanggal_peminjaman'=>$request->tanggal_peminjaman
        ]);
        if ($simpan){
            return redirect('/datasewa');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
