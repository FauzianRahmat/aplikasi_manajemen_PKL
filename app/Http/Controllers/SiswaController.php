<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = siswa::all();
        return view('siswa.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, siswa $siswa)
    {
        $validationData = $request->validate([
            'id' => 'required',
            'email' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        Siswa::create($validationData);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        $validationData = $request->validate([
            'id' => 'required',
            'email' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        $siswa = siswa::where('id', $siswa->id)->delete();
        return redirect()->route('siswa.index');
    }
}
