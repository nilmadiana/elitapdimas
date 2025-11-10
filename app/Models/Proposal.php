<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nominal_id',
        'judul',
        'keyword',
        'abstract',
        'referensi',
        'file_pdf',
        'comment',
        'status'
    ];

    public function contributors()
    {
        return $this->hasMany(Contributor::class);
    }

    public function comments()
    {
         return $this->hasMany(ProposalComment::class)
                     ->orderBy('created_at', 'desc');
    }

    public function nominal()
    {
        return $this->belongsTo(Nominal::class, 'nominal_id');
    }

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }
}
