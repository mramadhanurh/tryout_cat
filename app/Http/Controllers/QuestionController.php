<?php

namespace App\Http\Controllers;

use App\Models\DetailUjian;
use App\Models\InfoUjian;
use App\Models\Question;
use App\Models\Ujian;
use App\Models\Answer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index() 
    {
        // $questions = Question::simplePaginate(1);
        
        // $currentPage = request()->has('page') ? (int) request()->input('page') : 1;
        $question = Question::first();
        $total = Question::count();
        // $questionNumber = ($currentPage - 1) * 1 + 1; // Hitung nomor soal berdasarkan halaman saat ini

        $hasil = DB::select("select answer_id from detail_ujians left join ujians on ujians.id = detail_ujians.ujian_id where user_id =".Auth::user()->id." and question_id = ".$question->id." and cast(times as UNSIGNED) > 0 limit 1");
        if(count($hasil) > 0){
            $hasil = $hasil[0]->answer_id;
        }else{
            $hasil = 0;
        }

        $times = (int)InfoUjian::first()->waktu*60;
        $date = date('yyyy-mm-dd H:i:s', strtotime('-'.$times.' seconds'));
        // var_dump($date);
        $sudah = [];
        // $ujian = Ujian::where('user_id', Auth::user()->id)->whereRaw('cast(times as UNSIGNED) > 0');
        $ujian = Ujian::where('user_id', Auth::user()->id)->where('created_at','>',$date)->whereRaw('cast(times as UNSIGNED) > 0');
        if($ujian->count()>0){
            $ujian = $ujian->first();
            $detail = DetailUjian::where('ujian_id', $ujian->id)->get();
            foreach ($detail as $item){
                $sudah[] = $item['question_id'];
            }

            $times =  strtotime("now") -strtotime($ujian->created_at) ;
            $times = 6000 - $times;
            // dd($sudah);
            
        }else{
            $ujian = new Ujian([    
                'user_id'  => Auth::user()->id,
                'score' => 0,
                'times' => 100,
                'created_at' => now()]);
            $ujian->save();
        }
        

        return view('exams.index', compact( 'question', 'total', 'hasil', 'sudah', 'times', 'ujian'));
    }

    public function simpanUjian(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'score' => 'required',
            'times' => 'required',
            'question_id' => 'required|array', // Memastikan question_id adalah array
            'answer_id' => 'required|array', // Memastikan answer_id adalah array
        ]);

        // Simpan data ujian dan dapatkan ID yang dihasilkan
        $ujian = Ujian::create([
            'user_id' => $request->user_id,
            'score' => $request->score,
            'times' => $request->times,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $question_ids = $request->question_id;
        $answer_ids = $request->answer_id;

        if (count($question_ids) !== count($answer_ids)) {
            return redirect()->back()->with('error', 'Invalid question and answer data.');
        }

        // Loop melalui setiap pasangan pertanyaan dan jawaban
        foreach ($question_ids as $index => $question_id) {
            // Simpan data detail ujian untuk setiap pasangan
            DetailUjian::create([
                'ujian_id' => $ujian->id, // Menggunakan ID ujian yang dihasilkan
                'question_id' => $question_id,
                'answer_id' => $answer_ids[$index],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect('home');
    }
    public function getQuestion(Request $request){
        $id = $request->id;
        // var_dump($request);
        $order = $id - 1;
        $question = Question::skip($order)->take(1)->first();
        // var_dump($question);
        $answers = Answer::where('question_id', $question->id)->get();

        $hasil = DB::select("select answer_id from detail_ujians left join ujians on ujians.id = detail_ujians.ujian_id where user_id =".Auth::user()->id." and question_id = ".$question->id." and cast(times as UNSIGNED) > 0 limit 1");
        if(count($hasil) > 0){
            $hasil = $hasil[0]->answer_id;
        }else{
            $hasil = 0;
        }
        

        return json_encode(['question' => $question, 'answer' => $answers, 'hasil'=> $hasil]);
    }
    public function saveAnswer(Request $request){

        $id = $_POST['ujian_id'];
        $ujian = Ujian::find($id);
        
        $answer = DetailUjian::where('ujian_id', $id)->where('question_id', $_POST['question_id']);
        
        $newWeight = Answer::find($_POST['answer_id']);

        if($answer->count() > 0){
            $answer = $answer->first();
            $oldAnswer = $answer->answer_id;
            $answer->answer_id = $_POST['answer_id'];
            $answer->updated_at = now();
            $answer->save();

            $old = Answer::find($oldAnswer);
            $score = (int)$ujian->score - (int)$old->weight + (int)$newWeight->weight;

        }else{
            $query = DB::table('detail_ujians')->insert([
                'ujian_id'  => $ujian->id,
                'question_id' => $_POST['question_id'],
                'answer_id' => $_POST['answer_id'],
                'created_at' => now()
            ]);
            $score = (int)$ujian->score+ (int)$newWeight->weight;
        }
        $ujian->score = $score;
        $ujian->save();
        return json_encode([]);
    }
    public function submit(Request $request){
        $ujian = Ujian::find($_POST['ujian_id']);
        $ujian->times = 0;
        $ujian->save();
        return json_encode(['status' => 'success']);
    }

}
