<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AltenativeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternative = DB::table('alternative')->get();
        return view('alternative.index', compact('alternative'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = DB::table('candidates')->get();
        return view('alternative.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $rows = DB::table('criteria')->get()->toArray();
         
         $data = [
                "alternative"=>$request->alternative,
                "c1"=>$request->c1,
                "c2"=>$request->c2,
                "c3"=>$request->c3,
                "c4"=>$request->c4,
                "c11"=>$rows[0]->bobot,
                "c22"=>$rows[1]->bobot,
                "c33"=>$rows[2]->bobot,
                "c44"=>$rows[3]->bobot,
                "c111"=>($rows[0]->bobot * $request->c1),
                "c222"=>($rows[1]->bobot * $request->c2),
                "c333"=>($rows[2]->bobot * $request->c3),
                "c444"=>($rows[3]->bobot * $request->c4),
                "jumlah" =>($rows[0]->bobot * $request->c1) + ($rows[1]->bobot * $request->c2) + ($rows[2]->bobot * $request->c3) + ($rows[3]->bobot * $request->c4),
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s"),
        ];
       
       $insert =  DB::table('alternative')->insert($data);
       if($insert){
            return redirect('/alternative')->with('status', 'Success Insert');
       }else{
            return redirect('/alternative')->with('status', 'Failed Insert');
       }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $data = DB::table('alternative')->where('id', $id)->delete();
            if($data){
                return redirect('/alternative')->with('status', 'Success Deleted!');
            }else{
                return redirect('/alternative')->with('status', 'Failed Deleted!');
            }
    }
}
