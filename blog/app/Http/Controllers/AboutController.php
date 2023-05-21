<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function hello()
    {
        $names = ['mgmg', 'aung aung', 'zaw zaw'];

        return view('about', [
            'names' => $names
        ]);
    }
}
