<?php

namespace App\Http\Controllers;

use App\Models\penyewa;
use Illuminate\Http\Request;
use Illuminate\View;

class TabelController extends Controller
{
    //
    public function index()
    {
        $data = penyewa::all();
        return view('reservasi_properti',compact('penyewa'));
    }
    public function edit(string $id)
    {
        // $sdata = penyewa::find($id)
        // return view('penyewa.edit', compact('data'));
    
    }

}

