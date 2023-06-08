<?php

use App\Http\Controllers\AboutController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs = Blog::with(['category', 'author'])->latest()->get(); //N+1 issue ??? eager loading ???
    return view('blogs', [
        'blogs' => $blogs
    ]);
});

Route::get('/blogs/{blog}', function (Blog $blog) {
    return view('blog', [
        'blog' => $blog
    ]);
});

Route::get('/categories/{category:slug}/posts', function (Category $category) {
    return view('blogs', [
        'blogs' => $category->blogs()
            ->with(['category', 'author'])
            ->latest()
            ->get()
    ]);
});

Route::get('/users/{user:username}/posts', function (User $user) {
    //with -> query instance (not run)
    //query finish -> load
    return view('blogs', [
        'blogs' => $user->blogs() //  hasmany eloquent instance obj (query instance)
            ->with(['category', 'author'])
            ->latest()->get() // ?? why we r getting error ?
    ]);
});

Route::get('/about', [AboutController::class, 'hello']);
