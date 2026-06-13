<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     * (Menampilkan daftar semua kandidat)
     */
    public function index()
    {
        $siswa = DB::table('users')->get();
        return view('candidates.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     * (Menampilkan halaman form tambah kandidat)
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * (Menyimpan data kandidat baru ke database)
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * (Menampilkan detail data satu kandidat)
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * (Menampilkan halaman form edit data kandidat)
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * (Memperbarui data kandidat di database)
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * (Menghapus data kandidat dari database)
     */
    public function destroy(string $id)
    {
        //
    }
}