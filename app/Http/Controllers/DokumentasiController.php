<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumentasi;
use App\Http\Controllers\CloudinaryController;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Dokumentasi $dokumentasi)
    {
        $dokumentasi = Dokumentasi::all();
        return view('dokumentasi.index', compact('dokumentasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokumentasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Dokumentasi $dokumentasi)
    {
        $validationData= $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'laporan' => 'required',
        ]);

        $image = $request->file('laporan');
        $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
    
        $dokumentasi = Dokumentasi::create($validationData);
        //dokumentasi::create($validationData); 

        Dokumentasi::create([
            'nama' => $request['nama'],
            'kelas' => $request['kelas'],
            'jurusan' => $request['jurusan'],
            'laporan' => $result,
        ]);

        return redirect()->route('dokumentasi.index');
    
    }
    /**
     * Display the specified resource.
     */
    public function show(Dokumentasi $dokumentasi)
    {
        $dokumentasi = Dokumentasi::all();
        return view('dokumentasi.show', Compact('dokumentasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dokumentasi $dokumentasi)
    {
        return view('dokumentasi.edit', Compact('dokumentasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dokumentasi $dokumentasi)
    {
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'laporan' => 'required',
        ]);

        $dokumentasi->update($request->all());
        return redirect()->route('dokumentasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokumentasi $dokumentasi)
    {
        $dokumentasi= Dokumentasi::where('id', $dokumentasi->id)->delete();
        return redirect()->route('dokumentasi.index');
    }
}
