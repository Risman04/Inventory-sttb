<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Jenis_barang;

class BarangController extends Controller
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
        $barang = Barang::with('jenis_barang')->get();
        return view('barang.index' , ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_barang = Jenis_barang::all();
        return view('barang.create', compact('jenis_barang'));
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
            'id_jenis_barang' => 'required'
        ]);

        $barang = new Barang();
        $barang->id_jenis_barang = $request->id_jenis_barang;
        $barang->save();
        return redirect()->route('barang.index')
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

        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $jenis_barang = Jenis_barang::all();
        return view('barang.edit', compact('barang', 'jenis_barang'));
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
            'id_jenisbarang' => 'required'
        ]);

        $barang = Barang::findOrFail($id);
        $jenis_barang = Jenis_Barang::findOrFail($id);
        $barang->id_jenis_barang = $request->id_jenis_barang;
        $barang->save();
        return redirect()->route('barang.index')
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
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
