<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;
use App\Models\Candidate;
use App\Models\CandidateScore;
use DB;

class MooraController extends Controller
{

    public function index(){
        return view('moora.index');
    }

    public function process()
    {
        $criteria = Criteria::all();

        $candidates = Candidate::with('scores')->get();

        $normalisasi = [];

        foreach ($criteria as $criterion) {

            $sum = CandidateScore::where(
                'criteria_id',
                $criterion->id
            )->sum(
                DB::raw('nilai * nilai')
            );

            $pembagi = sqrt($sum);

            foreach ($candidates as $candidate) {

                $score = CandidateScore::where(
                    'candidate_id',
                    $candidate->id
                )
                ->where(
                    'criteria_id',
                    $criterion->id
                )
                ->value('nilai');

                $normalisasi[$candidate->id][$criterion->id]
                    = $score / $pembagi;
            }
        }

        $hasil = [];

        foreach ($candidates as $candidate) {

            $benefit = 0;
            $cost = 0;

            foreach ($criteria as $criterion) {

                $nilai =
                    $normalisasi[$candidate->id][$criterion->id]
                    * $criterion->bobot;

                if ($criterion->tipe == 'benefit') {
                    $benefit += $nilai;
                } else {
                    $cost += $nilai;
                }
            }

            $hasil[$candidate->id] =
                $benefit - $cost;
        }

        arsort($hasil);

        return response()->json($hasil);

        // return view('moora.result', compact('hasil'));
    }
}