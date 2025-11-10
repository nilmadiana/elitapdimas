<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'proposal_id',
        'user_id',
        'role',
        'file_path',
        'comment',
    ];

    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
