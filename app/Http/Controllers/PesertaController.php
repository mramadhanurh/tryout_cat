<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{

    public function index()
    {
        return view('daftar');
    }

    public function list()
    {
        $peserta = Peserta::latest()->get();
        return view('admin.data_peserta.index', compact('peserta'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'=>'required',
            'no_wa'=>'required',
        ]);

        $query = DB::table('pesertas')->insert([
            'nama_lengkap'  => $request->input('nama_lengkap'),
            'no_wa'         => $request->input('no_wa'),
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $delete = DB::table('pesertas')
                    ->where('id', $id)
                    ->delete();
        if($delete){
            return back()->with('success','Data berhasil dihapus!');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
