<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    //mass assignment issue
    // protected $fillable = ['title', 'description', 'photo'];
    // protected $guarded = ['id'];
}
