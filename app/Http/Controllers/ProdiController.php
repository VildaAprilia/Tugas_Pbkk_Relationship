<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = Prodi::all();

        return view('prodis.index', compact('prodis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faculties = Faculty::all();

        return view('prodis.create', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
        $request->validate([
            'prodi_name' => 'required|string|max:255',
            'prodi_code' => 'required|',
            'faculty_id' => 'required|string|max:255',
        ]);

        Prodi::create($request->all());
        return redirect()
            ->route('prodis.index')
            ->with('pesan', 'Berhasil menambah data prodi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {

        return view('prodis.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        $faculties = Faculty::all();
        return view('prodis.edit', compact('prodi', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $request->validate([
            'prodi_name' => 'required|string|max:255',
            'prodi_code' => 'required|',
            'faculty_id' => 'required|string|max:255',
        ]);

        $prodi->update($request->all());

        return redirect()
            ->route('prodis.show', $prodi)
            ->with('pesan', 'Berhasil mengedit data prodi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();

        return redirect()
            ->route('prodis.index')
            ->with('pesan', 'Berhasil menghapus data prodi');
    }
}
