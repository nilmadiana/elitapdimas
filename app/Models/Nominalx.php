<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominalx extends Model
{
    use HasFactory;

    protected $table = 'nominalsx';

    protected $fillable = [
        'proposal_id',
        'tema_id',
        'sumber_id',
        'jenis_penelitian_id',
        'nominal',
        'status',
        'komentar',
    ];

    public function proposalx()
    {
        return $this->belongsTo(Proposalx::class, 'proposal_id');
    }

    public function sumber()
    {
        return $this->belongsTo(Sumber::class);
    }

    public function jenisPenelitian()
    {
        return $this->belongsTo(Jenis::class, 'jenis_penelitian_id');
    }
}
