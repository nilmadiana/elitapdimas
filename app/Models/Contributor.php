<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

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

    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }
}
