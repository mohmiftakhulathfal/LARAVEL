<?php

namespace App\Http\Controllers;
use App\Models\kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kelurahan = Kelurahan::all();
        return view('admin.kelurahan.index', compact('list_kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi from input
        $validated = $request->validate([
            'nama' => 'required|string',
            'kecamatan_nama' => 'required|string'
        ]);


        Kelurahan::create($validated);
        return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil di ');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('admin.kelurahan.show', compact('kelurahan'))->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelurahan = kelurahan::find($id);
        return view('admin.kelurahan.edit', compact('kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // validasi from update
         $validated = $request->validate([
            'nama' => 'required|string',
            'kecamatan_nama' => 'required|string'
        ]);
        $kelurahan = Kelurahan::find($id);
        $kelurahan->update($validated);
        return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();
        return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil di Hapus');

    }
}
