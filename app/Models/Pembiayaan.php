<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembiayaan extends Model
{
    use HasFactory;

    protected $fillable = ['tema_id', 'jenis_penelitian_id', 'sumber_id'];

    public function tema()
    {
        return $this->belongsTo(Tema::class, 'tema_id');
    }

    public function jenisPenelitian()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function sumber()
    {
        return $this->belongsTo(Sumber::class);
    }

    public function nominal()
    {
        return $this->hasOne(Nominal::class);
    }
}
