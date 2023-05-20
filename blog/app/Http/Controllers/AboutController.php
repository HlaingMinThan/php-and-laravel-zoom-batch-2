<?php

namespace App\Http\Controllers;

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
