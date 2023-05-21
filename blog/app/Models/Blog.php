<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{
    public $id;
    public $title;
    public $body;
    //title,body
    public function __construct($id, $title, $body)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
    }

    public static function all()
    {
        $path = resource_path('blogs');
        $blogs = File::files($path); // [file obj, file obj ]
        $blogs = collect($blogs);
        //collections
        $blogs = $blogs
            ->map(function ($blog) {
                $filename = basename($blog);
                $path = resource_path('blogs/' . $filename); //absolute path
                $yamlObj = YamlFrontMatter::parseFile($path);
                return new Blog($yamlObj->id, $yamlObj->title, $yamlObj->body());
            })
            ->sortByDesc('id');

        return $blogs; // collection
    }


    public static function find($id)
    {
        dd($id);
    }
}

//new Blog()
