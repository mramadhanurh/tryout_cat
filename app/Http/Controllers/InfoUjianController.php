<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InfoUjian;
use Illuminate\Support\Facades\DB;

class InfoUjianController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $count = InfoUjian::count();
        if($count == 0){
        	return view('admin.infoujian.create');
        }
        $data = InfoUjian::first();
        return view('admin.infoujian.edit', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infoujian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
        ]);

        $query = DB::table('info_ujians')->insert([
            'judul' => $request->input('judul'),
            'waktu' => $request->input('waktu'),
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
        // dd($request);
        $request->validate([
            'judul'=>'required',
        ]);

        $update = DB::table('info_ujians')
                    ->where('id', $request->input('id'))
                    ->update([
                        'judul' => $request->input('judul'),
                        'waktu' => $request->input('waktu'),
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
    //
}
