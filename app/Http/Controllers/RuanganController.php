<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Ruangan::all();
        return view('ruangan.index' , compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        $validated = $request->validate([
            'nama_ruangan' => 'required',
            'kapasitas_ruangan' => 'required',
            'gedung' => 'required',
            'lokasi' => 'required'
        ]);

        $ruangan = new Ruangan();
        $ruangan->nama_ruangan = $request->nama_ruangan;
        $ruangan->kapasitas_ruangan = $request->kapasitas_ruangan;
        $ruangan->gedung = $request->gedung;
        $ruangan->lokasi = $request->lokasi;
        $ruangan->save();
        return redirect()->route('ruangan.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('ruangan.show', compact('ruangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('ruangan.edit', compact('ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_ruangan' => 'required',
            'kapasitas_ruangan' => 'required',
            'gedung' => 'required',
            'lokasi' => 'required'
        ]);

        $ruangan = Ruangan::findOrFail($id);
        $ruangan->nama_ruangan = $request->nama_ruangan;
        $ruangan->kapasitas_ruangan = $request->kapasitas_ruangan;
        $ruangan->gedung = $request->gedung;
        $ruangan->lokasi = $request->lokasi;
        $ruangan->save();
        return redirect()->route('ruangan.index')
            ->with('success', 'Data berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();
        return redirect()->route('ruangan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
