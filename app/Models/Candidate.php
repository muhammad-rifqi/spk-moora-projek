<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    
    protected $table = 'candidates';

    protected $fillable = [
        'nis_nim',
        'nama',
        'jenis_kelamin',
        'alamat',
        'no_hp'
    ];

    public function scores()
    {
        return $this->hasMany(CandidateScore::class);
    }
}
