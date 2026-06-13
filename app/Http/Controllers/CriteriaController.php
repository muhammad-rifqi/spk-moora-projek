<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CriteriaController extends Controller
{
    public function index()
    {
        $criteria = DB::table('criteria')->get();
        return view('criteria.index', compact('criteria'));
    }

    public function create()
    {
        return view('criteria.create');
    }

    public function store(Request $request)
    {
        $data = [
                "kode"=>$request->kode,
                "nama_kriteria"=>$request->nama_kriteria,
                "tipe"=>$request->tipe,
                "bobot"=>$request->bobot,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s"),
        ];
       
       $insert =  DB::table('criteria')->insert($data);
       if($insert){
            return redirect('/criteria')->with('status', 'Success Insert');
       }else{
            return redirect('/criteria')->with('status', 'Failed Insert');
       }
    }

    public function edit(string $id)
    {
         $data = DB::table('criteria')->where('id', '=' , $id)->first();
         return view('criteria.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $data = [
                "kode"=>$request->kode,
                "nama_kriteria"=>$request->nama_kriteria,
                "tipe"=>$request->tipe,
                "bobot"=>$request->bobot,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s"),
        ];
       
       $insert =  DB::table('criteria')->where('id', $id)->update($data);
       if($insert){
            return redirect('/criteria')->with('status', 'Success Update');
       }else{
            return redirect('/criteria')->with('status', 'Failed Update');
       }
    }

    public function destroy(string $id)
    {
            $data = DB::table('criteria')->where('id', $id)->delete();
            if($data){
                return redirect('/criteria')->with('status', 'Success Deleted!');
            }else{
                return redirect('/criteria')->with('status', 'Failed Deleted!');
            }
    }
}
