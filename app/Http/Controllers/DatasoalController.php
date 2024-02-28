<?php

namespace App\Http\Controllers;

use App\Models\Datatipesoal;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SoalImport;

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
        $tipe_soal = Datatipesoal::get();
        return view('admin.data_soal.create', compact('tipe_soal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_text'=>'required',
            'datatipesoal_id'=>'required',
        ]);

        $query = DB::table('questions')->insert([
            'question_text' => $request->input('question_text'),
            'datatipesoal_id' => $request->input('datatipesoal_id'),
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
        $tipe_soal = Datatipesoal::get();
        $data = Question::findOrFail($id);

        return view('admin.data_soal.show', compact('data', 'tipe_soal'));
    }

    public function edit($id)
    {
        // $row = DB::table('questions')
        //             ->where('id', $id)
        //             ->first();
        // $data = [
        //     'Info'=>$row
        // ];
        $tipe_soal = Datatipesoal::get();
        $data = Question::findOrFail($id);

        return view('admin.data_soal.edit', compact('data', 'tipe_soal'));
    }

    public function update(Request $request)
    {
        // $request->validate([
        //     'question_text'=>'required',
        //     'datatipesoal_id'=>'required',
        // ]);

        $update = DB::table('questions')
                    ->where('id', $request->input('id'))
                    ->update([
                        'question_text' => $request->input('question_text'),
                        'datatipesoal_id' => $request->input('datatipesoal_id'),
                    ]);
        if($update){
            return back()->with('success','Data berhasil diupdate!');
        }else{
            return redirect()->back();
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

    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('SoalData', $namafile);

        Excel::import(new SoalImport, \public_path('/SoalData/'.$namafile));
        return \redirect()->back()->with('success','Import data berhasil disimpan!');
    }
}
