<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['answer_text', 'weight', 'question_id'];

    public function soal()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
