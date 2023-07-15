<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = siswa::all();
        return view('siswa.index', compact('rows')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        siswa::create([
            'siswa_nama' =>$request->siswa_nama,
            'siswa_jk' =>$request->siswa_jk,
            'siswa_ttl' =>$request->siswa_ttl,
            'siswa_alamat' =>$request->siswa_alamat,
            'siswa_nohp' =>$request->siswa_nohp
        ]) ;

        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row=siswa::find($id);
        return view ('siswa.edit', compact('row')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row= siswa::findOrFail($id);

        $row->update([
            'siswa_nama' =>$request->siswa_nama,
            'siswa_jk' =>$request->siswa_jk,
            'siswa_ttl' =>$request->siswa_ttl,
            'siswa_alamat' =>$request->siswa_alamat,
            'siswa_nohp' =>$request->siswa_nohp
        ]) ;

        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row= siswa::findOrFail($id);

        $row->delete();

        return redirect('siswa');
    }
}
