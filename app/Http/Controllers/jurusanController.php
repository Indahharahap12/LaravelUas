<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\jurusan;

class jurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = jurusan::all();
        return view('jurusan.index', compact('rows')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        jurusan::create([
            'jurusan_nama' =>$request->jurusan_nama,
            'jurusan_nama_siswa' =>$request->jurusan_nama_siswa
        ]) ;

        return redirect('jurusan');
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
        $row=jurusan::find($id);
        return view ('jurusan.edit', compact('row')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row= jurusan::findOrFail($id);

        $row->update([
            'jurusan_nama' =>$request->jurusan_nama,
            'jurusan_nama_siswa' =>$request->jurusan_nama_siswa
        ]) ;

        return redirect('jurusan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row= jurusan::findOrFail($id);

        $row->delete();

        return redirect('jurusan');
    }
}
