<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_group;

class User_groupController extends Controller
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
        $user_group = User_group::all();
        return view('user_group.index' , compact('user_group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_group.create');
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
            'role' => 'required',
            'nama' => 'required'
        ]);

        $user_group = new User_group();
        $user_group->role = $request->role;
        $user_group->name = $request->name;
        $user_group->save();
        return redirect()->route('user_group.index')
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
        $user_group = User_group::findOrFail($id);
        return view('user_group.show', compact('user_group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_group = User_group::findOrFail($id);
        return view('user_group.edit', compact('user_group'));
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
            'role' => 'required',
            'nama' => 'required'
        ]);

        $user_group = User_group::findOrFail($id);
        $user_group->role = $request->role;
        $user_group->name = $request->name;
        $user_group->save();
        return redirect()->route('user_group.index')
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
        $user_group = User_group::findOrFail($id);
        $user_group->delete();
        return redirect()->route('user_group.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
