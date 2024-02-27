<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Datatipesoal;
use App\Models\Question;
use App\Models\InfoUjian;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        if (Auth::user()->role == 'admin') {
            $totalTipeSoal = Datatipesoal::count();
            $totalSoal = Question::count();
            $totalJawaban = Answer::count();
            $totalUjian = Ujian::count();
            $latestDaftarUjian = Ujian::latest()->take(5)->get();
            return view('admin.dashboard', compact('totalTipeSoal', 'totalSoal', 'totalJawaban', 'totalUjian', 'latestDaftarUjian'));
        } elseif (Auth::user()->role == 'user') {
            $tipeSoal = Datatipesoal::all();
            $info = InfoUjian::first();
            $jmlSoal = Question::count();

            return view('exams.exams-home', compact('tipeSoal', 'info', 'jmlSoal'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
