<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datatipesoal extends Model
{
    use HasFactory;

    protected $fillable = ['tipe_soal'];

    public function soals()
    {
        return $this->hasMany(Question::class);
    }
}
