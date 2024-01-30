<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatasoalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $soal = Question::latest()->get();
        return view('admin.data_soal.index', compact('soal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_soal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_text'=>'required',
        ]);

        $query = DB::table('questions')->insert([
            'question_text' => $request->input('question_text'),
        ]);

        if($query){
            return back()->with('success','Data berhasil disimpan!');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $row = DB::table('questions')
                    ->where('id', $id)
                    ->first();
        $data = [
            'Info'=>$row
        ];

        return view('admin.data_soal.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'question_text'=>'required',
        ]);

        $update = DB::table('questions')
                    ->where('id', $request->input('id'))
                    ->update([
                        'question_text' => $request->input('question_text'),
                    ]);
        if($update){
            return back()->with('success','Data berhasil diupdate!');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function destroy($id)
    {
        $delete = DB::table('questions')
                    ->where('id', $id)
                    ->delete();
        if($delete){
            return back()->with('success','Data berhasil dihapus!');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
