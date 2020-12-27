<?php

namespace App\Http\Controllers;

use App\BcsQuestion;
use Illuminate\Http\Request;

class BCSQuizController extends Controller
{
    //
    public function bcs_quiz(){
        $bcs_questions = BcsQuestion::all()->take(10);
       
        // filter questions
        

        return view('bcs_questions.index', compact('bcs_questions'));
    }
}
