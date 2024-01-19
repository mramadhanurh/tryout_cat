<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('exams.index');
    }

    public function getQuestions()
    {
        $questions = Question::with('answers')->get();
        return response()->json($questions);
    }
}
