<?php

namespace App\Http\Controllers;

use App\Models\DetailUjian;
use App\Models\Question;
use App\Models\Ujian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::simplePaginate(1);
        $getAllQuestions = Question::all();
        $currentPage = request()->has('page') ? (int) request()->input('page') : 1;
        $questionNumber = ($currentPage - 1) * 1 + 1; // Hitung nomor soal berdasarkan halaman saat ini

        return view('exams.index', compact('questions', 'getAllQuestions', 'questionNumber'));
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
}
