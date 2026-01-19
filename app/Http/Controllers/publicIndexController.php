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
}
