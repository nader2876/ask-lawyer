<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class questionDetailsController extends Controller
{
   

    public function index($id)
    {
       $topAnswerer = User::query()
    ->where('role', 'lawyer')
    ->whereHas('replies', function ($q) use ($id) {
        $q->where('question_id', $id);
    })
    ->withCount('replies')
    ->orderByDesc('replies_count')
    ->first();



        $question= Question::findOrFail($id);
        $relatedQuestions= Question::where('category_id', $question->category_id)->where('id', '!=', $question->id)->limit(3)->get();
    return view('public.question-details', compact('question', 'relatedQuestions', 'topAnswerer'));
    }

    //
   
}
