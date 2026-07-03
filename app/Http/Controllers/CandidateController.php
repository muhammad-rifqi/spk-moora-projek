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
        $siswa = DB::table('candidates')->orderBy('id','desc')->get();
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
                "prestasi"=>explode("|",$request->prestasi)[0],
                "bobot1"=>explode("|",$request->prestasi)[1],
                "penghasilan_ayah"=>explode("|",$request->penghasilan_ayah)[0],
                "bobot2"=>explode("|",$request->penghasilan_ayah)[1],
                "penghasilan_ibu"=>explode("|",$request->penghasilan_ibu)[0],
                "bobot3"=>explode("|",$request->penghasilan_ibu)[1],
                "jumlah_saudara"=>explode("-",$request->jumlah_saudara)[0],
                "bobot4"=>explode("-",$request->jumlah_saudara)[1],
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
                "prestasi"=>explode("|",$request->prestasi)[0],
                "bobot1"=>explode("|",$request->prestasi)[1],
                "penghasilan_ayah"=>explode("|",$request->penghasilan_ayah)[0],
                "bobot2"=>explode("|",$request->penghasilan_ayah)[1],
                "penghasilan_ibu"=>explode("|",$request->penghasilan_ibu)[0],
                "bobot3"=>explode("|",$request->penghasilan_ibu)[1],
                "jumlah_saudara"=>explode("-",$request->jumlah_saudara)[0],
                "bobot4"=>explode("-",$request->jumlah_saudara)[1],
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