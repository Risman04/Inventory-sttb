<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_barang;

class JenisBarangController extends Controller
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
        $jenis_barang = jenis_barang::all();
        return view('jenis_barang.index' , compact('jenis_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis_barang.create');
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
            'nama_barang' => 'required',
            'merk' => 'required',
            'ketahanan' => 'required',
            'lama_pemakaian' => 'required',
            'jumlah' => 'required',
            'tempat' => 'required'
        ]);

        $jenis_barang = new jenis_barang();
        $jenis_barang->nama_barang = $request->nama_barang;
        $jenis_barang->merk = $request->merk;
        $jenis_barang->ketahanan = $request->ketahanan;
        $jenis_barang->lama_pemakaian = $request->lama_pemakaian;
        $jenis_barang->jumlah = $request->jumlah;
        $jenis_barang->tempat = $request->tempat;
        $jenis_barang->save();
        return redirect()->route('jenis_barang.index')
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
        $jenis_barang = Jenis_barang::findOrFail($id);
        return view('jenis_barang.show', compact('jenis_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis_barang = Jenis_barang::findOrFail($id);
        return view('jenis_barang.edit', compact('jenis_barang'));
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
        // validasi
        $validated = $request->validate([
            'nama_barang' => 'required',
            'merk' => 'required',
            'ketahanan' => 'required',
            'lama_pemakaian' => 'required',
            'jumlah' => 'required',
            'tempat' => 'required'
        ]);

        $jenis_barang = Jenis_barang::findOrFail($id);
        $jenis_barang->nama_barang = $request->nama_barang;
        $jenis_barang->merk = $request->merk;
        $jenis_barang->ketahanan = $request->ketahanan;
        $jenis_barang->lama_pemakaian = $request->lama_pemakaian;
        $jenis_barang->jumlah = $request->jumlah;
        $jenis_barang->tempat = $request->tempat;
        $jenis_barang->save();
        return redirect()->route('jenis_barang.index')
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
        $jenis_barang = Jenis_barang::findOrFail($id);
        $jenis_barang->delete();
        return redirect()->route('jenis_barang.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
