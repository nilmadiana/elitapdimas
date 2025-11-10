<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sumber extends Model
{
    use HasFactory;

    protected $fillable = ['nama_sumber'];

    public function nominalsx()
    {
        return $this->hasMany(Nominalx::class);
    }
}
