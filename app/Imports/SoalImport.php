<?php

namespace App\Imports;

use App\Models\Question;
use App\Models\Answer;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\DB;

class SoalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new Question([
    //         'question_text'   => $row[1],
    //         'datatipesoal_id' => $row[2],
    //     ]);
    // }

    public function model(array $row)
    {
        $question = Question::create([
            'question_text' => $row[0],
        ]);
    
        // Iterasi melalui setiap kolom yang berisi jawaban dan bobot
        for ($i = 1; $i < count($row); $i += 2) {
            // Periksa apakah ada nilai untuk jawaban dan bobot
            if (!empty($row[$i]) && isset($row[$i + 1])) {
                $answer = new Answer([
                    'answer_text' => $row[$i],
                    'weight' => $row[$i + 1],
                ]);
                $question->answers()->save($answer);
            }
        }
    
        return $question;
    }
}
