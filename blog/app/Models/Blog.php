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

    //Blog belongs to a category

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id'); //category_id
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
