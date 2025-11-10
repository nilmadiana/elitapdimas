<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominal extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembiayaan_id',
        'total_nominal',
        'nominal_awal',
        'nominal_akhir',
        'status',
        'komentar',
    ];

    public function pembiayaan()
    {
        return $this->belongsTo(Pembiayaan::class, 'pembiayaan_id');
    }

      public function proposal()
    {
        return $this->hasOne(Proposal::class, 'nominal_id'); 
    }
}
