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
        return view('alternative.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = [
                "alternative"=>$request->alternative,
                "c1"=>$request->c1,
                "c2"=>$request->c2,
                "c3"=>$request->c3,
                "c4"=>$request->c4,
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
