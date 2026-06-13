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
        $siswa = DB::table('candidates')->get();
        return view('candidates.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     * (Menampilkan halaman form tambah kandidat)
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     * (Menyimpan data kandidat baru ke database)
     */
    public function store(Request $request)
    {
        $data = [
                "nis_nim"=>$request->nis_nim,
                "nama"=>$request->nama,
                "jenis_kelamin"=>$request->jenis_kelamin,
                "tempat_lahir"=>$request->tempat_lahir,
                "tanggal_lahir"=>$request->tanggal_lahir,
                "alamat"=>$request->address,
                "prestasi"=>$request->prestasi,
                "penghasilan_ayah"=>$request->penghasilan_ayah,
                "penghasilan_ibu"=>$request->penghasilan_ibu,
                "jumlah_saudara"=>$request->jumlah_saudara,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s"),
        ];
       
       $insert =  DB::table('candidates')->insert($data);
       if($insert){
            return redirect('/candidates')->with('status', 'Success Insert');
       }else{
            return redirect('/candidates')->with('status', 'Failed Insert');
       }

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
         $data = DB::table('candidates')->where('id', '=' , $id)->first();
         return view('candidates.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * (Memperbarui data kandidat di database)
     */
    public function update(Request $request, string $id)
    {

        $value = [
                "nis_nim"=>$request->nis_nim,
                "nama"=>$request->nama,
                "jenis_kelamin"=>$request->jenis_kelamin,
                "tempat_lahir"=>$request->tempat_lahir,
                "tanggal_lahir"=>$request->tanggal_lahir,
                "alamat"=>$request->address,
                "prestasi"=>$request->prestasi,
                "penghasilan_ayah"=>$request->penghasilan_ayah,
                "penghasilan_ibu"=>$request->penghasilan_ibu,
                "jumlah_saudara"=>$request->jumlah_saudara,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s"),
        ];
       
       $updated =  DB::table('candidates')->where('id',$id)->update($value);
       if($updated){
            return redirect('/candidates')->with('status', 'Success Update');
       }else{
            return redirect('/candidates')->with('status', 'Failed Update');
       }
    }

    /**
     * Remove the specified resource from storage.
     * (Menghapus data kandidat dari database)
     */
    public function destroy(string $id)
    {
            $data = DB::table('candidates')->where('id', $id)->delete();
            if($data){
                return redirect('/candidates')->with('status', 'Success Deleted!');
            }else{
                return redirect('/candidates')->with('status', 'Failed Deleted!');
            }
            
    }
}