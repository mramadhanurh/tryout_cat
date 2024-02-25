<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question_text', 'datatipesoal_id'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function addAnswer($answerText, $weight)
    {
        $this->answers()->create(compact('answerText', 'weight'));
    }

    public function tipeSoal()
    {
        return $this->belongsTo(Datatipesoal::class, 'datatipesoal_id');
    }

    public function details()
    {
        return $this->hasMany(DetailUjian::class);
    }
}
