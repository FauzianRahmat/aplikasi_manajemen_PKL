<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = jurusan::all();
        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = jurusan::all();
        return view('jurusan.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , jurusan $jurusan)
    {
        // dd($request);
        $validationData=$request->validate([
            'id' => 'required',
            'kepala_jurusan' => 'required',
            'nama_jurusan' => 'required',
        ]);

        // $jurusan = new jurusan;
        // $jurusan->id = $request->id;
        // $jurusan->kepala_jurusan = $request->kepala_jurusan;
        // $jurusan->nama_jurusan= $request->nama_jurusan;
        // $jurusan->save();
            
        Jurusan::create($validationData);
        return redirect()->route('jurusan.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(jurusan $jurusan)
    {
        return view('jurusan.show', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jurusan $jurusan)
    {
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jurusan $jurusan)
    {
        $request->validate([
            'id' => 'required',
            'kepala_jurusan' => 'required',
            'nama_jurusan' => 'required',
        ]);

        $jurusan->update($request->all());
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jurusan $jurusan)
    {
        $jurusan = jurusan::where('id', $jurusan->id)->delete();
        return redirect()->route('jurusan.index');
    }
}