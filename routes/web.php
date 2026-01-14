<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Copy the contents of this file into your Laravel project's 'routes/web.php'.
| These routes map the URLs used in your static files to the new Blade views.
|
*/

// --- Public Pages ---

Route::get('/', function () {
    return view('public.index');
})->name('home');

Route::get('/index', function () {
    return view('public.index');
})->name('index');

Route::get('/lawyers', function () {
    return view('public.lawyers');
})->name('lawyers');

Route::get('/blog', function () {
    return view('public.blog');
})->name('blog');

Route::get('/ask-question', function () {
    return view('public.ask-question');
})->name('ask-question');

Route::get('/question-details', function () {
    return view('public.question-details');
})->name('question-details');

// Auth / Onboarding
Route::get('/login', function () {
    return view('public.login');
})->name('login');

Route::get('/register', function () {
    return view('public.register');
})->name('register');

Route::get('/lawyer-request', function () {
    return view('public.lawyer-request');
})->name('lawyer-request');

// Lawyer Specific (Protected in real app)
Route::get('/lawyer-profile', function () {
    return view('public.lawyer-profile');
})->name('lawyer-profile');

Route::get('/edit-lawyer-profile', function () {
    return view('public.edit-lawyer-profile');
})->name('edit-lawyer-profile');

Route::get('/new-article', function () {
    return view('public.new-article');
})->name('new-article');

Route::get('/edit-article', function () {
    return view('public.edit-article');
})->name('edit-article');

Route::get('/my-articles', function () {
    return view('public.my-articles');
})->name('my-articles');

Route::get('/article-details', function () {
    return view('public.article-details');
})->name('article-details');


// --- Admin Pages ---
// Prefix with /admin to keep it organized

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    })->name('admin.index');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('admin.users');

    Route::get('/lawyer-requests', function () {
        return view('admin.lawyer-requests');
    })->name('admin.lawyer-requests');

    Route::get('/questions', function () {
        return view('admin.questions');
    })->name('admin.questions');

    Route::get('/articles', function () {
        return view('admin.articles');
    })->name('admin.articles');

    Route::get('/categories', function () {
        return view('admin.categories');
    })->name('admin.categories');

});
