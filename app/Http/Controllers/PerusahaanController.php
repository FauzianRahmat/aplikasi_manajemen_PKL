<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perusahaan = Perusahaan::all();
        return view('perusahaan.index', compact('perusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $perusahaan= Perusahaan::all();
        return view('perusahaan.create', compact('perusahaan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Perusahaan $perusahaan)
    {
        
        $validationData = $request->validate([
            'id' => 'required',
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'keterangan' => 'required',
        ]);
            //'id' => 'required',
            //'nama perusahaan' => 'required',
            //'alamat perusahaan' => 'required',
            //'keterangan' => 'required',
            // $perusahaan->save();

        perusahaan::create($validationData);
        return redirect()->route('perusahaan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perusahaan $perusahaan)
    {
    
        return view('perusahaan.show', compact('perusahaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function Edit (Perusahaan $perusahaan)
    {
        return view('perusahaan.edit', compact('perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $request->validate([
            'id' => 'required',
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'keterangan' => 'required',
        ]);

        $perusahaan->update($request->all());
        return redirect()->route('perusahaan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perusahaan $perusahaan)
    {
        $perusahaan = perusahaan::where('id', $perusahaan->id)->delete();
        return redirect()->route('perusahaan.index');
    }
}
