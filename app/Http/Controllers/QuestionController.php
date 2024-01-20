<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
    	$first = Question::with('answers')->first();
    	$ids = Question::get()->pluck('id');
    	// dd($ids);
    	$index = [];
    	$c = 1;
    	foreach ($ids as $id){
    		$index[] = ['urut' => $c, 'id' => $id];
    		$c++;
    	}

        return view('exams.index', compact('first', 'index'));
    }

    public function getQuestions()
    {
        $questions = Question::with('answers')->get();
        return response()->json($questions);
    }
    public function getQuestionById($id)
    {
        $question = Question::with('answers')->find($id);
        // dd($question);s
        return response()->json($question);
    }
}
