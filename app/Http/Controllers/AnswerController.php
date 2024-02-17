<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jawaban = Answer::latest()->get();
        return view('admin.data_jawaban.index', compact('jawaban'));
    }

    public function create()
    {
        $soal = Question::get();
        return view('admin.data_jawaban.create', compact('soal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id'=>'required',
            'answer_text'=>'required',
            'weight'=>'required',
        ]);

        $query = DB::table('answers')->insert([
            'question_id' => $request->input('question_id'),
            'answer_text' => $request->input('answer_text'),
            'weight' => $request->input('weight'),
        ]);

        if($query){
            return back()->with('success','Data berhasil disimpan!');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function show($id)
    {
        $soal = Question::get();
        $data = Answer::findOrFail($id);

        return view('admin.data_jawaban.show', compact('data', 'soal'));
    }

    public function edit($id)
    {
        $soal = Question::get();
        $data = Answer::findOrFail($id);

        return view('admin.data_jawaban.edit', compact('data', 'soal'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'question_id'=>'required',
            'answer_text'=>'required',
            'weight'=>'required',
        ]);

        $update = DB::table('answers')
                    ->where('id', $request->input('id'))
                    ->update([
                        'question_id' => $request->input('question_id'),
                        'answer_text' => $request->input('answer_text'),
                        'weight' => $request->input('weight'),
                    ]);
        if($update){
            return back()->with('success','Data berhasil diupdate!');
        }else{
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $delete = DB::table('answers')
                    ->where('id', $id)
                    ->delete();
        if($delete){
            return back()->with('success','Data berhasil dihapus!');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
