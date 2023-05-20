<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});

Route::get('/about', [AboutController::class, 'hello']);
