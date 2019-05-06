<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Category;

class Post extends Model
{
    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
