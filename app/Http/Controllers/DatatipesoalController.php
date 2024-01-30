<?php

namespace App\Http\Controllers;

use App\Models\Datatipesoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatatipesoalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tipe_soal = Datatipesoal::latest()->get();
        return view('admin.data_tipe_soal.index', compact('tipe_soal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_tipe_soal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe_soal'=>'required',
        ]);

        $query = DB::table('datatipesoals')->insert([
            'tipe_soal' => $request->input('tipe_soal'),
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
        $row = DB::table('datatipesoals')
                    ->where('id', $id)
                    ->first();
        $data = [
            'Info'=>$row
        ];

        return view('admin.data_tipe_soal.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'tipe_soal'=>'required',
        ]);

        $update = DB::table('datatipesoals')
                    ->where('id', $request->input('id'))
                    ->update([
                        'tipe_soal' => $request->input('tipe_soal'),
                    ]);
        if($update){
            return back()->with('success','Data berhasil diupdate!');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function destroy($id)
    {
        $delete = DB::table('datatipesoals')
                    ->where('id', $id)
                    ->delete();
        if($delete){
            return back()->with('success','Data berhasil dihapus!');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
