<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateScore extends Model
{
    use HasFactory;

    protected $table = 'candidate_scores';

    protected $fillable = [
        'period_id',
        'candidate_id',
        'criteria_id',
        'nilai',
        'id'
    ];

}
