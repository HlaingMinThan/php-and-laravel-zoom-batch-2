<?php

use App\Http\Controllers\AboutController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs = Blog::all();
    return view('blogs', [
        'blogs' => $blogs
    ]);
});

Route::get('/blogs/{id}', function ($id) {
    $blog = Blog::find($id);
    dd($blog);
});

Route::get('/about', [AboutController::class, 'hello']);
