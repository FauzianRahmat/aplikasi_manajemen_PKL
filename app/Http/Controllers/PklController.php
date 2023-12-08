<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Pkl;
use App\Models\siswa;
use App\Models\Jurusan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PklController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pkl= pkl::all();
        return view('pkl.index', compact('pkl'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Siswa $siswa, Jurusan $jurusan, Perusahaan $perusahaan)
    {
        $perusahaan = $perusahaan::all();
        $jurusan = $jurusan::all();
        $siswa = $siswa::all();
        return view('pkl.create', compact('siswa', 'jurusan', 'perusahaan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, pkl $pkl, Jurusan $jurusan, perusahaan $perusahaan)
    {
        $validationData = $request->validate([
            'siswa_id' => 'required',
            'kelas' => 'required',
            'perusahaan_id' => 'required',
            'tanggal_masuk' => 'required',
            'jurusan_id' => 'required',
        ]);
        pkl::create($validationData);
        return redirect()->route('pkl.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(pkl $pkl)
    {
        return view('pkl.show', Compact('pkl'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pkl $pkl)
    {
        return view('pkl.edit', compact('pkl'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pkl $pkl, jurusan $jurusan, perusahaan $perusahaan)
    {
        $request->validate([
            'siswa_id' => 'required',
            'kelas' => 'required',
            'perusahaaan_id' => 'required',
            'tanggal_masuk' => 'required',
            'jurusan_id' => 'required',
        ]);

        $pkl->update($request->all());
        return redirect()->route('pkl.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pkl $pkl)
    {
        
        $pkl= Pkl::where('id', $pkl->id)->delete();
        return redirect()->route('pkl.index');
    }
}
