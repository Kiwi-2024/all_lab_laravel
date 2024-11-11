<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    
    // protected $fillable = ['title', 'content', 'views'];
    // public $timestamps = false;
    // public function getPost()
    // {
    //     return $this->orderBy('views', 'desc')->limit(10)->get();
    // }
    // public function getPostById($id)
    // {
    //     return $this->find($id);
    // }
}
