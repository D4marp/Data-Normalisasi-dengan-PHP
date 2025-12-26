<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('crud.enrollments.index', compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_mahasiswa' => 'required',
            'id_kursus' => 'required',
            'nama_kursus' => 'required',
            'instruktur' => 'required',
            'tanggal_pemesanan' => 'required|date',
        ]);

        Enrollment::create($validated);
        return redirect()->route('enrollments.index')->with('success', 'Pemesanan kursus berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('crud.enrollments.show', compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('crud.enrollments.edit', compact('enrollment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'id_mahasiswa' => 'required',
            'id_kursus' => 'required',
            'nama_kursus' => 'required',
            'instruktur' => 'required',
            'tanggal_pemesanan' => 'required|date',
        ]);

        $enrollment = Enrollment::findOrFail($id);
        $enrollment->update($validated);
        return redirect()->route('enrollments.index')->with('success', 'Pemesanan kursus berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->delete();
        return redirect()->route('enrollments.index')->with('success', 'Pemesanan kursus berhasil dihapus');
    }
}
