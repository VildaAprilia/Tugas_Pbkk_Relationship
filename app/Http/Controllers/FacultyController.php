<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculties = Faculty::all();

        return view('faculties.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faculties = Faculty::all();
        return view('faculties.create', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'faculty_name' => 'required|',
            'faculty_code' => 'required|',
        ]);

        Faculty::create($request->all());

        return redirect()
        ->route('faculties.index')
        ->with('pesan', 'data berhasil di tambah');

    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function show(faculty $faculty)
    {

        return view('faculties.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(faculty $faculty)
    {
        $faculties = Faculty::all();
        return view('faculties.edit', compact('faculty', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, faculty $faculty)
    {
        $request->validate([
            'faculty_name' => 'required|string|max:255',
            'faculty_code' => 'required|',
        ]);

        $faculty->update($request->all());

        return redirect()
            ->route('faculties.show', $faculty)
            ->with('pesan', 'Berhasil mengedit data faculty');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();

        return redirect()
        ->route('faculties.index')
        ->with('pesan', 'data sudah dihapus');
    }
}
