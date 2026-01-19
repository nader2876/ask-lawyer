<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\question;
use  App\Models\Category;
class publicIndexController extends Controller
{
    //
    public function index()
    {
        $questions= Question::all();
        $categories= Category::all(); 
return view('public.index', compact('questions', 'categories'));
    }
    public function addQuestion()
    {
       $categories= Category::all(); 
return view('public.ask-question', compact('categories'));
    }
    public function storeQuestion(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
        $question= new Question();
        $question->title= $request->title;
        $question->description= $request->description;
        $question->category_id= $request->category_id;
        $question->user_id= auth()->user()->id;
        $question->save();
        return redirect()->route('index')->with('success', 'Your question has been submitted successfully!');
    }
}
