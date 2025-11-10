<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalCommentx extends Model
{
    use HasFactory;

     protected $table = 'proposal_commentsx';

    protected $fillable = [
        'proposal_id',
        'user_id',
        'role',
        'file_path',
        'comment',
    ];

    public function proposalx()
    {
        return $this->belongsTo(Proposalx::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
