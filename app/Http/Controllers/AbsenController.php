<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absen= absen::all();
        return view('absen.index', compact('absen'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('absen.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, absen $absen)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal_masuk' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'keterangan' => 'required',
        ]);

        $absen = new absen;
        $absen->nis = $request->nis;
        $absen->nama = $request->nama;
        $absen->kelas = $request->kelas;
        $absen->tanggal_masuk = $request->tanggal_masuk;
        $absen->jenis_kelamin = $request->jenis_kelamin;
        $absen->jurusan = $request->jurusan;
        $absen->keterangan = $request->keterangan;
        $absen->save();

        return redirect()->route('absen.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(absen $absen)
    {
        //SELECT * FROM siswas WHERE id = $id
        return view('absen.show', Compact('absen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(absen $absen)
    {
        return view('absen.edit', compact('absen'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, absen $absen)
    {
          //
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal_masuk' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'keterangan' => 'required',
        ]);

        $absen->update($request->all());
        return redirect()->route('absen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(absen $absen)
    {
        $absen = Absen::where('id', $absen->id)->delete();
        return redirect()->route('absen.index');

    }
}
