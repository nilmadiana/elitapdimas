<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $table = 'jenis_penelitians';
    protected $fillable = ['nama_jenis_penelitian'];

    public function nominalsx()
    {
        return $this->hasMany(Nominalx::class);
    }
}
