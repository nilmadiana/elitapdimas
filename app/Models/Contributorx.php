<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributorx extends Model
{
    use HasFactory;

    protected $table = 'contributorsx';

    protected $fillable = [
        'proposal_id',
        'nama_depan',
        'nama_belakang',
        'email',
        'nidn',
        'prodi',
        'google_scholar',
        'role'
    ];

    public function proposalx()
    {
        return $this->belongsTo(Proposalx::class, 'proposal_id');
    }
}
