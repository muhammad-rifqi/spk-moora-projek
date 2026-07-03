<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index (){
        
        

        //$laporan = DB::table('alternative')->orderBy('jumlah', 'desc')->limit(20)->get();
        $laporan = DB::table('candidates')->orderBy('id','desc')->get();
        return view('reports.index', compact('laporan'));

    }


    public function pdf()
        {
             $laporan = DB::table('candidates')->orderBy('id','desc')->get();
            //  $laporan = DB::table('alternative')->orderBy('jumlah', 'desc')->get();

            $pdf = Pdf::loadView('reports.laporan', [
                'rows' => $laporan
            ])->setPaper('a4', 'potrait');

            return $pdf->download(date("YmdHis").'.pdf');
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function informasi()
    {
        // $data = DB::table('alternative')->orderBy('jumlah', 'desc')->limit(20)->get();
        $data = DB::table('candidates')->orderBy('id','desc')->get();
        return view('reports.informasi', compact('data'));
    }
}
