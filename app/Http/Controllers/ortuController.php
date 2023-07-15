<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ortu;

class ortuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = ortu::all();
        return view('ortu.index', compact('rows')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ortu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ortu::create([
            'ortu_nama' =>$request->ortu_nama,
            'ortu_ttl' =>$request->ortu_ttl,
            'ortu_alamat' =>$request->ortu_alamat,
            'ortu_nohp' =>$request->ortu_nohp
        ]) ;

        return redirect('ortu');
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
        $row=ortu::find($id);
        return view ('ortu.edit', compact('row')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row= ortu::findOrFail($id);

        $row->update([
            'ortu_nama' =>$request->ortu_nama,
            'ortu_ttl' =>$request->ortu_ttl,
            'ortu_alamat' =>$request->ortu_alamat,
            'ortu_nohp' =>$request->ortu_nohp
        ]) ;

        return redirect('ortu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row= ortu::findOrFail($id);

        $row->delete();

        return redirect('ortu');
    }
}
