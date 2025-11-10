<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposalx extends Model
{
    use HasFactory;

    protected $table = 'proposalsx';

    protected $fillable = [
        'tema_id',
        'judul',
        'keyword',
        'abstract',
        'referensi',
        'file_pdf',
        'comment',
        'status'
    ];

    public function contributorsx()
    {
        return $this->hasMany(Contributorx::class, 'proposal_id');
    }

    public function commentsx()
    {
        return $this->hasMany(ProposalCommentx::class, 'proposal_id')
                    ->orderBy('created_at', 'desc');
    }

    public function nominalx()
    {
        return $this->hasOne(Nominalx::class, 'proposal_id');
    }

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }
}
