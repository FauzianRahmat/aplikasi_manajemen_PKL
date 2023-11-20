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
    public function store(Request $request , Siswa $Siswa)
    {
        $validationData = $request->validate([
            'id' => 'required',
            'email' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
        ]);

        // $siswa = new Siswa;
        // $siswa->id = $request->id;
        // $siswa->email = $request->email;
        // $siswa->nama= $request->nama;
        // $siswa->tanggal_lahir = $request->tanggal_lahir;
        // $siswa->jenis_kelamin = $request->jenis_kelamin;
        // $siswa->jurusan = $request->jurusan;
        // $siswa->tlp = $request->tlp;
        // $siswa->alamat = $request->alamat;
        // $siswa->save();

        Siswa::create($validationData);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        $siswa = siswa::all();
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        $siswa = siswa::all();
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        $request->validate([
            'id' => 'required',
            'email' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.show');
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
