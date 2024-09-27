<?php

namespace App\Http\Controllers;

use App\Models\pemain;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemains = pemain::all();
        return view('pemain.index', compact ('pemains'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama_pemain' => 'required|string|max:25',
            'posisi' =>'required|string|max:25',
            'No_Punggung' =>'required|integer|max:30',
            'Asal_Klub' =>'required|string|max:25'
        ]);
        pemain::create([
            'Nama_pemain' =>$request->input('Nama_pemain'),
            'posisi' =>$request->input('posisi'),
            'No_Punggung' =>$request->input('No_Punggung'),
            'Asal_Klub' =>$request->input('Asal_Klub'),
        ]);
        return redirect()->route('pemain.index')->with('success', 'pemain berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(pemain $pemain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pemain = pemain::findOrFail($id);
        return view('pemain.edit',compact('pemain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pemain $pemain)
    {
        $request->validate([
            'Nama_pemain' => 'required|string|max:25,' . $pemain->id,
            'posisi' =>'required|string|max:25',
            'No_Punggung' =>'required|integer|max:30',
            'Asal_Klub' =>'required|string|max:25'
        ]);
        $pemain->update([
            'Nama_pemain' =>$request->input('Nama_pemain'),
            'posisi' =>$request->input('posisi'),
            'N0_Punggung' =>$request->input('No_Punggung'),
            'Asal_Klub' =>$request->input('Asal_Klub'),
        ]);
        return redirect()->route('pemain.index')->with('success', 'pemain berhasil ditambahkan.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemain $pemain)
    {
        $pemain->delete();
        return redirect()->route('pemain.index')->with('success', 'pemain berhasil dihapus.');
  
    }
}
