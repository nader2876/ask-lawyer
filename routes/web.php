<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ============================================================================
// 1) PUBLIC ROUTES
// ============================================================================

Route::view('/', 'public.index')->name('home');
Route::view('/index', 'public.index')->name('index'); // Alias

Route::view('/question-details', 'public.question-details')->name('question-details'); // Using generic for demo, usually /{id}
Route::view('/ask', 'public.ask-question')->name('ask-question');
Route::view('/lawyers', 'public.lawyers')->name('lawyers');
Route::view('/lawyer-profile', 'public.lawyer-profile')->name('lawyer-profile'); // Generic for demo
Route::view('/edit-lawyer-profile', 'public.edit-lawyer-profile')->name('edit-lawyer-profile'); // Generic for demo

Route::view('/blog', 'public.blog')->name('blog');
Route::view('/article/details', 'public.article-details')->name('article-details'); // Generic for demo

Route::view('/login', 'public.login')->name('login');
Route::view('/register', 'public.register')->name('register');
Route::view('/lawyer/request', 'public.lawyer-request')->name('lawyer-request');

// ============================================================================
// 2) ADMIN ROUTES
// Prefix: /admin
// ============================================================================

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::view('/dashboard', 'admin.dashboard'); // Alias
    
    Route::resource('users',  \App\Http\Controllers\Admin\UserController::class);
    Route::view('/lawyer-requests', 'admin.lawyer-requests.index')->name('lawyer-requests');
    Route::view('/questions', 'admin.questions.index')->name('questions');
    Route::view('/articles', 'admin.articles.index')->name('articles');
    Route::view('/categories', 'admin.categories.index')->name('categories');
});

// ============================================================================
// 3) LAWYER ROUTES
// Prefix: /lawyer
// ============================================================================

Route::prefix('lawyer')->name('lawyer.')->group(function () {
    Route::view('/', 'lawyer.dashboard')->name('dashboard');
    Route::view('/dashboard', 'lawyer.dashboard'); // Alias
    
    Route::view('/questions', 'lawyer.questions.index')->name('questions.index');
    
    Route::view('/answers', 'lawyer.answers.index')->name('answers.index');
    Route::view('/answers/edit', 'lawyer.answers.edit')->name('answers.edit');
    
    Route::view('/articles', 'lawyer.articles.index')->name('articles.index');
    Route::view('/articles/create', 'lawyer.articles.create')->name('articles.create');
    Route::view('/articles/edit', 'lawyer.articles.edit')->name('articles.edit');
    
    Route::view('/profile/edit', 'lawyer.profile.edit')->name('profile.edit');
});
